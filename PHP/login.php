<?php 
	$user=$_POST['usuario'];
	$pass=$_POST['clave'];
	
	$con=@mysqli_connect("b2fibyauzm6deinsy1oo-mysql.services.clever-cloud.com","ueqfuptyjsxjdmtc","4CPzK6GjxasH748G0vUV","b2fibyauzm6deinsy1oo");
	$consulta="SELECT * FROM users WHERE id='$user' and password='$pass'";
	$resultado=mysqli_query($con, $consulta);
	
	$filas=mysqli_num_rows($resultado);
	
	if($filas>0){
		header("location:..\INICIO.html");
	}else{
		echo "error no hay ningun usuarios";
	}
	
	
?>