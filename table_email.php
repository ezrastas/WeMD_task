<?
  include('db_connect.php');
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



  // Текущая страница
  if (isset($_POST['search'])){
  $search = $_POST['search'];
  }else $search = 1;

  // Определяем все количество записей в таблице
  $MySQLRecordSet = mysql_query("SELECT * FROM email where email like '%$search%'");
  while($result = mysql_fetch_assoc($MySQLRecordSet))
  {
  echo $result["email"];
  echo "</br>";
  $total++;
  }
?>
