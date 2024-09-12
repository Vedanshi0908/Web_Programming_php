<?php

$no1=$_REQUEST['num1'];
$no2=$_REQUEST['num2'];

echo "<h2>Before swaping<br>number1=$no1 & number2=$no2</h2>";

$no1=$no1+$no2;
$no2=$no1-$no2;
$no1=$no1-$no2;

echo "<h2>After swaping<br>number1=$no1 & number2=$no2</h2>";

?>