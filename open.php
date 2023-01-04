<?php

$curl = curl_init();
$konu = $_POST['konu'];
curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.openai.com/v1/completions',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{
"model": "text-davinci-003", 
"prompt": '.$konu.', 
"temperature": 0, 
"max_tokens": 250
}',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json',
    'Authorization: Bearer sk-api-keyiniz-buraya'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;



?>


