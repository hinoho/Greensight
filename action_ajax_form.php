<?php

if (isset($_POST["name"]) && isset($_POST["surname"]) && isset($_POST["email"]) && isset($_POST["pass"]) && isset($_POST["repeat_pass"]) && $_POST["pass"]==$_POST["repeat_pass"]) { 
	//Массив пользователей
	$users = array( array("Иван", "Иванов", "i@mail.com", "1234"),
	array("Петр", "Петров", "pp@mail.com", "qwerty"),
	array("Федор", "Федоров", "fedor@mail.com", "qwe"),
	array("Сидор", "Сидоров", "cider@mail.com", "qwe123")
	);
	
	$emails = array();
	foreach($users as $subArr){
	array_push($emails, $subArr[2]);
	} 
	
	if(! in_array($_POST["email"], $emails)){
	
    $result = array(
    	'name' => $_POST["name"],
    	'surname' => $_POST["surname"],
		'email' => $_POST["email"],
		'pass' => $_POST["pass"],
    ); 
	
	$logFile = "result.html";
	$logFileHandle = fopen($logFile, 'a');
	fwrite($logFileHandle, 'Имя: '.$_POST["name"].'<br>Фамилия: '.$_POST["surname"].'<br>e-mail: '.$_POST["email"].'<br>Пароль: '.$_POST["pass"].'<br><br>');
	fclose($logFileHandle);
	
    echo "true"; 
	}
	else {
		echo "user";
	}
}
else{
	echo "mistake";	
}
?>