<?php 
session_start();

$email = $_POST['email'];
$password = $_POST['password'];
$hashed_password = password_hash($password,PASSWORD_DEFAULT);

$pdo = new PDO('mysql:host=localhost;dbname=lessons;charset=utf8', 'root', '');
$sql = "SELECT * FROM users WHERE email =:email";
$statement = $pdo->prepare($sql);
$statement->execute(['email' => $email]);
$task = $statement->fetch(PDO::FETCH_ASSOC);

if(!empty($task)){
$_SESSION['danger'] = "Этот email уже зарегистрирован другим пользователем!";
header("Location: /task_13.php"); 
exit;
}

$sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
$statement = $pdo->prepare($sql);
$statement->execute(['email' => $email, 'password' => $hashed_password]);

header("Location: /task_13.php"); 
