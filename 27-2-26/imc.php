<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
echo "Calculadora de Peso" . "<br>";    
$peso= 60;
$altura= 1.80 ;
$imc = $peso / ($altura * $altura);
echo "<br> su peso es de ",$peso," kg"; 

echo "<br> su altura es de ",$altura," m";

if ($imc < 18.5) {
    echo "<br> su indice de masa corporal es de ",$imc," y esta bajo peso";
} 
else
    if ($imc >= 18.5 && $imc < 25) {
    echo "<br> su indice de masa corporal es de ",$imc," y esta en un peso normal";
}
 else
if ($imc >= 25 && $imc < 30) {
    echo "<br> su indice de masa corporal es de ",$imc," y esta con sobrepeso";
}  
else
if ($imc >= 30) {
    echo "<br> su indice de masa corporal es de ",$imc," y esta con obesidad";
}

$resultado = number_format($imc, 3, '.', ''); 
echo "<br> su IMC redondeado es de: ",$resultado;

?>  



</body>
</html>