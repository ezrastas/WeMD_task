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

<div class="g-recaptcha" data-sitekey="6LfSMCMUAAAAAIDL9SVXR4G54s477wDHpRO5HCif"></div>
<div id="results"></div>

<input type="submit" name="submit" value="Подтвердить">
<!--**** Кнопка (type="submit") отправляет данные на страничку add_email.php ***** -->
</p></form>

';

include('shablon.php');
// include('captcha.php');
?>
