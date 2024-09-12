<?php

$a=0;
for ($i=1; $i <=100; $i++) { 

    $sum=$a + $i ;
    $a=$sum;
    // echo $sum."<br>";
}
echo "<h1> Addition of 1 to 100 is: ". $sum . "<br></h1>";
?>