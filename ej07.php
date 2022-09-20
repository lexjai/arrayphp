<?php
$tam=10;
$nums= array($tam);
echo "Relación de números aleatorios<br>";

for($i=0; $i<$tam;$i++){
    $nums[$i]= rand(1, 200);
    echo $nums[$i]. " - ";
}
echo "<br>Otra forma de visualizar los datos de un array <br>";
print_r($nums);
echo "<br>Relación de números aleatorios al reves<br>";
for($i=$tam-1; $i>=0;$i--){
    echo $nums[$i]. " - ";
}