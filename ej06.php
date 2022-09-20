<?php
$nums= array(10);
for($i=0; $i<10;$i++){
    $nums[$i]= rand(0, 99);
    echo $nums[$i]. " - ";
}
$suma= array_sum($nums);
$media = $suma/count($nums);

echo "<br>la media es de: ". $media;