<?PHP
//funcion simple 
function usuario($name)
{
    echo "nuevo usuario $name";
}
         usuario('Victor </br>');
         usuario('Jhoana </br>');
         usuario('Camila </br>');
         usuario('Andres </br></br></br>');
?>

<?php
function estudiante(
    $names = 'victor',
    $apellido = 'Camayo',
    $edad = 17,
    $ciudad = 'bogota'
){
echo "El estudiante  $names con el apellido $apellido </br>
tiene $edad y vive en $ciudad";
}
estudiante("Carlos","Guzman",18,"cali</br></br></br>");//parametro para funcion

?>

<?php
$usuarios = array(
   'nuevo usuario' => 'Victor',
   'XD' => 'Jhoana',
   'oso' => 'Camila',
   'aea' => 'Andres');
    foreach($usuarios as $usa => $nombres){
        echo "$usa "."$nombres </br></br>";
    }
?>

   <?php
    $producto = array(
        'codigo' => 5,
        'descripcion' => 'ollas',   
        'valor' => 10000,
    );
foreach ($producto as $almacen => $contenido){
    echo 'para su almacenamiento : '.$almacen. "almacena el contenido:". $contenido;
    echo "<br></br>";
}
    ?>

<?php

function suma($a,$b){
    return $a * $b ;

}
$resultado = suma (5,5);
echo $resultado;

?>