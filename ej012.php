<?php
$datos= array("jordi"=>"Jordi Rubio", "marta"=>"Marta Fabra", "eva"=>"Eva Palacio", "toni"=>"Antonio Comas", "emilio"=>"Emilio Morales","foo"=>"Francisco Cascales");

echo "<h1>Array asociativo</h1>";
echo "<h3>Mostrar el array</h3>";

forA($datos);

echo "<h3>Ordenar por la clave</h3> <br>";
ksort($datos);
forA($datos);


echo "<h3>Ordenar por contenido</h3> <br>";
natsort($datos);
forA($datos);


function forA($param) {
    foreach ($param as $item => $value){
        echo $item."<br>".$value." <br>";
    }
    
}