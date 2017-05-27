<!DOCTYPE html>
<html>
  <head>
    <title>WeMakeDigital Task</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/main.min.css" rel="stylesheet">
      <script src='js\asynq_req_to_add.js'></script>
  </head>
  <body>
    <div class="container">
      <header>
       <div class="nav navbar-inverse nav-justified">
         <div class="navbar-header">
           <a class="navbar-brand" href="*">WeMakeDigital Task</a>
         </div>
         <ul class="nav navbar-nav">
           <li class="active"><a href="#">Ввод email</a></li>
           <li><a href="/all_emails.php">Вывод email</a></li>
         </ul>
      </div>
      </header>
      <main>
        <?php
          echo $main;
         ?>

      </main>
      <footer class="footer">
        <p>© 2017 WeMD.</p>
        <br><p>Made by EzraStas.</p>
      </footer>
    </div>
  </body>
  <!--js-->
  <script src='https://www.google.com/recaptcha/api.js'></script>
  <script src='node_modules/jquery/dist/jquery.min.js'></script>

</html>
