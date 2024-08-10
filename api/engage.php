<?php
$phn1=$_GET["phone"];

$phn = ltrim($phn1, '0');  //to remove 0 from 11 digit number
// First request to url1 to get aocToken
$url1 = 'https://pikatoolsbd.serv00.net/engage-token.php';
$ch = curl_init($url1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error: ' . curl_error($ch);
    exit;
}
curl_close($ch);

// Extracting aocToken from the response
$data = json_decode($response, true);
$aocToken = $data['aocToken'];

// Second request to url2 using aocToken
$url2 = 'http://robi.mife-aoc.com/api/robi/aoc/ask/'.$aocToken;
$data = array(
    'msisdn' => $phn
);

$ch = curl_init($url2);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    
));

$response = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error: ' . curl_error($ch);
    exit;
}
curl_close($ch);

// Output the response from url2
echo $response;
?>
