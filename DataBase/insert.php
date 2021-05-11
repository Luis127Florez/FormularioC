<!-- <?php 

require 'Database.php';

$Tipo_C = $_POST['Tipo_C'];
$Nombre_D = $_POST['Nombre_D'];
$Area = $_POST['Area'];
$Fecha_C = $_POST['Fecha_C'];

$cadena = "INSERT INTO contactos (Tipo_de_Contacto, Nombre_Completo, Area, Fecha_Contacto) VALUES";

    for ($i=0; $i < count($Nombre_D); $i++) { 
    	$cadena.="('".$Tipo_C[$i]."', '".$Nombre_D[$i]."', '".$Area[$i]."', '".$Fecha_C[$i]."'),";
    }

$cadena_final =substr($cadena, 0, -1);
$cadena_final.=";";

echo json_encode(array('cadena' => $cadena ));



 ?> -->


 <?php
require 'DataBase.php';

$tipo = $_POST['Tipo_C'];
$nombre = $_POST['Nombre_D'];
$area = $_POST['Area'];
$fecha = $_POST['Fecha_C'];


$cadena = "INSERT INTO contactos (Tipo_de_Contacto, Nombre_Completo, Area, Fecha_Contacto) VALUES ";

for ($i = 0; $i < count($tipo); $i++) {
    $cadena.="('".$tipo[$i]."', '".$nombre[$i]."', '".$area[$i]."', '".$fecha[$i]."'),";

}

echo json_encode(array('cadena' => $cadena));

?>