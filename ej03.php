<?php
$producto = array("primer","seguno","ter","cuarto","quinto");
$precio=array(23,20,28,43,83);
$rebaja= 20;


for($i=0;$i< count($producto); $i++){
    echo "Producto: ". $producto[$i] . " ->Precio: ". $precio[$i]."<br>";
    for($j=0; $j<count($precio)&& ($i)== count($precio)-1; $j++){
        $r=($precio[$j]*$rebaja)/100;
        $precio[$j]=$precio[$j]-$r;
        echo "Producto: ". $producto[$j] ." -> precio nuevo: ". $precio[$j]."<br>";
    }
}