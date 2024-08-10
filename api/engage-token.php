<?php

$url = "https://www.engagewinner.com/api/users/01860744898/registration_redirect/?amount=20&phone_number=01860744898&subscriptionDuration=8&subscriptionName=Engage%20Weekly&subscriptionID=Engage%20Weekly&description=Engage%20Weekly&isSubscription=true";

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

