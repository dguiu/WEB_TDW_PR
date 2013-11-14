<html>
	<head>
		<?php
		$conexion = mysql_connect('localhost','root','');
		$resultat = mysql_select_db('maxfun' , $conexion);
		if(isset($_POST['prod'])!="" && isset($_POST['nom'])!="" && isset($_POST['preu'])!="" && isset($_POST['pagi'])!=""){
			$idunico= time();
			$nomficher = $idunico . "_" . trim($_FILES['archiu']['name']);
			$rut = '/fotos/';
			$nomtot = $rut . $nomficher;
			$ruta = trim($_SERVER['DOCUMENT_ROOT'] . "/WEB_TDW_PR/trunk/WEB/fotos/" . $nomficher);
			copy($_FILES['archiu']['tmp_name'], $ruta);
			$consulta3 = "insert into producte(id_producte, nom, preu, fotografia, id_pagina) values('" . $_POST['prod'] . "','" . $_POST['nom'] . "','" . $_POST['preu'] . "','".$nomtot."','" . $_POST['pagi'] . "')";
			(mysql_query($consulta3, $conexion));?>
			<p> dades introduides correctament> </p>
			<!--<div align = "center"><a href="index.php" >HOME</a></div>-->
			<script type="text/javascript"> window.location="index.php"; </script>
		<?php } else { ?>
			<p> dades no introduides correctament> </p>
			<!--<div align = "center"><a href="index.php" >HOME</a></div>-->
			<script type="text/javascript"> window.location="index.php"; </script>
		<?php } ?>
	</head>
</html>