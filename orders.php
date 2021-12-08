<?php
$dbname = 'mydb';

$con = mysqli_connect("localhost","root","", $dbname);
$query = "SELECT orders_products.order_id,products.menu_name,amount,ROUND(price*amount, 2) AS total_price FROM orders_products INNER JOIN products ON orders_products.id_product = products.id_product ORDER BY order_id, amount;";
 
 
 
$result1 = mysqli_query($con, $query);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Информация</title>
<style>
      table {
    width: 80%; /* Ширина таблицы */
    border-collapse: collapse; /* Убираем двойные линии между ячейками */
   }
   td, th {
    padding: 3px; /* Поля вокруг содержимого таблицы */
    border: 1px solid #000; /* Параметры рамки */
   }
   th, tr {
    background: #FFEBCD; /* Цвет фона */
    color: #333;  /* Цвет текста */
   }
   tbody tr:hover {
    background: #FFA07A; /* Цвет фона при наведении */
    color: #fff; /* Цвет текста при наведении */
   }
</style>

<link href="design.css" media="screen" rel="stylesheet">
<link href= 'http://fonts.googleapis.com/css?family=Raleway:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<body>

<h1>Информация по заказанным продуктам за все время</h1>
<a href= "index.php">Вернуться на главную</a>
<p>
<p>

<table id="users" class="display" cellspacing="2" border="1"  width="100%"> 
        <thead> 
            <tr>
                <th align=left>Номер заказа</th>
                <th align=left>Продукт</th>
                <th align=left>Кол-во</th>
                <th align=left>Конечная цена</th>
                

            </tr>
        </thead>
        <tbody>
        
            <?php while($row1 = mysqli_fetch_array($result1)):;?>
           
                <tr style="border-bottom:3;">
                <td><?php echo $row1[0];?></td>
                <td><?php echo $row1[1];?></td>
                <td><?php echo $row1[2];?></td>
                <td><?php echo $row1[3];?></td>
                
                
                 </td>
                  
            </tr>
            <?php endwhile;?>
        </tbody>
        </table>
    
</body>
</html>
<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

