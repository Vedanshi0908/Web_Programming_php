<?php

$city = array(
    array("Rajokot" => 50000, "Kalawad road", "India"),
    array("Thunderbay" => 3000, "Downtown", "Canada"),
    array("Delhi" => 30000, "new delhi", "India")
);

foreach ($city as $row) {
    foreach ($row as $val) {
        echo "<br>$val";
    }
    echo "<br>";
}
?>
