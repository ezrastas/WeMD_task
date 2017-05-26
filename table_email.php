<?
// Подключение к БД
  $db= mysql_connect("localhost","ezra","");
  mysql_select_db('testdb', $db);
  mysql_query("SET NAMES 'utf8'",$db);

// Текущая страница
if (isset($_GET['page'])){
  $page = $_GET['page'];
}else $page = 1;

$kol = 5;  //количество записей для вывода
$art = ($page * $kol) - $kol; // c какой записи выводить

// Определяем все количество записей в таблице
$MySQLRecordSet = mysql_query('SELECT * FROM email');
while($result = mysql_fetch_assoc($MySQLRecordSet))
{
      $total++;
}
echo $total; // общее количество записей

// Количество страниц для пагинации
$str_pag = ceil($total / $kol);
?></br><?

// формируем пагинацию
for ($i = 1; $i <= $str_pag; $i++){
  echo "<a href=table_email.php?page=".$i."> Страница ".$i." </a>";
}
  $MySQLRecordSe = mysql_query("SELECT * FROM email LIMIT $art,$kol");
  while($result = mysql_fetch_assoc($MySQLRecordSe))
  {
        echo $result["email"];
        echo " ";
  }
  ?>
