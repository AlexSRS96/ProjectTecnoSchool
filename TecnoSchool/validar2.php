<?php 
$CodAlu=$_POST['CodAlu'];
$DNI=$_POST['DNI'];
session_start();
$_SESSION['CodAlu']=$CodAlu;

$conexion=mysqli_connect("localhost","test","test","bdcolegio");

$consulta="SELECT * FROM alumno where CodAlu='$CodAlu' and DNI='$DNI'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
	header("location:datoalumno.php");
}else{
	?>
	<?php 
	include("portalAlumno.php");
	 ?>
<div align="center" style="color: white" >
	 	 <h1 > ¡ERROR EN LA AUTENTICACIÓN!</h1></div>
	 <?php
}