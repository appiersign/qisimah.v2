<?php
namespace App;

use Illuminate\Support\Facades\Log;

class FingerPrint
{
    private $account_access_key;
    private $account_access_secret;
    private $file;
    private $audio_id;
    private $title;
    private $bucket_name;
    private $song;

    public function __construct(Song $song, string $bucket_name)
    {
        $this->song = $song;
        $this->file = $this->song->getFullAudioPath();
        $this->audio_id = $this->song->qisimah_id;
        $this->title = $this->song->getArtistAndTitle();
        $this->bucket_name = $bucket_name;
        $this->account_access_key = env('ACR_ACCOUNT_ACCESS_KEY');
        $this->account_access_secret = env('ACR_ACCOUNT_ACCESS_SECRET');
    }

    public function getFilePath()
    {
        return $this->file;
    }

    public function do(): bool
    {
        $this->song->setStatus(2)->save();
        $request_url = env('ACR_FINGER_PRINT_URL');
        $http_method = 'POST';
        $http_uri = '/v1/audios';
        $timestamp = time();
        $signature_version = '1';
        $string_to_sign = $http_method . "\n" . $http_uri . "\n" . $this->account_access_key . "\n" . $signature_version . "\n" . $timestamp;
        $signature = hash_hmac("sha1", $string_to_sign, $this->account_access_secret, true);
        $signature = base64_encode($signature);
        if (class_exists('\CURLFile')) {
            $cfile = new \CURLFile($this->file, 'audio/mp3', basename($this->file));
        } else {
            $cfile = '@' . $this->file;
        }
        $postfields = array(
            'audio_file' => $cfile,
            'title' => $this->title,
            'audio_id' => $this->audio_id,
            'bucket_name' => $this->bucket_name,
            'data_type' => 'audio',
            // if you upload fingerprint file please set 'data_type'=>'fingerprint'
        );
        $headers = array(
            'access-key' => $this->account_access_key,
            'timestamp' => $timestamp,
            'signature-version' => '1',
            'signature' => $signature
        );
        foreach ($headers as $n => $v) {
            $headerArr[] = $n . ':' . $v;
        }
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $request_url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postfields);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headerArr);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        try {
            $response = json_decode(curl_exec($ch), true);
            if ($response === false){
                return curl_errno($ch);
            }
            if (isset($response['acr_id'])) {
                return $this->song->setDuration($response['duration_ms'])
                    ->setStatus(1)
                    ->setAcrId($response['acr_id'])
                    ->save();
            } else {
                return false;
            }
        } catch (\Exception $exception) {
            return $exception->getMessage();
        }
    }
}