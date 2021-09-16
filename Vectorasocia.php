<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vectorasocia</title>
</head>
<body>
    <?php
    $producto = array(
        'codigo' => 5,
        'descripcion' => 'ollas',   
        'valor' => 10000,
    );
foreach ($producto as $almacen => $contenido){
    echo 'para su almacenamiento : '.$almacen. "almacena el contenido:". $contenido;
    echo "<br>";
}
    ?>
</body>
</html> 