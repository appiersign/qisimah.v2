<?php

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