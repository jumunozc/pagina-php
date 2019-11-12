<?php
	
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "sasuken27.";
$dbName = "incorem";

$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);

?>

<!DOCTYPE html>
<html>
<head>
		<title>Mostrar Datos </title>
		<link rel="stylesheet" type="text/css" href="Styles/estilo.css" />
	</head>
	<body>
				<form action="categoria2.php" method="post">
			<input type="submit" value="Regresar">
		</form>
		<h1 align = "center" style="color:#0000ff";>MOTOR </h1>
		<table align = "center" border="1">
			<tr>
				<td><strong>CODIGO</strong></td>
				<td><strong>NOMBRE</strong></td>
				<td><strong>PRECIO</strong></td>
				<td><strong>CANTIDAD</strong></td>
			</tr>

<?php
	$sql = "SELECT * FROM motor;";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);

	if($resultCheck >0){
		while($row = mysqli_fetch_assoc($result)){

			echo "<tr>";
				echo"<td>";
					echo $row['codigo_Producto'];
				echo"</td>";
				echo"<td>";
					echo $row['Nombre_Producto'];
				echo"</td>";
				echo"<td>";
					echo $row['Precio'];
				echo"</td>";
				echo"<td>";
					echo $row['Cantidad'];
				echo"</td>";
			echo "</tr>";
		}
	}
?>

</body>
</html>