<?php 
$CodDoc=$_POST['CodDoc'];
$DNI=$_POST['DNI'];
session_start();
$_SESSION['CodDoc']=$CodDoc;

$conexion=mysqli_connect("localhost","test","test","bdcolegio");

$consulta="SELECT * FROM profesor where CodDoc='$CodDoc' and DNI='$DNI'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
	header("location:datodocente.php");
}else{
	?>
	<?php 
	include("portalLogin.php");
	 ?>
	 <div align="center" style="color: white" >
	 	 <h1 > ¡ERROR EN LA AUTENTICACIÓN!</h1></div>
	 <?php
}
	

 