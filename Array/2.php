<?php

$frt=array("Mango","Banana","Orange","Watermalon","Malon");

print_r($frt);

$frt[] = "Fig";
$frt[] = "Grape";
echo"<br>After add 2 value<br>";
print_r($frt);

unset($frt[0]);

echo "<br>After remove 1st value<br>";

print_r($frt)

?>