<?php
$nums = array(1,2,3,4,55,6,7,8,9,10);

echo "el número mas grande de <br>";
    for($i=0; $i<count($nums);$i++){
        echo $nums[$i]." - \n";
    }
echo "<br> es:". max($nums);