<!DOCTYPE html>

<hmtl>

<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);

require('functions.php');

$num1 = filter_input(INPUT_POST, "num1", FILTER_VALIDATE_INT);
$num2 = filter_input(INPUT_POST, "num2", FILTER_VALIDATE_INT);
$metodo = filter_input(INPUT_POST, "botao", FILTER_VALIDATE_INT);
$resultado = null;

if(!empty($num1) and !empty($num2) and !empty($metodo)){
    switch ($metodo){

        case 4:
            $resultado = soma($num1, $num2);
        break;

        case 1:
            $resultado = multiplica($num1, $num2);
        break;
        
        case 2:
            $resultado = divide($num1,$num2);
        break;

        case 3:
            $resultado = subtrai($num1, $num2);
        break;

        default:
            echo "Método inválido";
            break;
    }
}
?>

<head>
    <meta charset="utf-8">
    <title> HUB </title>

</head>
<body>
<h1>Eu sei somar, vou só fingir que as funções são de verdade</h1><br>

<form method="post">
    Primeiro número: <input type="number" name="num1"><br>
    Segundo número: <input type="number" name="num2"><br> 
    <button type="submit" value="4" name="botao">Soma</button>
    <button type="submit" value="1" name="botao">Multiplicação</button>
    <button type="submit" value="2" name="botao">Divisão</button>
    <button type="submit" value="3" name="botao">Subtração</button>
</form>
<br><br>

<h2 style="margin:auto;"><?php if(!empty($resultado)){ echo $resultado;} ?> </h2>

</body>
</html>