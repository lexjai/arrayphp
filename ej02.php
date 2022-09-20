<?php
$producto = array("primer","seguno","ter","cuarto","quinto");
$precio=array($producto[0]=>"23€",$producto[1]=>"20€",$producto[2]=>"28€",$producto[3]=>"43€",$producto[4]=>"83€" );

for($i=0;$i< count($producto); $i++){
    echo "Producto: ". $producto[$i] . " ->Precio: ". $precio[$producto[$i]]."<br>";
}