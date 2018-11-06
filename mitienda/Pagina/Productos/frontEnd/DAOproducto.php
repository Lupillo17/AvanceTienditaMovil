<?php 

	require '.\..\..\..\conexion.php';

	
	$nombre_file = "";
	
	
	function guardarImagen(){
		$target_dir = "../uploads/";
		$nombre_file =  basename($_FILES['imagen']['name']);
		$target_file = $target_dir . $nombre_file ;
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
		    $check = getimagesize($_FILES["imagen"]["tmp_name"]);
		    if($check !== false) {
		        $uploadOk = 1;
		    } else {
		        echo "File is not an image.";
		        $uploadOk = 0;
		    }
		}
		// Check if file already exists
		if (file_exists($target_file)) {
		    echo "Sorry, file already exists.";
		    $uploadOk = 0;
		}
		// Check file size
		if ($_FILES["imagen"]["size"] > 2000000) {
		    echo "Sorry, your file is too large.";
		    $uploadOk = 0;
		}
		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
		    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		    $uploadOk = 0;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
		    echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} else {
		    if (move_uploaded_file($_FILES["imagen"]["tmp_name"], $target_file)) {

		    } else {
		        echo "Sorry, there was an error uploading your file.";
		    }
		}
		return $uploadOk;	
	}

	function agregar(){

		if (guardarImagen()==1){
			$sent = "insert into productos (nombre, existencias, precio, imagen, idCategoria) values (?,?,?,?,?)";
			$valores = array($_POST['txtNombre'], $_POST['txtExistencias'],$_POST['txtPrecio'],basename($_FILES["imagen"]["name"]), $_POST['categoria']);

			$ad = new AccesoDatos();

			$result = $ad->ejecutarSentencia($sent, $valores);

			if($result > 0){
				echo "<h1>Exito!</h1>";
				header("refresh:5; url=../AdministrarProducto.php" );
			}

		}

		
	}


	if (isset($_POST['submit'])){
		agregar();
	}
?>