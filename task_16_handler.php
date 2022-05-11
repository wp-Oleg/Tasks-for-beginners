<?php
session_start();

$email = $_POST['email'];
$password = $_POST['password'];

//1. Подключаемся к базе
$pdo = new PDO("mysql:host=localhost; dbname=lessons; charset=utf8", "root", "");

//2. Получаем пользователя по адресу
$sql = "SELECT * FROM users WHERE email=:email";
$statement = $pdo->prepare($sql);
$statement->execute(['email' => $email]);
$user = $statement->fetch(PDO::FETCH_ASSOC);

//var_dump($user);
//3. Проверяем email пользователя
If(empty($user)){
	$_SESSION['error'] = "Неверный логин или пароль";
	header('Location: task_16.php');
	exit;
}
//4. Проверяем пароль и записываем пользователя в сессию
if(!password_verify($password, $user['password'])){
	$_SESSION['error'] = "Неверный логин или пароль!";
	header('Location: task_16.php');
} else {
	$_SESSION['user'] = ["email" => $user['email'], "id" => $user['id']];
	$_SESSION['user'] = $user['email'] . " " . "Вы успешно авторизованы!";
	header('Location: task_16.php'); exit;
}
