<?php
  include('db_connect.php');
  // Текущая страница
    if (isset($_GET['page'])){
        $page = $_GET['page'];
        }else $page = 1;
  //Пременная в которой хранится запрос
    if (isset($_POST['search'])){
        $search = $_POST['search'];
        }else $search = '';
    $kol = 5;  //количество записей для вывода
    $art = ($page * $kol) - $kol; // c какой записи выводить
    $MySQLRecordSet = mysql_query("SELECT * FROM email where email like '%$search%'");
    while($result = mysql_fetch_assoc($MySQLRecordSet))
        {
          $total++;
        }
?>
 
