<html>
	<head>
		<title>Agregar/Editar producto</title>
		<link rel="stylesheet" type="text/css" href="css\AdministrarProducto.css">
	</head>

	<body>
		<form method="POST" action="frontEnd\DAOproducto.php" enctype="multipart/form-data">

			<!--Inicio div contenedor -->
			<div id="Contenedor">
				<h3 id="TituloContenedor">Agregar/Editar producto</h3>
				<!--Txt clave -->
				<div id="cNombre">
					<p id="lblNombre">Nombre: </p>
					<input 
						type="text"
						name="txtNombre"
						placeholder="Nombre" 
					>	
				</div>
				<!--Fin Txt clave -->

				<!--Inicio Txt producto -->
				<div id="cExistencias">
					<p id="lblExistencias">Existencias: </p>
					<input type="number"
					name="txtExistencias"
					placeholder="Existencias del producto">
				</div>
				<!--Fin Txt producto -->

				<!--Inicio Txt Existencias -->
				<div id="cPrecio">
					<p id="lblPrecio">Precio: </p>
					<input 
						type="text"
						name="txtPrecio"
						placeholder="Precio" 
					>
				</div>
				<!--Fin Txt Existencias-->

				<!--Inicio txtCategoria -->
				<div id="cCategoriaImg">
					<p id="lblCategoria">Categoria:</p>
					<select name="categoria" id="">
					<?php
						require ".\..\..\conexion.php";

						$ad = new AccesoDatos();

						$datos = $ad->consultar("select * from categorias", NULL);

						foreach ($datos as $fila) {
							# code...
							echo "<option value='$fila[0]'>$fila[1]</option>";
						}

						unset($ad);
					?>	
					</select>
				</div>
				
				<!--Fin txtCategoria -->

				

				<!--Inicio div ContImagen -->
				<div id="ContenedorImagen">
					<img 
						width="100px"
						height="100px" 
					>
					<!--Inicio botón examinar -->
					<input 
						type="file"
						name="imagen"
					>
					<!--Fin botón examinar -->
				</div>
				<!--Fin div ContImagen -->

				<!--Inicio div btnGuardarCancelar -->
				<div id="btnGuardarCancelar">
					<input 
						type="submit"
						name="submit"
						value="Guardar" 
					>
					<input 
						type="button"
						name="btnCancelar"
						value="Cancelar" 
					>
				</div>
				<!--Fin div btnGuardarCancelar -->
			</div>
			<!--Fin div contenedor -->
		</form>
		
	</body>
</html>