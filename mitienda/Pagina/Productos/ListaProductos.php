<html>
	<head>
		<title>Productos</title>
		<link rel="stylesheet" type="text/css" href=".\..\css\ListaProductos.css">
	</head>

	<body>
		<form action="">
			<div id="cuerpo">
				<h1>Lista de productos</h1>
				<!--Inicio div Lista -->
				<div id="Lista">
					<div id="cAgregar">
						<!--Botón-->
						<input 
							type="button" 
							name="btnAgregar" 
							value="Agregar"
						>

						<!--Caja de texto buscar-->
						<p id="lblBuscar">Buscar</p>
						<input 
							type="Text" 
							name="txtBuscar"
							placeholder="Clave o nombre"
							style="width:48%;"
						>
						<!--Cierre Caja de texto buscar-->
					</div>
					
					
					<!--Tabla de productos-->
					<table id="tListaProductos" border="solid">
						<tr id="tTabla">
							<th>idProducto</th>
							<th>Nombre</th>
							<th>Existencias</th>
							<th>Precio</th>
							<th>Categoria</th>
							<th></th>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td>
								<div id="botones">
									<!--Botón dentro de la tabla -->
									<input 
										type="button" 
										name="btnEditar" 
										value="Editar"
										style="color: rgb(51,51,255);
										font-family:verdana;
										font-weight: bold;";
									>
									<input 
										type="button" 
										name="btnEliminar" 
										value="Eliminar"
										style="color: rgb(153,0,0);
										font-family:verdana;
										font-weight: bold;";
									>
								</div>
								
							</td>
						</tr>
						<?php
							require '../../Conexion.php';
							$ad = new AccesoDatos();
							$datos = $ad->consultar("select * from productos", NULL);
							foreach ($datos as $fila) {
								# code...
								echo "< value='$fila[0]'>$fila[1]</option>";
								echo "
								<tr id='$fila[0]>
									<td>$fila[1]</td>
									<td></td>
									<td></td>
									<td></td>
									<td>
										<div id="botones">
											<!--Botón dentro de la tabla -->
											<input 
												type="button" 
												name="btnEditar" 
												value="Editar"
												style="color: rgb(51,51,255);
												font-family:verdana;
												font-weight: bold;";
											>
											<input 
												type="button" 
												name="btnEliminar" 
												value="Eliminar"
												style="color: rgb(153,0,0);
												font-family:verdana;
												font-weight: bold;";
											>
										</div>
										
									</td>
								
								</tr>'";
							}
							unset($ad);
						?>	
					</table>
					<!--Cierre Tabla de productos-->
				</div>
				<!--Cierre div Lista -->
			</div>
		</form>
			
	</body>

	<footer>
		
	</footer>
</html>