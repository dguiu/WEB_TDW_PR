<?php
include ("capcelera.php");
$conexion = mysql_connect('localhost','root','');
$resultat = mysql_select_db('maxfun' , $conexion);
$consulta = 'select * from producte';
$result = mysql_query($consulta, $conexion);
?>
<html>
    <body>
        <center>
            <table width="100%" border="1" bordercolor="black">
				<thead>
					<tr><td align="center">Identificador producte</td><td align="center">Nom del producte</td>
					<td align="center">Preu del producte</td><td align="center">Fotografia del producte</td>
					<td align="center">pagina de relacio </td><td align="center"> Esborrar </td></tr>
				</thead>
				<tbody>
            <?php
            //fem un bucle per mostrar les dades de la base de dades
            for($cont=0; $cont< mysql_num_rows($result);$cont++){
                $fila= mysql_fetch_array($result,MYSQL_ASSOC);
                $prod = $fila["id_producte"];
                $nom = $fila["nom"];
                $preu = $fila["preu"];
                $foto = $fila["fotografia"];
                $pagi = $fila["id_pagina"]; ?>
				
					<tr>
						<td align="center"><?php echo $prod ?></td>
						<td align="center"><?php echo $nom ?></td>
						<td align="center"><?php echo $preu ?></td>
						<td align="center"><img src="<?php echo $foto ?>" /></td>
						<td align="center"><?php echo $pagi ?></td>
						<td align="center"><a href="borrar.php?id=<?php echo $prod;?>&taula=<?php echo "producte";?>"><img src="borra.GIF"></a></td>
					</tr>
				
             <?php
            }
            ?>
				</tbody>
			</table>
        </center>
    </body>
	<a href="index.php">home</a>
</html>