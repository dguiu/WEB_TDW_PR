<!DOCTYPE html>
<html>
	<head>
		<?php include 'capcelera.php'; ?>
	</head>
	<body>
		<form method=get action="">
			<table align="center">
				<tr><td> <b>Nom:</b> </td> <td><input name="nom" type="text"></td></tr>
				<tr><td> <b>Cognom:</b> </td> <td><input name="cog" type="text"></td></tr>
				<tr><td> <b> Contrasenya: </b> </td> <td> <input name="contrasenya" type="password"></td></tr>
				<tr><td> <b> usuari: </b> </td> <td> <input name="usu" type="text"></td></tr>
				<tr><td> <b> mail: </b> </td> <td> <input name="mail" type="text"></td></tr>
				<tr><td><b>Tipo</b></td> <td ALIGN="center">
						<SELECT NAME="tipo">
							<OPTION SELECTED  VALUE=1> Usuari </OPTION>
							<OPTION VALUE=0> Admin</OPTION>
						</SELECT> </td></tr>
				<tr><td ALIGN="center"> <input  value="Registrar" type="submit"> </td></tr>
			</table>
		</form>
		<div align = "center"><a href="index.php" >HOME</a></div>
		<?php include 'peu.php'; ?>
	</body>
</html>