<?
  include('src/search.php');
  include('src/db_connect.php');
  // изменение цвета вкладки меню
  $menu_active2="class='active'";
  include('src/template/shablon.php');
?>
    <main style="padding-top: 0px;">
      <div class='container'>
        <div class='all_emails'>
          <h2>Все Email-адреса:</h2>
          <div class='col-lg-6'>
            <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Email</th>
                </tr>
              <thead>
              <tbody>
<?
  $MySQLRecordSet = mysql_query("SELECT * FROM email where email like '%$search%' LIMIT $art,$kol");
  while($result = mysql_fetch_assoc($MySQLRecordSet)){
      echo "<tr><td>";
      echo $result["email"];
      echo "<td><tr>";
    }
?>
</tbody></table></div>
    </div>
      <div class='col-lg-6'>
          <form>
        <form class="form-horizontal" action="all_emails.php" method="get">
          <div class="form-group">
          <input name="search" type="text" size="20" class="form-control" placeholder="Поиск" >
          <input type="submit" name="submit" class="btn btn-default btn-block" value="Искать">
          </div>
        </form>
<?
    for ($i = 1; $i <= $str_pag; $i++){
        echo "<a href=all_emails.php?page=".$i."&search=".$search."> Страница ".$i." </a>";
    }
    echo '</br> </br> Всего: ', $total, ' записей.'; // общее количество записей
?>
        </div>
      </div>
    </div class='container'>
  <main>
