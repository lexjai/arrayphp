<?php
$dias=array("Lunes"=>12,"Martes"=>21,"Miercoles"=>54, "Jueves"=>11,"Viernes"=>54,"Sabado"=>87, "Domingo"=>34);

foreach ($dias as $item => $value){
    echo "Dia: ". $item . " Valor: ". $value ."<br>";
}
$suma=array_sum($dias);
echo " Suma: ". $suma ."<br> ";
echo "Promedio ". $suma/count($dias)." ";
