<?php

$menu_active1="class='active'";
$main='

<form class="form-signin" method="post" id="add_form" action="javascript:void(null);" onsubmit="add_email()">
<!--**** add_email.php - это файл с функцией добавления email методом "post" ***** -->
<h2 class="form-signin-heading">Регистрация</h2>
<input name="email" type="email" size="25" class="form-control" placeholder="Email">
<!--**** В текстовое поле (name="email" type="text") пользователь вводит свой email ***** -->

<div class="g-recaptcha" data-sitekey="6LfSMCMUAAAAAIDL9SVXR4G54s477wDHpRO5HCif"></div>

<input type="submit" name="submit" class="btn btn-lg btn-default btn-block" value="Подтвердить">
<!--**** Кнопка (type="submit") отправляет данные на страничку captcha а следом  на add_email***** -->
</form>

<div id="modal_form"><!-- Сaмo oкнo -->
      <span id="modal_close"> &times; </span> <!-- Кнoпкa зaкрыть -->

      <!-- Тут любoе сoдержимoе -->
      <div id="results"></div>

</div>
<div id="overlay"></div><!-- Пoдлoжкa -->

';

include('src/template/shablon.php');
// include('captcha.php');
?>
