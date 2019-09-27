<?php

session_start();
print_r($_POST);

//initialise variables
$host = "localhost";
$username = "root";
$password = "";
$database = "idsdb";

//connect to idsl database
$mysqli = mysqli_connect($host, $username, $password, $database, "3306");
