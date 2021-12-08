<?php
session_start();
$dbname = 'mydb';
$value = $_POST['tables'];
$con = mysqli_connect("localhost","root","", $dbname);


if ($value == 1 ){
    $_SESSION['zapros'] = "SELECT menu_name FROM products";
    $_SESSION['razmer'] = "1";
}
if ($value == 2 ){
    $_SESSION['zapros'] = "SELECT price FROM products";
    $_SESSION['razmer'] = "1";
}

if ($value == 3 ){
    $_SESSION['zapros'] = "SELECT menu_name, price FROM products";
    $_SESSION['razmer'] = "2";
}
if ($value == 4 ){
    $_SESSION['zapros'] = "SELECT name FROM customers";
    $_SESSION['razmer'] = "1";
}
if ($value == 5 ){
    $_SESSION['zapros'] = "SELECT address FROM customers";
    $_SESSION['razmer'] = "1";
}
if ($value == 6 ){
    $_SESSION['zapros'] = "SELECT phone_number FROM customers";
    $_SESSION['razmer'] = "1";
}
if ($value == 7 ){
    $_SESSION['zapros'] = "SELECT name,phone_number,address FROM customers";
    $_SESSION['razmer'] = "3";
}


include('center.php');