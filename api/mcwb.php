  <?php
$phn=$_GET["phone"];
$url = "https://www.mcwbd999.com/wps/verification/sms/register";

$headers = array(
    "Host: www.mcwbd999.com",
    "Content-Length: 53",
    "X-Gateway-Version: 3",
    "Sec-Ch-UA: \"Chromium\";v=\"122\", \"Not(A:Brand\";v=\"24\", \"Android WebView\";v=\"122\"",
    "Language: EN",
    "Sec-Ch-UA-Mobile: ?1",
    "User-Agent: Mozilla/5.0 (Linux; Android 11; Pixel 5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.91 Mobile Safari/537.36",
    "Content-Type: application/json",
    "Merchant: mcwbdf3",
    "Accept: application/json, text/plain, */*",
    "Moduleid: REGMOBVERF3",
    "Sec-Ch-UA-Platform: \"Android\"",
    "Origin: https://www.mcwbd999.com",
    "Sec-Fetch-Site: same-origin",
    "Sec-Fetch-Mode: cors",
    "Sec-Fetch-Dest: empty",
    "Referer: https://www.mcwbd999.com/m/register?affiliateCode=gq0wk",
    "Accept-Encoding: gzip, deflate, br, zstd",
    "Accept-Language: en-US,en;q=0.9"
);

$data = json_encode(array(
    "mobileNo" => $phn,
    "countryDialingCode" => "880"
));

$ch = curl_init($url);

curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$response = curl_exec($ch);

curl_close($ch);

// Handle the response as needed
echo $response;
?>
