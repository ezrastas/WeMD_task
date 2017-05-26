<?php



    if (isset($_POST['email'])) { $email = $_POST['email']; if ($email == '') { unset($email);} } //заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную
 if (empty($email)) //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
    {
    exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
    }
    //если логин и пароль введены, то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
    $email = stripslashes($email);
    $email = htmlspecialchars($email);
 //удаляем лишние пробелы
    $email = trim($email);
 // подключаемся к базе


 $db = mysql_connect ("localhost","ezra","");
 mysql_select_db ("testdb",$db);


 //    $result = mysql_query("SELECT id FROM users WHERE login='$login'",$db);
 //    $myrow = mysql_fetch_array($result);
 //    if (!empty($myrow['id'])) {
 //    exit ("Извините, введённый вами логин уже зарегистрирован. Введите другой логин.");
 //    }
 // // если такого нет, то сохраняем данные

    $result2 = mysql_query ("INSERT INTO email (email) VALUES('$email')");
    // Проверяем, есть ли ошибки
    if ($result2=='TRUE')
    {
    echo "Вы успешно зарегистрированы! Теперь вы можете зайти на сайт. <a href='index.php'>Главная страница</a>";
    }
 else {
    echo "Ошибка! Вы не зарегистрированы.";
    }
    ?>
