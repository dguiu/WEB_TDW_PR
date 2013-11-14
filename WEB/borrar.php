<html>
	<head>
		<?php
		//es un intent de borra la fila pero mes imposible ja que no se com aconseguir la id que es unica
		$conexion = mysql_connect('localhost','root','');
		$resultat = mysql_select_db('maxfun' , $conexion);
		$id = $_GET["id"];
		$taula = $_GET["taula"];
		$consulta2 = "delete from $taula where id_producte = $id ";
		(mysql_query($consulta2));
		?>
		<script type="text/javascript"> window.location="visio_productes.php"; </script>
	</head>
</html>