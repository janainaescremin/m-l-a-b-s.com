<?php
$url = 'https://2-inbox';
$fields = array(
            'id'=>urlencode('https://2-inbox'),
            'scrape'=>urlencode(true),
            'access_token'=>"<476446742709141|dTgRSQtJ1TA9uquKWUL3xkaTSpA>"
        );

$fields_string = '';
foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
$fields_string = rtrim($fields_string,'&');


$ch = curl_init();

curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_POST,count($fields));
curl_setopt($ch,CURLOPT_POSTFIELDS,$fields_string);

$result = curl_exec($ch);
?>
