<?php 

	require '.\..\..\..\conexion.php';

	function agregar(){		
		$sent = "insert into Usuarios (Usuario, Contrasena, Nombre, Apellidos,Rol) values (?,?,?,?,?)";
		$valores = array($_POST['txtUsuario'], $_POST['txtContrasena'],$_POST['txtNombre'],$_POST['txtApellidos'],$_POST['txtRol']);

		$ad = new AccesoDatos();

		$result = $ad->ejecutarSentencia($sent, $valores);

		if($result > 0){
			echo "<h1>Exito!</h1>";
			header("refresh:5; url=../crearusuario.php" );
		}else{
			echo "<h1>Error al insertar cliente</h1>";
		}		
	}


	if (isset($_POST['submit'])){
		agregar();
	}
?>