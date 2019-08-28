<?php
	$user=$_POST['usuario'];
	$clave=$_POST['clave'];
	
	$con=@mysqli_connect("b2fibyauzm6deinsy1oo-mysql.services.clever-cloud.com","ueqfuptyjsxjdmtc","4CPzK6GjxasH748G0vUV","b2fibyauzm6deinsy1oo");
	
	
	if( $con === false){
    echo "Error in connection.\n";
	}

	$consulta="INSERT INTO users VALUES('$user','$clave')";
	$resultado=mysqli_query($con, $consulta);
	header("location:..\REGISTRAR USUARIOS.php");
?>