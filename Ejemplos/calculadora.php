<?php


include ("Biblioteca.php");?>

<!DOCTYPE html>
<html>
<head>
    <!-- Andres Felipe Camayo Cometa-->
    <!-- Desarrollo en PHP-->
    <!-- Taller Uso de funciones-->
    <!--Lo que se realiza es hacer un codigo donde se puedan describir las operaciones matematicas utilizando funciones -->
    <title>operaciones</title>
</head>
<body>
<form method= "POST" action="calculadora.php"><!--FORMULARIO PARA DESARROLLAR LA TABLA metodo ENVIAMOS LO VALORAES POST ACTION para nuestro codigo-->
     
     <input type="number" name="numero1">
     <select name="optiones"> 
         <option value="0">S</option>
         <option value="1">R</option>
         <option value="2">M</option>
         <option value="3">D</option>
     </select>
     <input type="number" name="numero2"><br>

     <input type="submit" name ="calcular" value="calcular"> 
         </form>
   </body>
</html>
<?php
if(isset($_REQUEST['calcular'])){
    $n1 = $_REQUEST['numero1'];
    $n2 = $_REQUEST['numero2'];
    $op = $_REQUEST['optiones '];

    switch($op){
        case 0:echo "n1+n2 =".calcular:: sumar($n1+$n2); break;
        case 1:echo "n1-n2 =".calcular:: restar($n1+$n2); break;
        case 2:echo "n1*n2 =".calcular:: multiplicar($n1+$n2); break;
        case 3:echo "n1/n2 =".calcular:: dividir($n1+$n2); break;
    }
}
?>