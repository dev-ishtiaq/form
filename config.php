<?php
session_start();
$server     = "localhost";
$database   = "formdb";
$username   = "ishtiaq";
$password   = "aaa";


$con = mysqli_connect($server, $username, $password, $database);
?>