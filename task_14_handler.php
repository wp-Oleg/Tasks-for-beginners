<?php
session_start();
// Ловим данные с формы
$title = $_POST['title'];

// Подключаемся к базе
$pdo = new PDO('mysql:host=localhost;dbname=lessons;charset=utf8', 'root', '');

// вставляем в базу данные с формы
$sql = "INSERT INTO lesson_14 (title) VALUES (:title)";
$statement = $pdo->prepare($sql);
$statement->execute(['title' => $title]);

// Получаем данные с базы в виде массива
$sql = "SELECT * FROM lesson_14 WHERE title=:title";
$statement = $pdo->prepare($sql);
$statement->execute(['title' => $title]);
$text = $statement->fetch(PDO::FETCH_ASSOC);

// Проверяем, если данные получены, выводим их с помощью сессии во флеш сообщении
if(!empty($text)){
$_SESSION['text'] = $text['title'];
header("Location: /task_14.php"); 
exit;
}
