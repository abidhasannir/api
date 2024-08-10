 <?php
$phn1=$_GET["phone"];
$phn = ltrim($phn1, '0');  //to remove 0 from 11 digit number
$url = "https://api.mhnmi.com/api/Index/sendMsg";

$data = [
    "area_code" => "880",
    "mobile" => $phn,
];

$headers = [
    "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/109.0",
    "Origin: https://mhnmi.com",
    "Alt-Used: api.mhnmi.com",
    "Referer: https://mhnmi.com/",
    "Cookie: think_lang=en-us; PHPSESSID=aeac0bfd4fb199f0b3d9803eab49517a",
];

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);

if (curl_errno($ch)) {
    echo 'Error: ' . curl_error($ch);
}

curl_close($ch);

echo $response;

?>
