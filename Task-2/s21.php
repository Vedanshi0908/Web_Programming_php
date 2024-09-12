<?php

$number=$_REQUEST['num'];
$str_num=strval($number);
$rev_str=strrev($str_num);

if($rev_str == $str_num)
{
    echo "<h2>$number Number is palindrome</h2>";
}
else
{
    echo "<h2>$number Number is not palindrome</h2>";
}

?>