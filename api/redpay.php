 <?php
$phn1=$_GET["phone"];
$phn = ltrim($phn1, '0');  //to remove 0 from 11 digit number
$url = "https://www.redotpay.com/wapi/v1/user/mobile/resend";
$data = array(
    "action" => "register",
    "nationCode" => "+880",
    "mobile" => $phn,
    "recaptchaToken" => "CN31_eg89HnPPI2Org6XzVvgcasCrjPtqt30JJzi2*cxu1kZtvI2W6p1zv1xX*c1Qm_mSI0haitAUp4KbICqnI3awfxltg8oSpq0LJ6wP3pJBGxPNWcuh2Iol.0XPWCAwyDdUFPLW0SZav6dbmmgKrLdwQrwDWoVhh_FZVttU8Tvp.wEiPz94Zgpz1iQY2FxppnUL_AMJR9VTgz4if6IOVbI9HUDGKmhcP65RKPZIt5_Ook6jXqOhgW1QcPejls3dto1kkArKOlYM*sOUXgkSJdqCIWNRh8Xj_VrknOnmA_jXNVz05GWEOco5LFCZDU1wgma.siOz._a4lXjMznV*dICZdY_p4OwfP1cXBi90skQvXhtZwipbbAIvyGTa3dSDxer6lO10WZd6GfDXmGG1H9fTq9ALtQ665V2uGS2r5kWuJdMxaXMefQNhQyKZ1JsQicUlspH_.WPmhLMFxgC2su0lj4_s.9yi38fsaKTD4kNrwvbE8qeZAoskxBi81ZQJQdmAX*xcIM77_v_i_1"
);

$options = array(
    CURLOPT_URL => $url,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => json_encode($data),
    CURLOPT_HTTPHEADER => array(
        'Content-Type: application/json',
        'User-Agent: Mozilla/5.0 (compatible; MSIE 9.0; Windows; U; Windows NT 6.2; x64; en-US Trident/5.0)',
    ),
    CURLOPT_RETURNTRANSFER => true,
);

$curl = curl_init();
curl_setopt_array($curl, $options);

$response = curl_exec($curl);

if ($response === false) {
    echo 'cURL error: ' . curl_error($curl);
} else {
    echo 'Response: ' . $response;
}

curl_close($curl);

?>
