<?php
$no = $_REQUEST['num'];

if ($no % 2 == 0) {
    echo "<h1>" . $no . " is even number</h1>";
} else {
    echo "<h1>". $no . " is odd number</h1>";
}
