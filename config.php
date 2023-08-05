<?php
session_start();
$server     = "localhost";
$database   = "formdb";
$username   = "root";
$password   = "";


$con = mysqli_connect($server, $username, $password, $database);
?>