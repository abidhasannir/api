<?php
$phn1=$_GET["phone"];
$phn = ltrim($phn1, '0');  //to remove 0 from 11 digit number
$url = "https://api.lendorabd.com/Lendo/extsendsms/rapage/";

$data = array(
    "LendoPhoneTypeIn" => "REGISTER_OR_LOGIN",
    "LendoPhoneIn" => $phn,
    "LendoPAccessTokenaram" => "",
    "LendoPPhoneChannelaram" => "google",
    "LendoPDeviceIdaram" => "tor-make-chudi-khankir-pola",
    "LendoPPhoneModelaram" => "Goa-mara",
    "LendoPPhoneOsaram" => "11",
    "LendoPPhonePlatformaram" => "Android",
    "LendoPAppPackagearam" => "com.taka.dora",
    "LendoPAppVersionaram" => "1.0.0"
);

// Convert data to JSON format
$jsonData = json_encode($data);

// Initialize cURL session
$ch = curl_init();

// Set cURL options
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute cURL session and get the response
$response = curl_exec($ch);

// Check for cURL errors
if (curl_errno($ch)) {
    echo 'Curl error: ' . curl_error($ch);
}

// Close cURL session
curl_close($ch);

// Output the response
echo $response;
?>

