<?
  include('db_connect.php');
  $MySQLRecordSet = mysql_query('SELECT * FROM email');
  $valid = 0;
  $page = $_POST['email'];
  while($result = mysql_fetch_assoc($MySQLRecordSet))
  {
    if($page == $result["email"])
      {
        $valid = 1;
      }
  }
?>
