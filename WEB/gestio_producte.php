<?php include 'capcelera.php'; ?>
<body>
	<FORM METHOD="POST" enctype="multipart/form-data" ACTION="introduir_producte.php">
		<table width="50%" align="center">
			<tr> <td> Identificador del producte: </td> <td><input name="prod" type="text"></td> </tr>
			<tr> <td> Nom del producte: </td> <td><input name="nom" type="text"></td> </tr>
			<tr> <td> preu </td> <td><input name="preu" type="text"></td> </tr>
			<tr> <td> Fotografia del producte: </td> <td><input name="archiu" type="file"></td> </tr>
			<tr> <td> Assignació pàgina: </td> <td><input name="pagi" type="text"></td> </tr>
			<td ALIGN="center"> <input  value="Penjar" type="submit"> </td>
		</table>
	</form>
</body>
<?php include 'peu.php'; ?>