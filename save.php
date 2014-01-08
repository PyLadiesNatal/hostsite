<?php
	//open the database
	$db = sqlite_open('sqlite:feedback.db');

	if (!$db) die ($error);

	$name = $_POST["name"]; 
	$email = $_POST["email"]; 
	$instensino = $_POST["instensino"]; 
	$programa = $_POST["programa"];
	$linguagens = $_POST["linguagens"];

	//Insert record  
	$conn = "INSERT INTO ladiesinfo (name, email, instensino, programa, linguagens) VALUES ($name, $email, $instensino, $programa, $linguagens);"
	$ok = sqlite_exec($db, $conn);
	if (!$ok) die() ("Algo de errado aconteceu");
	
	echo "Seu cadastro foi realizado com sucesso!";
	sqlite_close($db);
	$db = NULL;
?>
