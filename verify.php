<?php
$access_token = '94BkkcvLjVdd4fgFBpI8+IXfz2yCJbI4lij8EZojyCl+R92y6ZxqrEAbTtC8Ld9tFVhCAi6fa7YVYWJMSvWRqFaB/xNY2ziWMCk04yWXeLlH3IkNxeqMVe578CuZXmafInpy/+iQcXJCXv2glcvnugdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
