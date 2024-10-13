<!DOCTYPE html>

<hmtl>

<?php 

function ler_txt(){
    $fp = fopen("teste.txt", "r");
    $escrita = fread($fp, filesize("teste.txt"));
    fclose($fp);
    return $escrita;
}

function formata_txt($texto){
return str_replace("---", "<br/>", $texto);
}

?>

<head>
    <meta charset="utf-8">
    <title> HUB </title>

</head>
<body>

 <?php

 $texto = ler_txt();
 echo formata_txt($texto);

 ?>

</body>
</html>