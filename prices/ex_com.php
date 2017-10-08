<?php

$get = file_get_contents('https://api.dopehosting.net/namecheap/com.json');
$json = json_decode($get, true);

$dc = $json['CommandResponse']['UserGetPricingResult']['ProductType']['ProductCategory']['Product']['Price']['0']['@attributes']['Price'];
//echo $dc;
print_r($dc);
?>
