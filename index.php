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

<input type="submit" name="submit" value="Подтвердить">
<!--**** Кнопка (type="submit") отправляет данные на страничку add_email.php ***** -->
</p></form>



<div id="modal_form"><!-- Сaмo oкнo -->
      <span id="modal_close">X</span> <!-- Кнoпкa зaкрыть -->

      <!-- Тут любoе сoдержимoе -->
      <div id="results"></div>

</div>
<div id="overlay"></div><!-- Пoдлoжкa -->


';

include('src/template/shablon.php');
// include('captcha.php');
?>
