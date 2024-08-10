  <?php

$url = "https://feapi.turtle888.xyz/api/member/requestCaptchaCode?captcha_id=9a2badb7-5dd6-4d25-bc40-af52c97d6599&captcha_code=0000";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
curl_close($curl);
echo($resp);

?>

