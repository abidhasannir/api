<?php
$phn=$_GET["phone"];
// Function to make an HTTP request
function makeHttpRequest($url, $data) {
    $ch = curl_init($url);

    // Set CURL options
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

    // Execute the request
    $response = curl_exec($ch);

    // Close CURL session
    curl_close($ch);

    return $response;
}

// First request
$url1 = 'https://foodcollections.com/api/v1/auth/sign-up';
$data1 = array(
    "f_name" => "korim",
    "l_name" => "Mia",
    "phone" => "+88".$phn,
    "email" => "ryhr".$phn."ehrdth@gmail.com",
    "password" => "boss2023",
    "ref_code" => ""
);

$response1 = makeHttpRequest($url1, $data1);

// Introduce a delay of 0.5 seconds
sleep(0.5);

// Second request
$url2 = 'https://foodcollections.com/api/v1/auth/forgot-password';
$data2 = array(
    "phone" => "+88".$phn
);

$response2 = makeHttpRequest($url2, $data2);

// Output responses

echo "Response 2: " . $response2 . "\n";

?>
