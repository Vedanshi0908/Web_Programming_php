<?php

$yr=$_REQUEST['year'];


if (($yr % 4 == 0 && $yr % 100 != 0) || ($yr % 400 == 0))
{
    echo "<h3> $yr is leap year</h3>";
}
else
{
    echo "<h3> $yr is not leap year</h3> ";
}

?>