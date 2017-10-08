<?php

$get = file_get_contents('https://api.dopehosting.net/namecheap/com.json');
$json = json_decode($get, true);

$dc = $json['CommandResponse']['UserGetPricingResult']['ProductType']['ProductCategory']['Product']['Price']['0']['@attributes']['Price'];
// output just price ex 10.00
print_r($dc);
?>
