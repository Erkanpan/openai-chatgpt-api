<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.openai.com/v1/files',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => array('file'=> new CURLFILE('1MO0A-n7T/erhan.jsonl'),'purpose' => 'fine-tune'),
  CURLOPT_HTTPHEADER => array(
    'Authorization: Bearer sk-senin-api-key'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
// decode encode yaparak response içinden istediğiniz veriyi alın.

//gelen cevaptaki file-id'yi alıyorsunuz.
?>
