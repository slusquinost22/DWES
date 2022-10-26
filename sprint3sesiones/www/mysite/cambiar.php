<?php
	$db = mysqli_connect('localhost', 'root', '1234', 'mysitedb') or die ('Fail');
	$password1= $_POST["password1"];
	$password2= $_POST["password2"];
	$password1= mysql_real_escape_string($password1);
	$password2= mysql_real_escape_string($password2);
	if ($password1 != $password2){
	echo "Las contraseñas no son iguales";
	}else {
	$query= (UPDATE tUsuarios SET= '$password1' WHERE 

