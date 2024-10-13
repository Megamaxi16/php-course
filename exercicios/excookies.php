<!DOCTYPE html>
<hmtl>

<?php

$nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);

if(!empty($nome) and $nome>=5){
    setcookie("nome_cookie", $nome, time()+24*60*60);
}

?>

<head>
    <meta charset="utf-8">
    <title> Exercício Cookies </title>

</head>
<body>

<form method="post">
    Nome:<input type="text" name="nome"><br>
    <input type="submit" value="Enviar">

</body>
</html>