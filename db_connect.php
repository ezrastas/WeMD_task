<?php
  $db= mysql_connect("localhost","ezra","");
  mysql_select_db('testdb', $db);
  mysql_query("SET NAMES 'utf8'",$db);
?>
