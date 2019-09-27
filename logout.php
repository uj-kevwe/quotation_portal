<?php
session_start();
require 'data_connect.php';

$mysqli->query("Update users set status = 'offline' where Username = '".$_SESSION['user']."'");
unset($_SESSION['user']);
unset($_SESSION['names']);
unset($_SESSION['email']);
unset($_SESSION['message']);

header("location:index.php");
