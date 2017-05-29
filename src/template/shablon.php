<!DOCTYPE html>
<html>
  <head>
    <title>WeMakeDigital Task</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <link href="../../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../css/main.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
      <header>
       <div class="nav navbar-inverse nav-justified">
         <div class="navbar-header">
           <a class="navbar-brand" href="#">WeMakeDigital Task</a>
           <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" class="navbar-collapse collapse" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
         </div>
          <div class="navbar-collapse collapse" aria-expanded="false" id="navbar">
           <ul class="nav navbar-nav">
             <li <?php echo $menu_active1; ?> ><a href="../../index.php">Ввод email</a></li>
             <li <?php echo $menu_active2; ?> ><a href="../../all_emails.php">Вывод email</a></li>
           </ul>
          </div>
      </div>
      </header>
      <main>
        <div class="container">
          <?php
            echo $main;
           ?>
        </div>
      </main>
      <footer class="footer">
        <hr>
        <p>© 2017 WeMD.</p>
        <p>Made by EzraStas.</p>
      </footer>
    </div>
  </body>
  <!--js-->
  <script src='https://www.google.com/recaptcha/api.js'></script>
  <script src='../../node_modules/jquery/dist/jquery.min.js'></script>
  <script src="../../node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src='../../js/modal_window.js'></script>
  <script src='../../js/asynq_req_to_add.js'></script>
</html>
