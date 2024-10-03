<?php

$cntry = array("India" => "Delhi", "United Kingdom" => "London", "Japan" => "Tokyo", "Russia" => "	
Moscow", "Germany" => "Berlin");

print_r($cntry);

echo "<br>Key in onrder<br>";

ksort($cntry);
print_r($cntry);

echo "<br>Value in descending <br>";

rsort($cntry);
print_r($cntry);


?>