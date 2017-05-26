<?php

$main='

<form action="add_email.php" method="post">
<!--**** add_email.php - это файл с функцией добавления email методом "post" ***** -->
<p>
<label>Ваш email:<br></label>
<input name="email" type="text" size="15" maxlength="15">
</p>
<!--**** В текстовое поле (name="email" type="text") пользователь вводит свой email ***** -->
<p>
<input type="submit" name="submit" value="Подтвердить">
<!--**** Кнопочка (type="submit") отправляет данные на страничку add_email.php ***** -->
</p></form>

';

include('shablon.php');
?>
