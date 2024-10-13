<!DOCTYPE html>

<hmtl>

<?php 

function  gravar_texto($nome, $email, $telefone, $rg){
$conteudo = "---Nome: " . $nome . "---Email: " . $email . "---Telefone: " . $telefone . "---RG: " . $rg;
//echo $conteudo;
$fp = fopen('teste.txt', 'a');
fwrite($fp ,$conteudo);
fclose($fp);
}

$status = 0;

$nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
$telefone = filter_input(INPUT_POST, "telefone", FILTER_SANITIZE_SPECIAL_CHARS);
$rg = filter_input(INPUT_POST, "rg", FILTER_SANITIZE_SPECIAL_CHARS);
$valores = array($nome, $email, $telefone, $rg);

for($i=0; $i<4; $i++){
    if(isset($valores[$i]) and $valores[$i] != NULL){
        //echo "</br>No array:" . $valores[$i] . "</br>";
        $status++;
        echo $status;
    }
}

if($status == 4){
    gravar_texto($nome, $email, $telefone, $rg);
}

?>

<head>
    <meta charset="utf-8">
    <title> HUB </title>

</head>
<body>

 <form method="post">
    Nome: <input type="text" name="nome"/></br>
    Email: <input type="text" name="email"/></br>
    Telefone: <input type="text" name="telefone"/></br>
    RG: <input type="text" name="rg"/></br>
    <input type="submit" name="btn_enviar" value="enviar">
 </form>

</body>
</html>