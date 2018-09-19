<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

function generateVerificationCode($code = '')
{
    if ($code){ return $code; }

    $string = str_shuffle('0147852036987456321');
    return substr($string, 0, 3). '-'. substr(str_shuffle($string), 0, 3);
}

function sendRequest($url, $headers = ['Content-Type: application/json'], $fields = '', $method = 'GET')
{
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $method);
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    if ($method === 'POST') {
        curl_setopt($curl, CURLOPT_POSTFIELDS, $fields);
    }
    try {
        return curl_exec($curl);
    } catch (\Exception $exception) {
        Log::info('Instagram SendRequest Error');
        Log::error($exception->getCode() . ' => ' . $exception->getMessage());
    }
}

function getDateDiff(string $from, string $to)
{
    $from = Carbon::parse($from);
    $to = Carbon::parse($to);
    return $to->diffInDays($from);
}


/**
 * @param string $qisimah_id
 * @return array|string
 */
function getArtistSongs(string $qisimah_id)
{
    try {
        $artist = \App\Artist::with('songs', 'features')->where('qisimah_id', $qisimah_id)->first();
        if (is_null($artist)) {
            throw new Exception('Artist does not exist');
        }
        return [$artist, $artist->songs()->pluck('qisimah_id')->toArray()];
    } catch (Exception $exception) {
        return $exception->getMessage();
    }
}