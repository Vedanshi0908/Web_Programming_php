<?php

$cntry = array("India" => "Delhi", "United Kingdom" => "London", "Japan" => "Tokyo", "Russia" => "	
Moscow", "Germany" => "Berlin");

print_r($cntry);
echo"<br>Modify values";
$cntry["United Kingdom"]="Otawa";

foreach ($cntry as $key => $val) {
    echo "$key : $val<br>";
}
