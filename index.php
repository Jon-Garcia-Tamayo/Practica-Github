<?php
    include "helper/funciones.php";
    // 2º Colaborador: incluir la función calcularArea() con la rama: funccalculararea
    $resultado = "<h3>Cálculo del área de un cuadrado</h3>";
    $lado = 7;
    $area = calcularAreaCuadrado($lado); 
    $resultado .= "<p>El &aacute;rea de un cuadrado de lado $lado es $area</p>";
?>