<!DOCTYPE html>

<?php

/*
 Crie um loop com dowhile que exiba dentro de um elemento <div> o índice
atual, porém quando o índice de repetição for 2, 6 e 10, troque a cor de
fundo apenas desta div. O loop começa de 0 e vai até 12
*/

?>

<hmtl>
<head>
    <meta charset="utf-8">
    <title> Do While </title>
    <style type="text/css">
        .especial{
            background:#1E90FF;
        }
    </style>

</head>
<body>

<?php 
$i = 0;
    do{
        if($i==2 || $i==6 || $i==12){
            echo('<div class="especial">' .$i. '</div>');
        }

        else{
            echo('<div>' .$i. '</div>');
        }
        $i++;
    } while($i<=12);

?>

<a href="index.php">Voltar para o hub</a><br>
</body>
</html>
