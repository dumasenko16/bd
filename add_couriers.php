<?php

$dbname = 'mydb';
$name = $_POST['name'];
$price = $_POST['price'];
$accept = 'Указаны неверные данные';
$con = mysqli_connect("localhost","root","", $dbname);
		$sql = "INSERT INTO courier_info ( name, phone_number) VALUES ( '$name', '$price')";
                    if (mysqli_query($con, $sql)) {
				
			}
			else{
				echo $accept;
                                
			}
		
         include('couriers.php');