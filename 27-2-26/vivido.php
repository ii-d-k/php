<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <?php
    echo "Calculadora de vida";
    $edad= 30;
    
    $dias=$edad*365;
    $horas=$dias*24;
    $minutos=$horas*60;
    $sema=$dias*7;
    $sem=round($sema,2);
    
    $edadc= 26;
    $diasc=$edadc*365;
    $horasc=$diasc*3;

    echo"<br> si desde los 4 años ud tiene telefono ha tenido con un promedio de 3h diarias ".$horasc;

    echo"<br> usted tiene ",$edad, " de edad";
    echo"<br> usted tiene ",$dias," de dias ";
    echo"<br> usted tiene ",$sem," de semanas ";
    echo"<br> usted tiene ",$horas," de horas ";
    echo"<br> usted tiene ",$minutos," de minutos ";
    ?>
</body>
</html>