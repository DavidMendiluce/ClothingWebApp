<?php

session_start();

if(isset($_SESSION["shopping_Cart"]))
{
     echo json_encode($_SESSION["shopping_Cart"]);
}

 ?>
