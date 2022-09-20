<?php
$meses= array("Enero"=>31, "Febrero"=>28 , "Marzo"=>30, "Abril"=>31 ,"Mayo"=> 30, "Junio"=>31 , "Julio"=>30, "Agosto"=>31, "Septiembre"=>30, "Octubre"=>31,"Noviembre"=>30, "Diciembre"=>31 );

foreach ($meses as $item => $value){
    echo $item.": ".$value." <br>";
}