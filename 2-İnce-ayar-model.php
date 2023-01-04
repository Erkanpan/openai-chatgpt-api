<?php
// veriyüklerken aldığımız file İd'yi training file karşısına yapıştırıyoruz
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.openai.com/v1/fine-tunes/',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{
"training_file": "senin-file-id",
"model": "davinci"
}',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json',
    'Authorization: Bearer sk-api-keyiniz-buraya'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
// decode encode yaparak response içinden istediğiniz veriyi alın.

// fine tune mode karşısında yazan model isminiz alınız

?>
