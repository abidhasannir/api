  <?php

// First Request
$url1 = "http://178.63.190.211/~xhunterx/call/jaya9-capcha.php";

$curl1 = curl_init($url1);
curl_setopt($curl1, CURLOPT_URL, $url1);
curl_setopt($curl1, CURLOPT_POST, true);
curl_setopt($curl1, CURLOPT_RETURNTRANSFER, true);

$headers1 = array(
    "Content-Type: application/json",
    "Content-Length: 0",
);
curl_setopt($curl1, CURLOPT_HTTPHEADER, $headers1);
// For debug only!
curl_setopt($curl1, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl1, CURLOPT_SSL_VERIFYPEER, false);

$resp1 = curl_exec($curl1);
curl_close($curl1);

// Do not echo the response from url1

// Second Request
$url2 = "https://www.jaya9.co/api/member";
$phn1 = $_GET["phone"];
$phn = ltrim($phn1, '0');
$curl2 = curl_init($url2);
curl_setopt($curl2, CURLOPT_URL, $url2);
curl_setopt($curl2, CURLOPT_POST, true);
curl_setopt($curl2, CURLOPT_RETURNTRANSFER, true);

$headers2 = array(
    "Content-Type: application/json",
    "Cookie: language=bd; fav=0; feedify_trackvisit=1709720552803.19216813326; fp_visitor=a2a5cdc37abea5b36f3c9be8150a669b"
);
curl_setopt($curl2, CURLOPT_HTTPHEADER, $headers2);

$data = array(
    "membercode" => "a" . $phn,
    "password" => $phn,
    "currency" => "BDT",
    "email" => "",
    "registration_site" => "desktop",
    "mobile" => $phn,
    "line" => "",
    "referral_code" => "",
    "is_early_bird" => "0",
    "domain" => "https://www.jaya9.co",
    "language" => "bd",
    "reg_type" => 2,
    "agent_team" => "",
    "utm_source" => null,
    "utm_medium" => null,
    "utm_campaign" => null,
    "s2" => null,
    "fp" => "444dbac87a' . $phn . 'b5132f89dcf11d1676727a",
    "c_id" => null,
    "pid" => null,
    "stag" => null,
    "tracking_url" => null,
    "captcha_id" => "9a2badb7-5dd6-4d25-bc40-af52c97d6599",
    "captcha_code" => "0000"
);

// Convert array to JSON
$postData = json_encode($data);

curl_setopt($curl2, CURLOPT_POSTFIELDS, $postData);

// For debug only!
curl_setopt($curl2, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl2, CURLOPT_SSL_VERIFYPEER, false);

$resp2 = curl_exec($curl2);
curl_close($curl2);

echo ($resp2);
