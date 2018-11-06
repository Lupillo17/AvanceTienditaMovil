<html>
	<head>
		<title>Crear usuario</title>
		<link rel="stylesheet" type="text/css" href=".\..\css\crearusuario.css">
	</head>
		<div id="Cuerpo">
			<div id="Titulo">
				<h1>Editar Cuenta</h1>
			</div>

			<div id="NombreApellido">
				<div id="cNombre">
					<p id="lblNombre">
						Nombre:
					</p>
					<input 
						type="text" 
						name="txtNombre"
						style="height:46px;border-radius: 5px;min-width: : 162px;width: 100%;  "
					>
				</div>
				<div id="cApellido">
					<p id="lblApellidos">
						Apellidos:
					</p>
					<input 
						type="text" 
						name="txtApellidos"
						style="height:46px;border-radius: 5px;min-width: 209px;width: 100%; "
					>
				</div>
			</div>

			<div id="Correo">
				<p>Correo:</p>
				<input 
					type="text" 
					name="txtCorreo"
					style="height:46px;border-radius: 5px;min-width: 389px; width: 100%;"
				>
			</div>

			<div id="cAContrasena">
				<div id="aContrasena">
				<p>Antigua contraseña:</p>
				<input 
					type="text" 
					name="txtaContrasena"
					placeholder="Contraseña" 
					style="height:46px;border-radius: 5px;min-width: 174px; width: 42%;"
				>
			</div>
			</div>

			<div id="Contrasena">
				<div id="cContrasena">
					<p>Nueva contraseña:</p>
					<input 
						type="text"
						name="txtContrasena"
						placeholder="Contraseña" style="height:46px;border-radius: 5px;min-width: 174px;width: 100%; "
					>
				</div>

				<div id="cConfirmContrasena">
					<p>Confirmar contraseña:</p>
					<input 
						type="text"
						name="txtConfirmarContrasena"
						placeholder="Contraseña"
						style="height:46px;border-radius: 5px;min-width: 193px;width: 100%; "
					>
				</div>

			</div>

			<div id="Botones">
				<input 
					type="button" 
					name="btnCancelar"
					value="Cancelar"
				>
				<input 
					type="button" 
					name="btnCrear"
					value="Crear"
				>
			</div>
		</div>
	<body>
		
	</body>

	<footer>
		
	</footer>
</html>