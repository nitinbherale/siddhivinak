<?php 
ob_start();
session_start();
error_reporting(0);
$server = "localhost";
$username = "root";
$password = "";
$dbname = "siddhivinayak";
$dblink = mysqli_connect($server,$username,$password,$dbname)or die("Database connection failed!!!");
if ($dblink) {
	
	include 'functions.php';
	//echo "database connected";
}
?>