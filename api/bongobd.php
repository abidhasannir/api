<?php
$phn = $_REQUEST["phone"];
$url = "https://api.bongo-solutions.com/auth/api/v2/login/send-otp";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/109.0",
   "Content-Type: application/json",
   "Access-code: QkQ%3D",
   "Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJzdWIiOiI1NmE2OGVjNi03YWMxLTRjMDAtYjExNy0yNGZhYTVjMmY4YzciLCJpc3MiOiJIRUlNREFMTCIsInJvbGVzIjpbIlJPTEVfVVNFUiIsIlJPTEVfVVNFUl9BTk9OWU1PVVMiXSwidXNlcm5hbWUiOiJhbm9ueW1vdXMiLCJjbGllbnRfbG9naW5faWQiOjk2MTE0Nzc5OTM4LCJjbGllbnRfaWQiOiI3OTNhM2M5NTc2MjI0OTkwODY5ODhiMDVhMzRlODAzMCIsInBsYXRmb3JtX2lkIjoiYWJmZWE0NjItZjY0ZC00OTFlLTljZDktNzVlZTAwMWY0NWIwIiwiYm9uZ29faWQiOiI1NmE2OGVjNi03YWMxLTRjMDAtYjExNy0yNGZhYTVjMmY4YzciLCJ1c2VyX3R5cGUiOiJhbm9ueW1vdXMiLCJpYXQiOjE3MTAxNDk1OTEsImV4cCI6MTcxNzkyNTYwMS4wLCJjb3VudHJ5Q29kZSI6IkJEIiwicHJlZmVycmVkX3VzZXJuYW1lIjpudWxsfQ.fPcw65NNfcrKxnlfzBJoVfDqsEpH0xAt4XTUJMfCKT0sDEVZa5T-aXummdkA3ShyqwgUS1O9Y1-l1VKXhMMmsYR83YL7Jp_YIWgYiKjjnlhDZESZPta9Wu1Ssdm8AZZUlpMA100mq5SvVRTLqFYcsiXKde1nGVAkoIggjd4pGTCWMOsQQNRe8SiLzxzYgklygwJUma9OVJsOR_VpZyU_MXZ8i-FD4m4mFFCH-udFA67aAp0j35e5sG1xr4db-xfdCxf-OoRoV9uiEz0MqYZbld6-vBLM9-Tt_RhGn10tYtj3SUPETTYFKw8TjcXAXsBvmif3CK3634KHHW8sjntJ2Luc5x24E9T-oy6kyZG3fJVQY-wuIcK7tycQaGWSHKW9vJRxOZH7Db2VqFWwLMUqhrd0uACwoTazJvGoMFJOpZuu_4Nt8Q-LfBNJDw5XMxq4JUp3Jixp6Xf8osKB-S14p6X7XR24VbW_siuaS00L6D6e9ogb4vliAMGw017gYTxAtWCIi4J3L9K-apA2BJ-RkM-suHMYOaTqVf1-GUDb4I7jYCp1ePSmVqEgugjlrOAafF2LIjjQtZqEEE6CMSxfI0y0rhbzAcTlG7NYlH53YKLlvGr9QVqC9FD8RX8CWw8zF4rv161bbgWRUxeWQFocmMDAIrXTN1vV3bx-mTVUeJE",
   "platform-id: abfea462-f64d-491e-9cd9-75ee001f45b0",
   "Country-Code: QkQ%3D",
   "client-id: abfea462-f64d-491e-9cd9-75ee001f45b0",
   "Origin: https://gp.bioscopelive.com",
   "Connection: keep-alive",
   "Referer: https://gp.bioscopelive.com/",
   
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
//{"operator":"all","msisdn":"8801897984421","token":"eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzUxMiJ9.eyJleHAiOjE3NDAzNzgwMzAuMH0.T-Zngti1xkCh6SnmJRcZjTUr8uCdLtpo1s00-SOaofpT-woZNnCJhxpRLPrLLj6I7X1k6-Pa03om4vmHCTKjuA","token_type":"CUSTOM_TOKEN_V1"}

$ps = array(
"operator"=>"all","msisdn"=>"88".$phn,"token"=>"eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzUxMiJ9.eyJleHAiOjE3NDAzNzgwMzAuMH0.T-Zngti1xkCh6SnmJRcZjTUr8uCdLtpo1s00-SOaofpT-woZNnCJhxpRLPrLLj6I7X1k6-Pa03om4vmHCTKjuA","token_type"=>"CUSTOM_TOKEN_V1"
);

$data = json_encode($ps);
curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
curl_close($curl);
echo($resp);

?>

