<?php
include "conexion.php";

$neg=$_POST["nego"];
$direc=$_POST["dire"];
$rrf=$_POST["rff"];
$tel=$_POST["tell"];
$corre=$_POST["core"];
$clasi=$_POST["clas"];
$lata=$_POST["lat"];
$log=$_POST["logi"];
//$tele=$_POST["fot"];

$sql="INSERT INTO negocio (Nombre, Direccion, RFC, Telefono, Email, Id_Clasif, Lat, Lon)VALUES('$neg','$direc','$rrf','$tel','$corre','$clasi','$lata','$log')";
//$sql="INSERT INTO negocio VALUES('$neg','$direc','$rrf','$tel','$corre','$clasi','$lata','$log'";

$res=mysql_query($sql,$conexion);

if($res){
	echo "Los datos fueron registrados satifactoriamente: ";
	echo " Nombre: ".$neg." Direccion: ".$direc." RFC: ".$rrf. "Telefono: ".$tel."E-mail: ".$corre."Clasificacion: ".$clasi."Latitud: ".$lata."Longitud: ".$log;

}else{
	echo "Se produjo un error en ele momento de resgistrar los datos:".mysql_error();

}
mysql_close($conexion);
?>
