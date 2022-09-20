<?php

$persona2 = array("Jai","Uvidia","55310245F");
 $persona1 = array("nombre"=>"Jairo","apellido"=>"Morocho", "Dni"=>"45601454F");
 $persona2 = array("nombre"=>"Alexis","apellido"=>"Uvidia","Dni"=>"55301454F");
 
 datos($persona1);
 datos($persona2);
 
 function datos($param) {
    echo "<table>";
  
     echo "nombre: " . $param["nombre"]. "<br> Apellido: ". $param["apellido"]. "<br> DNI: ".$param["Dni"] . "<br>";
     echo "</table>";
 }
 
