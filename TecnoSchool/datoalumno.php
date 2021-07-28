<?php

$conexion=mysqli_connect('localhost','test','test','bdcolegio');
session_start();
$cod2=$_SESSION['CodAlu'];

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

			<td>Código de Matricula</td>
			<td>Código de Alumno</td>
			<td>Código de Materia</td>
			<td>Periodo Académico</td>
			<td>Fecha</td>
			
		</tr>	
	
<?php 


$sql="SELECT * FROM alumno_materia where CodAlu='$cod2'";
$result=mysqli_query($conexion,$sql);
while($mostrar=mysqli_fetch_array($result)){	

?>
		<tr>	
			<td><?php echo $mostrar['CodMatricula'] ?></td>
			<td><?php echo $mostrar['CodAlu'] ?></td>
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