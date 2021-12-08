<?php
$dbname = 'mydb';

$con = mysqli_connect("localhost","root","", $dbname);
$query = "SELECT * FROM products";
 
 
 
$result1 = mysqli_query($con, $query);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Продукты</title>
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

<h1>Продукты</h1>
<a href= "index.php">Вернуться на главную</a>
<p>
<p>

<table id="users" class="display" cellspacing="2" border="1"  width="100%"> 
        <thead> 
            <tr>
                <th align=left>Id продкта</th>
                <th align=left>Название</th>
                <th align=left>Цена</th>
                <th align=left>Удаление</p></th>

            </tr>
        </thead>
        <tbody>
        
            <?php while($row1 = mysqli_fetch_array($result1)):;?>
           
                <tr style="border-bottom:3;">
                <td><?php echo $row1[0];?></td>
                <td><?php echo $row1[1];?></td>
                <td><?php echo $row1[2];?></td>
                <td align="left">
                    <form action="delete_product.php" id="deleteproduct" method="post" name="deleteproduct">
                    <input class="button" id="register" name= "<?=$row1[0]?>" type="submit" style="float: right;" value="Удалить">
                    <input type="hidden" value="<?=$row1[0]?>" name="usrs" style="float: left;">
                    </form>
                
                 </td>
                  
            </tr>
            <?php endwhile;?>
        </tbody>
        </table>
<h3>Добавить продукт</h3>
 <form action ="add_product.php" id="addproduct" method="post" name ="addproduct">
   <p><label for="name">Название<br>
 <input class="input" id="name" name="name" size="16" type="text" required="all feelds required" value=""></label></p>
  <p><label for="price">Цена<br>

<input class="input" id="price" name="price" size="16" type="text" required="all feelds required" required pattern="^[ 0-9]+$" value=""></label></p>
   
   <label for="price"><small>(Только цифры)</small></small><br></label>
   <input class="button" id="addproduct" name= "add" type="submit" value="Подтвердить"></p>
   </form>
    
</body>
</html>


