<html>
	<head>
		<title>Crear usuario</title>
		<link rel="stylesheet" type="text/css" href="css\crearusuario.css">
	</head>
		
		
	<body>
		<form action="frontEnd/daoUsuario.php" method="POST">
			<div id="Cuerpo">
				<div id="Titulo">
					<h1>Crear cuenta</h1>
				</div>
				<div>
					<div id="cUsuario">
						<p id="lblUsuario">
							Nombre de usuario:
						</p>
						<input 
							type="text" 
							name="txtUsuario"
							placeholder="Ingesa el nombre de usuario" style="height:46px;border-radius: 5px;min-width: : 162px;width: 100%;  "
						>
					</div>
				</div>
				<div id="NombreApellido">
					<div id="cNombre">
						<p id="lblNombre">
							Nombre:
						</p>
						<input 
							type="text" 
							name="txtNombre"
							placeholder="Ingresa tú Nombre" style="height:46px;border-radius: 5px;min-width: : 162px;width: 100%;  "
						>
					</div>
					<div id="cApellido">
						<p id="lblApellidos">
							Apellidos:
						</p>
						<input 
							type="text" 
							name="txtApellidos"
							placeholder="Apellidos" style="height:46px;border-radius: 5px;min-width: 209px;width: 100%; "
						>
					</div>
				</div>

				<div id="Contrasena">
					<div id="cContrasena">
						<p>Contraseña:</p>
						<input 
							type="password"
							name="txtContrasena"
							placeholder="Contraseña" style="height:46px;border-radius: 5px;min-width: 174px;width: 100%; "
						>
					</div>

					<div id="cRol">
						<p>Rol:</p>
						<input 
							type="text"
							name="txtRol"
							placeholder="Ingresa el rol del usuario"
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
						type="submit" 
						name="submit"
						value="Crear"
					>
				</div>
			</div>
		</form>
	</body>

	<footer>
		
	</footer>
</html>