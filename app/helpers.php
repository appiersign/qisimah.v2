<?php

function generateVerificationCode()
{
    $string = str_shuffle('0147852036987456321');
    return substr($string, 0, 3). '-'. substr(str_shuffle($string), 0, 3);
}