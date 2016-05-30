<?php
include "conexion.php";

$nombre=$_POST["Nombre"];
$dire=$_POST["direccion"];
$claro=$_POST["clasif"];
$celula=$_POST["tel"];

$sql="UPDATE negocio SET Nombre='$nombre', Direccion='$dire', Telefono=$celula WHERE Id_Clasif='$claro'";
$res=mysql_query($sql,$conexion);

if($res){
	echo "Los datos fueron Actualizados satifactoriamente: ";
	echo " Nombre: ".$nombre." Direcciones: ".$dire." eleccion: ".$claro. "Edad: ".$celula;

}else{
	echo "Se produjo un error en ele momento de Actualizar los datos:".mysql_error();

}
mysql_close($conexion);
?>

