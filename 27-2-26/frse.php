<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="frse.php" method ="POST">
        <input type="text" name="frase">
        <input type="submit" value="Calcular">

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $frase_usuario = $_POST["frase"]; 


    $nivel_cursi= 0;
    $nivel_cringe= 0;
    $nivel_random= 0;
    $frases_cursis= array("Cuchicuchi","Terroncito","Amorcín","Cielito","Corazoncito","Pichoncito","Gordi","Bomboncito","Dulzura","Preciosura");
    foreach ($frases_cursis as $palabra) {
        if (str_contains($frase_usuario, $palabra)) {
            $nivel_cursi= $nivel_cursi+10;
        }
    }
            $frases_cringe = array("Rizz","Delulu","Skibidi","Aura","Ship","Bestie","Sigma","Ghostear","Funar","Potaxie");    foreach ($frases_cringe as $palabra) {
        if (str_contains($frase_usuario, $palabra)) {
            $nivel_cringe= $nivel_cringe+10;
        }
    }
    $frases_random= array("Mariposa","Travesura","Nebulosa","Chispa","Lunático","Espejismo","Torbellino","Quimera","Destello","Susurro");
    foreach ($frases_random as $palabra) {
        if (str_contains($frase_usuario, $palabra)) {
            $nivel_random= $nivel_random+10;
        }
    }
echo "nivel cursi ".$nivel_cursi;
echo "nivel cringe ".$nivel_cringe;
echo "nivel random ".$nivel_random;
}
?>
    </form>
</body>
</html>