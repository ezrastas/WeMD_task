<?php
$main='

<form method="post" id="add_form" action="javascript:void(null);" onsubmit="add_email()">
<!--**** add_email.php - это файл с функцией добавления email методом "post" ***** -->
<p>
<label>Ваш email:<br></label>
<input name="email" type="text" size="25">
</p>
<!--**** В текстовое поле (name="email" type="text") пользователь вводит свой email ***** -->
<p>
<input type="submit" name="submit" value="Подтвердить">
<!--**** Кнопочка (type="submit") отправляет данные на страничку add_email.php ***** -->
</p></form>

<div class="g-recaptcha" data-sitekey="           "></div>
<div id="results"></div>
';

include('shablon.php');
?>
