<?php 

	$conexion=mysqli_connect('localhost','root','','crud_php');
    $id=$_POST['id_producto'];
	$nombreP=$_POST['nombreP'];
	$apellidoP=$_POST['apellidoP'];
	$apellidoM=$_POST['apellidoM'];
	$fechaN=$_POST['fechaN'];
    $deathN=$_POST['deathN'];

	$sql="INSERT into producto (nombreP,apellidoP,apellidoM,fechaN,deathN)
			values ('$nombreP','$apellidoP','$apellidoM','$fechaN','$deathN')";
	echo mysqli_query($conexion,$sql);
 ?>