<?php
session_start();

$name = $_POST['name'];
$pdo = new PDO('mysql:host=localhost;dbname=lessons;charset=utf8','root',''); //подключились к базе
$sql = "SELECT * FROM lesson_12 WHERE name =:name";
$statement = $pdo->prepare($sql);
$statement->execute(['name' => $name]);
$task = $statement->fetch(PDO::FETCH_ASSOC);

if(!empty($task)){
$message = "Такая запись присутствует в таблице";
$_SESSION['danger'] = $message;
header("Location: /task_12.php"); 
exit;
}

$sql = "INSERT INTO lesson_12 (name) VALUES (:name)"; // создали запрос
$statement = $pdo->prepare($sql); //подготовили запрос
$statement->execute(['name' => $name]);
$message = "Запись добавлена в таблицу";
$_SESSION['success'] = $message;

header("Location: /task_12.php"); 
