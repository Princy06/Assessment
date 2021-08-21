<?php

$db = mysqli_connect("localhost:3307","root","","intern");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>