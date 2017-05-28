<?php
  include('validation.php');
  include('db_connect.php');
    if (isset($_POST['email'])) { $email = $_POST['email']; if ($email == '') { unset($email);} } //заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную
    if (empty($email)) //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
    {
    exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
    }
//спец. обработчик, чтобы теги и скрипты не работали
    $email = htmlspecialchars($email);
//Удаляет пробелы из начала и конца строки
    $email = trim($email);
//цикл валидации перед добавлением и вывод ошибки
    if($valid == 0)
      {$result2 = mysql_query ("INSERT INTO email (email) VALUES('$email')");
  // Проверяем, есть ли ошибки
      if ($result2=='TRUE')
      {
      echo "Вы успешно зарегистрированы!";
    }
    else {
       echo "Ошибка! Вы не зарегистрированы.";
       }}
   else {
      echo "Совпадение с бд";
      }
?>
