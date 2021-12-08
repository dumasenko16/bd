<?php
$a = $_POST['usrs'];
$dbname = 'mydb';


$con = mysqli_connect("localhost","root","", $dbname);

		$sql = "DELETE FROM courier_info WHERE courier_id = '$a' ";
			if (mysqli_query($con, $sql)) {
				
			}
			else{
				echo $a;
			}
		
         include('couriers.php');
?>