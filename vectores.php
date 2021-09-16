<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vectores</title>
</head>
<body>
<?php 
$usuarios[] = "fabio";//pocision 0 el vector se llama fabio 
$usuarios[] = "Maria";//pocision 1 el vector se llama Maria
$usuarios[] = "luis";//pocision 2 el vector se llama fabio
$usuarios[] = "jose";//pocision 3 el vector se llama fabio ctrl V para duplicar linea

foreach ($usuarios as $nombre) {
    echo $nombre;
    echo "<br>";
    
}
//for}} ($f=0; $f<count($usuarios); $f++){//declaremos una variable F count es una funcion para recorrer el vector
//ciclo for 
//echo $usuarios [$f];
//echo "<br>";}


?>


    
</body>
</html>
