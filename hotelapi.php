<?php
$username='mamansh';
$password='Chiku768896';
$URL='https://www.zopim.com/api/v2/chats';

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$URL);
curl_setopt($ch, CURLOPT_TIMEOUT, 30); //timeout after 30 seconds
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");



$result=curl_exec ($ch);
$status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);   //get status code
curl_close ($ch);

$obj = json_decode($result);
print $obj->{'user'}; 
echo $obj->{'message'};

<?>