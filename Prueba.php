<?php
$personas[0] = array("Nombre" => "Juan Pérez","Direccion" => "Cra. 45 # 45 -
56","Telefono" => "3456789","Fecha de cumpleaños" => "23/12/1997","Color_favorito" => "Amarillo","Significado" =>"Riqueza y
alegría.");

$personas[1] = array("Nombre" => "Pablo Manrique","Direccion" => "Clle. 23 # 12 - 19 Sur","Telefono" => "3214567","Fecha de cumpleaños" => "12/10/1980","Color_favorito" => "Verde","Significado" =>"No se
encuentra el significado.");

$personas[2] = array("Nombre" => "Nancy Peña","Direccion" => "Av. 34 # 16 - 12","Telefono" => "2135423","Fecha de cumpleaños" => "07/06/2000 ","Color_favorito" => "Rojo","Significado" =>"No se
encuentra el significado.");

$colores[0] = array ("Color" => "Rojo", "Descripcion" => "Es un color feo");
$colores[1] = array ("Color" => "No aplica", "Descripcion" => "No aplica");
$colores[2] = array ("Color" => "Verde", "Descripcion" => "Es un color xd");
$colores[4] = array ("Color" => "Azul", "Descripcion" => "Es un color muy azul");

?>

<table style="border: 1px solid black; border-collapse: collapse;">
            <tr>
                <th style="border: 1px solid black">Nombre</th>
                <th style="border: 1px solid black">Direccion</th>
                <th style="border: 1px solid black">Telefono</th>
                <th style="border: 1px solid black">Fecha de cumpleaños</th>
                <th style="border: 1px xsolid black">Color Favorito</th>
                <th style="border: 1px solid black">Significado</th><!--columna-->
            </tr><!-- una fila -->
    </thead>
    <tbody>
        <?php foreach ($personas as $index => $persona) { ?>
        <tr>
            <td><?php echo $persona['Nombre']; ?></td>
            <td><?php echo $persona['Direccion']; ?></td>
            <td><?php echo $persona['Telefono']; ?></td>
            <td><?php echo $persona['Fecha de cumpleaños']; ?></td>
            <td><?php echo $persona['Color Favorito']; ?></td>
            <td><?php echo $persona['Significado']; ?></td>      
            <?php 
            foreach ($colores as $color) { 
                $descripcion = "";
                //Saber si el if es verdadero o falso si los colores coinciden es verdadero si no es falso
                /* var_dump($persona["Color_favorito"] == $color["Color"]);
                die; */
                if($persona["Color_favorito"] == $color["Color"]){
                    $descripcion = $color["Descripcion"];
                }
            ?>
            <td><?php echo $descripcion; ?></td>
            <?php } ?>
        </tr>
        <?php } ?>
    </tbody>
</table>