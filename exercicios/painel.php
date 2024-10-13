<!DOCTYPE html>

<hmtl>


<head>
    <meta charset="utf-8">
    <title> Painel (exercicio session) </title>
   

</head>
<body>
<?php
session_start();
if(isset($_SESSION["nome"])){
    echo "<h1>". $_SESSION["nome"]."<h1>";
}
else{
    header("Location:session_index.php?msg=1");
}
?>
<a href="sair.php"><button>Sair</button></a>

</body>
</html>