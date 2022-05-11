<?php 
$name = $_POST['name'];									
$pdo = new PDO('mysql:host=localhost; dbname=lessons; charset=utf8', 'root', '');
$sql = "INSERT INTO lesson_11 (name) VALUES (:name)";
$statement = $pdo->prepare($sql);
$statement->execute(['name' => $name]);
header("Location: /task_11.php");
