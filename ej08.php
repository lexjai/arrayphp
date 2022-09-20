<?php
$nombre="Jailex";
$apellido="Uvidia";
$dni="4589965G";
$values = array ("Nombre" => $nombre, "Apellido" => $apellido, "DNI" => $dni);


foreach ($values as $item => $value){
    echo $item.": ".$value." ";
}