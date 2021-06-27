<?php

$server = "localhost";
$username = "root";
$password = "";
$db_name = "orbailix";

$conn = new mysqli($server,$username,$password,$db_name);

if(mysqli_connect_error()){
    die('Error on the Connection('.mysqli_connect_errno().')'. mysqli_connect_error());
}
?>