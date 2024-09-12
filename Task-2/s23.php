<?php

$no1=$_REQUEST['num1'];
$no2=$_REQUEST['num2'];
$no3=$_REQUEST['num3'];

if($no1 > $no2)
{
    if($no1 > $no3)
    {
        echo "<h2>$no1 is largest</h2>";
    }
    else{
        echo "<h2>$no3 is largest</h2>";
    }
}
else{
    if($no2 > $no3)
    {
        echo "<h2>$no2 is largest</h2>";
    }
    else
    {
        echo "<h2>$no3 is largest</h2>";
    }
}
?>