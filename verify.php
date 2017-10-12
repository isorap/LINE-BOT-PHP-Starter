<?php
$access_token = '1beNbdz0va82282NqcXJjfpMpwdvJNEHd+IM1/gxCTgShLepVoVBmYiBCc0JP+kFuWzQ9RD8B6Bi17ZYnSLEQxN21vCvCd2c9L6Pb9xADBKgSTE7vCP+yobDW2ApF5+ISv4cyHImCWRsL5RYFBcYTAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;