<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //$c= $a ++ $b;//error
    //$c = $a <= $b;
    //$c = ++$a;
    //$c = $a == $b;

    //echo $c= $a++ $b;. $c = $a <= $b;. $c = ++$a;, $c = $a == $b;
    ?>
</body>
</html>
La variable $a es mayor o igual que 3
La variable $b es mayor o igual que 4-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a = 3;//te nemos que asignar valor a la variable
    $b = 4;
    if($a >= 3){
        echo "La varable \$a es mayor o igual que 3 <br/>";
        if($b >= 4){ 
        echo "La varable \$b es mayor o igual que 4 ";
    }
    else {
        echo "la varaible \$b es menor o igual que 4";
    }
    }
    ?>
</body>
</html>

