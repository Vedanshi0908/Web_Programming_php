<?php

$stud=array(array("Devika",89,87,88),
            array("Honey",85,75,78),
            array("Nency",87,75,87) );

foreach($stud as $row){
    foreach($row as $val){
        echo "<br>$val";
    }    
    echo"<br>";
}
?>