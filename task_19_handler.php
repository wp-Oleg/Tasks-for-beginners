<?php

for($i=0; $i < count($_FILES['image']['name']); $i++){
	upload_file($_FILES['image']['name'][$i], $_FILES['image']['tmp_name'][$i]);
}

function upload_file($filename, $tmp_name){
	$result = pathinfo($filename);
	$filename =  uniqid() . "." . $result['extension'];
	$pdo = new PDO("mysql:host=localhost; dbname=lessons; charset=utf8", "root", "");
	$sql = "INSERT INTO lesson_19 (image) VALUES (:image)";
	$statement = $pdo->prepare($sql);
	$statement->execute(['image' => $filename]);
	move_uploaded_file($tmp_name, 'uploads/'.$filename);
}
header('Location:task_19.php');
