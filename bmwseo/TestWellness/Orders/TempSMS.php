<?php
try
{
// Account details
$apiKey = urlencode(‘kNHRWRZrYb8-ZFCOu2WMFJGL9kYhi7zgFPMKCQuyYv’);
// Message details
$numbers = array(9962905512);
$sender = urlencode(‘BALEEN’);
$message = rawurlencode('Thanks for choosing Baleen Media. Your Order# is 10099. For help, please call Mugunthan. For Issues, pls call Leenah @ 09556603113 - Baleen Media');
 
$numbers = implode(‘,’, $numbers);
 
// Prepare data for POST request
$data = array(‘apikey’ => $apiKey, ‘numbers’ => $numbers, “sender” => $sender, “message” => $message);
// Send the POST request with cURL
$ch = curl_init(‘https://api.textlocal.in/send/’);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);
// Process your response here
echo $response;
echo "Message sent successfully";
}
catch (exception $message)
{
    echo $message;
}
?>