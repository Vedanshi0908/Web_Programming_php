<?php

$random=(rand(1,10));
$user=$_REQUEST['guess'];

if($random == $user)
{
    echo "<h3>Your guess is correct🥳</h3>";
}
else
{
    echo "<h3>Your guess is wrong 😒</h3>";
}

?>