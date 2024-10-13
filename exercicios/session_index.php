<!DOCTYPE html>

<hmtl>

<?php 

$user= filter_input(INPUT_POST, "user", FILTER_SANITIZE_SPECIAL_CHARS);
$pass= md5(filter_input(INPUT_POST, "senha", FILTER_SANITIZE_SPECIAL_CHARS)); //criptografa aqui
$msg= filter_input(INPUT_GET, "msg", FILTER_SANITIZE_NUMBER_INT);

if($msg == 1){
    echo "<h2>Sessão não iniciada</h2>";
}
else if($msg == 2){
    echo "Usuário deslogado";
}

if($user == "fulanodetal" and $pass == "f6ba855ff45ea7c2734cd54d62d8bb02"){
    session_start();
    $_SESSION["nome"] = $user;
    header("Location:painel.php");
    //exit;
}
else if(!empty($user) and !empty($pass)){
    echo "Dados Incorretos";
}
?>

<head>
    <meta charset="utf-8">
    <title> Index da Session </title>
</head>
<body>

<form method="post">
    Usuário:<input type="text" name="user"> <br>
    Senha:<input type="text" name="senha"><br>
    <input type="submit"  value="Enviar"><br>
    
    <?php
    ?>

</form>

</body>
</html>