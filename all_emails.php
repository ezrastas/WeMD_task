<?
  include('search.php');
  include('db_connect.php');
  // Количество страниц для пагинации
  $str_pag = ceil($total / $kol);

  $MySQLRecordSet = mysql_query("SELECT * FROM email where email like '%$search%' LIMIT $art,$kol");
  while($result = mysql_fetch_assoc($MySQLRecordSet)){
      echo $result["email"];
      echo "</br>";
    }
// формируем пагинацию
  for ($i = 1; $i <= $str_pag; $i++){
      echo "<a href=all_emails.php?page=".$i."> Страница ".$i." </a>";
      }
  echo 'Всего: ', $total, ' записей.'; // общее количество записей
?>
  <form action="all_emails.php" method="post">
  <p>
  <input name="search" type="text" size="20">
  </p>
  <p>
  <input type="submit" name="submit" value="Поиск">
  </p></form>
