<!DOCTYPE html>

<hmtl>
<?php

$nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
$email= filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);

//VERIFICAR 5 CARACTERES NO NOME E EMAIL NÃO VAZIO
if(!empty($nome) and !empty($email) and strlen($nome)>=5){
    $cripto_email = base64_encode($email);
    header("Location:result_criptografia.php?email=".$cripto_email);
}
?>
<head>
    <meta charset="utf-8">
    <title> Exercício Criptografia </title>

</head>
<body>

 <form method="post">
    Nome:<input type="text" name="nome"><br>
    Email:<input type="text" name="email"><br>
    <button type="submit">Enviar</button>
 </form>


</body>
</html>