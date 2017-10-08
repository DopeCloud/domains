<?php
header("Content-Type: application/json; charset=UTF-8");
$url="https://api.namecheap.com/xml.response?ApiUser=...";
$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $url);

$data = curl_exec($ch);
curl_close($ch);

$xml = simplexml_load_string($data);
$myJSON = json_encode($xml);
echo $myJSON;
?>
