<!DOCTYPE html>

<hmtl>
<?php

$email = base64_decode(filter_input(INPUT_GET, "email", FILTER_SANITIZE_SPECIAL_CHARS));


?>
<head>
    <meta charset="utf-8">
    <title>Resultado Exercício Criptografia </title>

</head>
<body>

<h1><?php echo $email; ?></h1>

</body>
</html>