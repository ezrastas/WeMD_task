<?php
  require_once "recaptchalib.php";
  $secret = "6LfSMCMUAAAAAFF9Ned0HLE1F3GJyzsWY1hkNN2D";
  // пустой ответ
  $response = null;
  // проверка секретного ключа
  $reCaptcha = new ReCaptcha($secret);
  // if submitted check response
  if ($_POST["g-recaptcha-response"]) {
  $response = $reCaptcha->verifyResponse(
          $_SERVER["REMOTE_ADDR"],
          $_POST["g-recaptcha-response"]
      );
  }
        if ($response != null && $response->success) {
          echo "Hi " . $_POST["name"] . " (" . $_POST["email"] . "), thanks for submitting the form!";
        } else {

    echo "fuck this shit";
   } 
?>
