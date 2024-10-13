<!DOCTYPE html>

<hmtl>
<head>
    <meta charset="utf-8">
    <title> Print do Cookie </title>
   

</head>
<body>

<?php

$nome = filter_input(INPUT_COOKIE, "nome_cookie", FILTER_SANITIZE_SPECIAL_CHARS);
print_r($nome);

?>


</body>
</html>