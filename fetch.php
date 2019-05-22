<?php


$connect = new PDO("mysql:host=localhost; dbname=clothing", "root", "root");

$query = "SELECT * FROM list";

$statement = $connect->prepare($query);

$statement->execute();

while($row = $statement->fetch(PDO::FETCH_ASSOC))
{
  $data[] = $row;
}

echo json_encode($data);

 ?>
