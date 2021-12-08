<?php

$con = mysqli_connect("localhost","root","", "mydb");

?>

<!DOCTYPE html>
<head>
<meta charset="utf-8"> 
<title>Main</title>
<link href='http://fonts.googleapis.com/css?family=Raleway:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'rel='stylesheet' type='text/css'>
<script src="sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="sweetalert.css">
  <meta charset="utf-8">
  <link href="design.css" media="screen" rel="stylesheet">
</head>
    <form action="choose.php" method="post" name="form1">
        <p><select name="tables" required=""
        <option value="0">Выберите таблицу и колонку</option>
    
    
        <optgroup label="Продукты">
    <option value="1"> Название </option>
    <option value="2"> Цена </option>
    <option value="3"> Название + Цена </option>
    <optgroup label="Покупатели">
    <option value="4"> Имя </option>
    <option value="5"> Адресс </option>
    <option value="6"> Телефон </option>
    <option value="7"> Имя + Адресс + Телефон </option>
    
    <p><input class="button" id="addchoose" name= "add" type="submit" value="Подтвердить"></p></p>
    </form>
<?php
$zap = $_SESSION['zapros'];
echo($zap);
$razmer = $_SESSION['razmer'];
 
$result1 = mysqli_query($con, $zap);
?>
 <br><br>
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
<?php if ($razmer == 1){?>
<table id="users" class="display" cellspacing="2" border="1"  width="100%"> 
        <thead> 
            <tr>
                <th align=left>Результат</th>
                

            </tr>
        </thead>
        <tbody>
        
            <?php while($row1 = mysqli_fetch_array($result1)):;?>
           
                <tr style="border-bottom:1;">
                <td><?php echo $row1[0];?></td>    
            </tr>
            <?php endwhile;?>
        </tbody>
        </table>

<?php }
if ($razmer == 2){?>
<table id="users" class="display" cellspacing="2" border="1"  width="100%"> 
        <thead> 
            <tr>
                <th align=left>Результат</th>
                <th align=left> </th>
                

            </tr>
        </thead>
        <tbody>
        
            <?php while($row1 = mysqli_fetch_array($result1)):;?>
           
                <tr style="border-bottom:1;">
                <td><?php echo $row1[0];?></td>   
                <td><?php echo $row1[1];?></td> 
            </tr>
            <?php endwhile;?>
        </tbody>
        </table>
<?php } 
if ($razmer == 3){?>


<table id="users" class="display" cellspacing="2" border="1"  width="100%"> 
        <thead> 
            <tr>
                <th align=left>Результат</th>
                <th align=left> </th>
                <th align=left> </th>
                

            </tr>
        </thead>
        <tbody>
        
            <?php while($row1 = mysqli_fetch_array($result1)):;?>
           
                <tr style="border-bottom:1;">
                <td><?php echo $row1[0];?></td>   
                <td><?php echo $row1[1];?></td> 
                <td><?php echo $row1[2];?></td> 
            </tr>
            <?php endwhile;?>
        </tbody>
        </table>
<?php } ?>
<br><br><br>
<a href= "index.php">Вернуться на главную</a>


