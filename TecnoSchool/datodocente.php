<?php

$conexion=mysqli_connect('localhost','test','test','bdcolegio');
session_start();
$cod=$_SESSION['CodDoc'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="css/cssdatodocente.css">
</head>
<body>


	<table class="contenedor" align="center"  >
			<td class="table_title"><h1>CURSOS</h1></td> 
		<tr>

			<td>Código de Inscripción</td>
			<td>Código de Docente</td>
			<td>Código de Materia</td>
			<td>Periodo Académico</td>
			<td>Fecha</td>
			
		</tr>	
	
<?php 


$sql="SELECT * FROM docente_materia where CodDoc='$cod'";
$result=mysqli_query($conexion,$sql);
while($mostrar=mysqli_fetch_array($result)){	

?>
		<tr>	
			<td><?php echo $mostrar['CodInscripcion'] ?></td>
			<td><?php echo $mostrar['CodDoc'] ?></td>
			<td><?php echo $mostrar['CódMat']?></td>
			<td><?php echo $mostrar['PeriodoAcademico']?></td>
			<td><?php echo $mostrar['Fecha']?></td>
			
		</tr>

		<?php 
	
	}
		 ?>
	
	</table>
	
</body>
</html>