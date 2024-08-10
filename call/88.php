<?php
$phn1=$_GET["phone"];
$url = 'https://www.8654231.com/wps/verification/sms/register';
$data = [
    "mobileNo" => $phn1,
    "countryDialingCode" => "880",
];

$headers = [
    'Content-Type: application/json',
    'User-Agent: Mozilla/5.0 (Windows NT 6.0; Win64; x64; en-US) AppleWebKit/602.15 (KHTML, like Gecko) Chrome/49.0.3145.397 Safari/603',
    'Referer: https://www.8654231.com/m/register?affiliateCode=dbycj',
    'Cookie: tcg-sid=0a70b09c-a032-43f1-86f2-63d6dae3f98f',
    'Merchant: jili777f3',
    'ModuleId: REGMOBVERF3',
    'Language: EN',
];

$options = [
    CURLOPT_URL            => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST           => true,
    CURLOPT_POSTFIELDS     => json_encode($data),
    CURLOPT_HTTPHEADER     => $headers,
];

$curl = curl_init();
curl_setopt_array($curl, $options);

$response = curl_exec($curl);

if ($response === false) {
    echo 'Curl error: ' . curl_error($curl);
} else {
    echo 'API Response: ' . $response;
}

curl_close($curl);

?>
