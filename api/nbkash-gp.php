<?php
$phn=$_GET['phone'];

$url = "https://account.bkash.com/personal-retail-account/gateway/api/public/otp/send";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
    "User-Agent: Monibot",
    "Content-Type: application/json",
);

curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

$data = array(
    'phoneNumber' => $phn,
    'phoneOperator' => 'GRAMEENPHONE',
);

curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));

// For debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);

// Check for errors
if (curl_errno($curl)) {
    echo 'Curl error: ' . curl_error($curl);
}

curl_close($curl);

var_dump($resp);

?>
