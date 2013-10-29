<html>
	<head>
		<?php include 'capcelera.php'; ?>
	</head>
	<body>
		<form action="comprovarlogin.php" method="get" class="formu" center>
			<table class="taula" align="center">
				<tr><td>Usuario:</td><td><input name="usuari"></td></tr>
				<tr><td>Contrase&ntilde;a:</td><td><input name="pass" type="password"></td></tr>
				<tr><td colspan="2"><input name="enviar" type="submit" value="Loguear">
						<input name="reset" type="reset" value="reset">
					</td>
				</tr>
			</table>
		</form>
		<table align="center">
			<tr>
				<td><a href="index.php" class="nounderline">HOME</a>&nbsp;&nbsp;&nbsp;</td>
				<td><a href="regitre_usuari.php" class="nounderline">Registrarse</a></td>
			</tr>
		</table>
	<?php include 'peu.php'; ?>
	</body>
</html>