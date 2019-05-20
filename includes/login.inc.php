<?php

if(isset($_POST['Acceder'])){

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
         $_SESSION['userId'] = $row['id'];
         $_SESSION['userUid'] = $row['username'];
         header("location: ../index.php?login=success");
          echo "good";
      }

       else {
        header("location: ../index.php?error=wrongpwd");
        exit();
      }
}
