<?php

if(isset($_POST['acceder'])){

  require 'dbh.inc.php';

  $mail = $_POST['email'];
  $password = $_POST['password'];


  if (empty($mail) || empty($password)) {
    header("location: ../index.php?error=emptyFields");
    exit();
  } else {
    $query = "SELECT * FROM users WHERE email='$mail' AND password='$password' OR username='$mail' AND password='$password'";
    $result = mysqli_query($conn, $query);
  }
    if ($row = mysqli_fetch_assoc($result)) {
         session_start();
         $_SESSION['sesion'] = $mail;
         header("location: ../login.php?login=success");
          echo "good";
      }

       else {
        header("location: ../index.php?error=wrongpwd");
        exit();
      }

      if(isset($_SESSION['sesion'])) {
        header("Location: ../indexLogin.php");
      } else {
        header("Location: ../signup.php");
      }

}

else {
  header("location: ../signup.php");
  exit();
}
