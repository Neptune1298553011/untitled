<?php
$curl = curl_init(); //$curl is going to be data type curl resource
curl_setopt($curl, CURLOPT_URL, 'https://www.baidu.com/');
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER ,false);
curl_exec($curl);