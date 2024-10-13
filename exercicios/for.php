<?php
/*
1) Crie uma repetição utilizando o for que exiba na tela o valor do índice
atual, como por exemplo: Índice 1, índice 2... índice 9.
2) Utilizando o for dentro de um elemento <ul> do HTML, crie uma repetição
que vai de 0 a 20, para cada repetição crie um elemento <li> que exiba o
valor do índice atual multiplicado por 30.
*/
?>
<!DOCTYPE html>

<hmtl>
<head>
    <meta charset="utf-8">
    <title> For </title> 
</head>
<body>

<ul>
<?php
$resultado = "";
for($i = 0; $i<=20; $i++){
    $resultado = $i*30;
?>
        <li><?php echo($resultado); ?> </li>

<?php }?>

</ul>

</body>
</html>

<?php




echo('<a href="index.php">Voltar para o hub</a><br>');
?>