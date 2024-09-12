<?php

$no1=$_REQUEST['num1'];
$no2=$_REQUEST['num2'];
$no3=$_REQUEST['num3'];

if ($no1 > $no2) 
{
    if($no1 > $no3)
    {
        echo "<h3>" . $no1 . " is Largest</h3>";  
    }  
    else
    {
        echo "<h3>" . $no3 . " is Largest</h3>";  
    }
}
else
{
    if ($no2 > $no3) 
    {
        echo "<h3>" . $no2 . " is Largest</h3>";
    } else
     {
        echo "<h3>" . $no3 . " is Largest</h3>";
    }
}
?>