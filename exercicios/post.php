<!DOCTYPE html>



<hmtl>

<?php
//post é passar algo pelo url lá em cima.
$arrayFuncionarios = ["Carlos","Rodrigo","Lucas", "Henry"]; //setando array pro dropdown
//$nome=[filter_input(INPUT_POST, "txtNome", FILTER_SANITIZE_STRING)]; forma antiga de filtrar uma string
$nome=filter_input(INPUT_POST, "txtNome", FILTER_SANITIZE_SPECIAL_CHARS);
$email=filter_input(INPUT_POST, "txtEmail", FILTER_VALIDATE_EMAIL); //é um filtro fora do  do curso que é valido no php 8.3 específico para email
$funcionarioCOD=filter_input(INPUT_POST, "mentor", FILTER_SANITIZE_NUMBER_INT);
$funcionario = "";
echo $funcionarioCOD; 
if ($funcionarioCOD != NULL){
    $funcionario = $arrayFuncionarios[$funcionarioCOD];
}





/* Forma insegura de usar o $_POST 

if(isset($_POST["txtNome"])){ //isso aqui verifica e tem algo no post para não dar erro
$nome=$_POST["txtNome"]; // caso existe vai pra essa variavel
}

if(isset($_POST["txtEmail"])){
$email=$_POST["txtEmail"];
}

if(isset($_POST["mentor"])){
$funcionario=$funcionarios[$_POST["mentor"]]; // Nesse caso ele vê o valor escolhodo do array e seta pra variavel
}
*/

?>

<head>
    <meta charset="utf-8">
    <title> Post </title>

<style type="text/css">
form, select{
    padding:10px;
}
li{
    padding:5px;
}
</style>
</head>

<body>
<form method="post">
    <ul>
        <li>Nome: <input type="text" name="txtNome"/> </li>
        <li>Email: <input type="email" name="txtEmail"/> </li>
        <li>Mentor: 
            <select name="mentor">
                <?php for ($i=0; $i< count($arrayFuncionarios); $i++) {?><!-- fecha o php para usar html mesmo dentro do foreach -->
                    <option value="<?=$i?>">
                    <?=$arrayFuncionarios[$i];?> </option>
                
                <?php } ?> <!-- Abre PHP para fechar as chaves --> 
            </select>
        </li>
        <li><input type="submit" name="btnSubmit" value="Cadastrar"/></li>
    </ul>
    
</form>

<?php

echo $nome;
echo $email;
echo $funcionario;

?>
</body>
</html>