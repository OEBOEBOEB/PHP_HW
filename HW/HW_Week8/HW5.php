<?php

	$link=mysqli_connect(
		'localhost',
		'root',
		'123456',
		'hw5');

	if($link){
		echo "DB Connected!<br>";
	}else{
		echo "DB Connection Failed<br>";
	}

	$name=$_GET["name"];
	$sex=$_GET["sex"];
	$birth=$_GET["birth"];
	$career=$_GET["career"];
	$pnumber=$_GET["pnumber"];
	$email=$_GET["email"];

	$mysql= "INSERT INTO HW5(name,sex,birth,career,pnumber,email) VALUES ('$name','$sex','$birth','$career','$pnumber','$email')";
	$result=mysqli_query($link,$mysql);

	
	echo "姓名:" .$name."<br/>";
	echo "性別:" .$sex."<br/>";	
	echo "生日:"  . $birth."<br/>";	
	echo "職業:" .$career. "<br/>";	
	echo "手機:" .$pnumber."<br/>";	
	echo "E-mail:".$email."<br/>";
	
?>