<?php
  session_start();
 ?>
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<head>
<!--Bootstrap-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="./public/style.css" >
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>

<body>

  <h2 class="text-center">Le Rousse</h2>

<div class="container">

  <div id="SignupForm" class="login">


    <?php
      error_reporting(0);
      if (isset($_SESSION['sesion'])) {
        echo '<form action="includes/logout.inc.php" method="post">
          <button type="submit" name="logout-submit">Logout</button>
        </form>';
      } else {
        echo '  <form class="form-login" action="includes/login.inc.php" method="post">
        <div class="form-group">
            <label for="exampleEmail">Username/Email:</label>
            <input name="email" class="form-control" id="exampleEmail"></input>
         </div>


         <div class="form-group">
            <label for="examplePassword">Password:</label>
            <input name="password" class="form-control" id="examplePassword"></input>
         </div>


         <button type="submit" name="acceder" class="btn btn-primary">Login</button>
         <a class="signup" href="signup.php">Registrarse</a>
            </form>';
      }

      if (isset($_GET['error'])) {
        if ($_GET['error'] == "emptyfields") {
          echo '<p class="signuperror">Fill in all fields!</p>';
        }
        else if ($_GET['error'] == "wrongpwd") {
          echo '<p class="signuperror">Invalid username or password!</p>';
        }
      } else if ($_GET['login'] == "success") {
        echo '<p class="loginsuccess">Login successsful!</p>';
      }
     ?>



</div>

</div>

<div class="cotnainer-fluid">

   <footer id="cookie">

     <div class="loginCookies bg-light">
     <ul>
       <li>
         <a href="#">Terminos y Condiciones</a>
         </li>
       <li>
         <a href="#">Politica de Privacidad</a>
       </li>
       <li>
         <a href="#">Politica de cookies</a>
       </li>
     </ul>
   </div>
   </footer>

  </div>
  </body>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
  <!--modules-->
  <script type="text/javascript" src="js/app.js"></script>
  <!--controllers-->
  <script type="text/javascript" src="js/Controllers/shoppingCartController.js"></script>
  <script type="text/javascript" src="js/Controllers/index.js"></script>
  <!--interactivity-->
  <script type="text/javascript" src="js/main.js"></script>
  <script
    src="https://code.jquery.com/jquery-3.3.1.js"
    integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
    crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

  </html>
</html>
