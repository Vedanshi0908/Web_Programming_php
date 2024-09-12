<?php

$string=$_REQUEST['str'];

$vowels = 0;

for ($i = 0; $i < strlen($string); $i++) 
{
   
    if ($string[$i] == 'a' || $string[$i] == 'e' || $string[$i] == 'i' || $string[$i] == 'o' || $string[$i] == 'u' || $string[$i] == 'A' || $string[$i] == 'E' || $string[$i] == 'I' || $string[$i] == 'O' || $string[$i] == 'U') 
    {
        $vowels++;
    }
}

echo "<h2>Number of vowels: " . $vowels. "</h2>";
