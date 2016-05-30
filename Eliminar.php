<?php
include "conexion.php";


$nc=$_POST["Nombre"];


$sql="DELETE FROM negocio WHERE Nombre='$nc'";
$res=mysql_query($sql,$conexion);

if($res){
	echo "Los datos fueron Eliminado satifactoriamente: ";
	echo " Negocio: ".$nc;

}else{
	echo "Se produjo un error en ele momento de Eliminar los datos:".mysql_error();

}
mysql_close($conexion);
?>

