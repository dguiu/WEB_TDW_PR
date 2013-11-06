<!DOCTYPE html>
<html>
	<head>
		<title>maxfun</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<meta name="ELIES MARTOS" content="Hege Refsnes">
		<link href="estils.css" rel="stylesheet" type="text/css" />
		<script type="text/javascript">
			function ver(n) {
         		document.getElementById("subseccion"+n).style.display="block";
        	}
			function ocultar(n) {
         		document.getElementById("subseccion"+n).style.display="none";       		
         	}
         	function borrartexto() {
         		document.formu.usuari.value = "";
         		document.formu.pass.value = "";
         	}

         	function Abrir_ventana (pagina) {
				var opciones="toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=yes, width=508, height=365, top=85, left=140";
				window.open(pagina,"",opciones);
			}
		</script>
		<table align = "center" cellpadding = "10">
			<tr> 
				<td> <img src="logo.png" alt="maxfunlogo" width="228" height ="152" ></td>
				<td><form action="http://www.google.com.ec/cse" id="cse-search-box" target="_blank">
						 <div>
					<input type="hidden" name="cx" value="partner-pub-7727019625705486:d44ven-aw0i" />
						<input type="hidden" name="ie" value="ISO-8859-1" />
					<input type="text" name="q" size="31" />
					<input type="submit" name="sa" value="Buscar" />
						</div>
					</form>
					<script type="text/javascript" src="http://www.google.com.ec/cse/brand?form=cse-search-box&amp;lang=es"></script></td>
				<td> <img src="free.png" alt="enviosgratis" width="200" height ="200"></td>
			</tr>
		</table>
		<!--</head>
		<body>-->
		<hr>
			<div>
				<ul id="menu">
					<li><a href="d.adults.php" >DISFRESSES ADULTS </a></li>
					<li><a href="d.infants.php">DISFRESSES INFANTILS </a></li>
					<li ><a href="d.masc.php"> MÀSCARES I PERRUQUES </a></li>
					<li><a href="d.accesoris.php"> ACCESSORIS I MAQUILLATGE </a></li>
					<li ><a href="d.decoracio.php"> DECORACIÓ DE FESTES </a></li>
					<li><a href="d.terror.php"> ESPECIAL TERROR </a></li>
					<li onmouseover="ver(1)" onmouseout="ocultar(1);borrartexto();"><a id="pulsa" href="" > LOGIN </a>
						<div id="subseccion1">
							<form name="formu" action="comprovarlogin.php" method="get">
								<table align="center">
									<tr><td id="usu1">Usuari:</td><td><input name="usuari"></td></tr>
									<tr><td id="cont1">Contrasenya:</td><td><input name="pass" type="password"></td></tr>
									<tr><td colspan="2"><input name="enviar" type="submit" value="Loguejar-se">
									<input name="reset" type="reset" value="reset"></td></tr>
								</table>
							</form>
							<a href="javascript:Abrir_ventana('regitre_usuari.php')"><font size="1" face="Verdana">Click aquí para abrir la ventana</font></a>
						</div>
					</li>
				</ul>
			</div>
			<!--<table align="center" cellpadding="10">
	            <colgroup>
	              <col span='7' class="first"/>
	            </colgroup>
				
	        	<tr>
	            	<td><a href="d.adults.php" >DISFRESSES ADULTS </a></td>
	            	<td><a href="d.infants.php">DISFRESSES INFANTILS </a></td>
	            	<td><a href="d.masc.php"> MÀSCARES I PERRUQUES </a></td>
	            	<td><a href="d.accesoris.php"> ACCESSORIS I MAQUILLATGE </a></td>
	            	<td><a href="d.decoracio.php"> DECORACIÓ DE FESTES </a></td>
	            	<td><a href="d.terror.php"> ESPECIAL TERROR </a></td>
					<td><a href="login.php"> LOGIN </a></td>
	       		</tr>
	      	</table>-->
		<!--</body>-->
	</head>
</html>