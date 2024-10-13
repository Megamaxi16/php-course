<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">

<?php

$nome= filter_input(INPUT_GET, "nome",FILTER_SANITIZE_SPECIAL_CHARS);
$email= filter_input(INPUT_GET, "email", FILTER_SANITIZE_EMAIL);

if(isset($nome) and $nome!=""){
    echo $nome."</br>";
}

if(isset($email) and $email!=""){
    echo $email;
}
?>


    <title>Yep</title>
</head>
<body>
    
</body>
</html>