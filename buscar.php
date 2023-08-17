<?php
include 'conexion.php';

$Nro_Documento=$_GET["Nro_Documento"];
$consulta="SELECT * FROM cliente WHERE Nro_Documento='$Nro_Documento'";
/*$consulta="SELECT * FROM cliente";*/
$result=$link->query($consulta);

while($fila=$result->fetch_array()){
    $client[]=array_map('utf8_encode',$fila);
}

echo json_encode($client);
$result->close();


?>