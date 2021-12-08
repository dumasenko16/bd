<?php
$a = $_POST['usrs'];
$dbname = 'mydb';


$con = mysqli_connect("localhost","root","", $dbname);

		$sql = "DELETE FROM products WHERE id_product = '$a' ";
			if (mysqli_query($con, $sql)) {
				
			}
			else{
				echo $a;
			}
		
         include('products.php');
?>