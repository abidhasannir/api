<?php
$phn=$_GET["phone"];
$url = "https://api.daktarbhai.com/api/v2/otp/generate?&api_key=BUFWICFGGNILMSLIYUVE&api_secret=WZENOMMJPOKHYOMJSPOGZNAGMPAEZDMLNVXGMTVH&mobile=%2B88".$phn."&platform=app&activity=login";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "user-agent: Morizila/5.0",
   "Content-Type: application/json",
   "Content-Length: 0",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
curl_close($curl);
echo($resp);

?>

