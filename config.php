<?php
session_start();
$dbname = 'mydb';

$con = mysqli_connect("localhost","root","", $dbname);

if (mysqli_connect_errno())
{
	echo 'error connection ('.mysqli_connect_errno().'):';
	exit();
}
?>
