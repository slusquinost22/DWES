<?php
	$db = mysqli_connect('localhost', 'root', '1234', 'mysitedb') or die ('Fail');

	session_start();
	$user='NULL';
	if (!empty($_SESSION['user_id'])){
		$user=$_SESSION['user_id'];
	}
	$query='SELECT * FROM tUsuarios where id='.$user;
	echo $query;
	$result = mysqli_query($db, $query) or die ('Query error');
	$row= mysqli_fetch_array($result);
	if (isset($_SESSION['user_id'])){
		$passActual= $_POST["passActual"];
		$password1= $_POST["password1"];
		$password2= $_POST["password2"];
		if ($passActual == $password1){
		echo "La contraseña no pueden ser igual a la anterior";
		}else if ($password1 != $password2){
		echo "Las contraseñas deben ser iguales";}
		else {
		$query2="UPDATE tUsuarios SET contraseña= '".$password1."' WHERE id = ".$user;
		mysqli_query($db,$query2) or die ('Query error');
		echo "La contraseña se ha cambiado correctamente";
		header('Location: main.php');}
	}
?>
