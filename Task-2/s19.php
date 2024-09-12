<?php
$number = $_REQUEST['num'];
$temp = true;

if ($number < 2) 
{
    $temp = false;
} 
else 
{
    for ($i = 2; $i < $number; $i++) {
        if ($number % $i == 0) {
            $temp = false;
            break;
        }
    }
}

if ($temp) 
{
    echo "<h3>$number is a prime number</h3>";
} else 
{
    echo "$number is not a prime number</h3>";
}
