<?php
// cria um array que para cada parametro do array tem outro array
$arrNotas = [
    "aluno1" => [
        "nome" => "Gunnar",
        "nota" => 7
    ],
    "aluno2" => [
        "nome" => "Henry",
        "nota" => 9
    ],
    "aluno3" => [
        "nome" => "Miriã",
        "nota" => 10
    ],
    "aluno4" => [
        "nome" => "Joeber",
        "nota" => 4
    ],
]; 
//Lógica do foreach: colocamos o título do array ($arrNotas) e o nome que ele vai assumir ($aluno)
//Como é um array dentro de outro array eu coloco um foreach dentro do foreach.
//Como o resultado de $arrNotas é o nome do array interno que vamos acessar e $arrNotas se chama aluno, 
//nós colocamos o resultado do array aluno e damos nome pro índice ($chave que será nome e nota)
// e colocamos um valor final ($valor)
foreach($arrNotas as $aluno){
    foreach($aluno as $chave => $valor){
        echo($chave ." = ". $valor."<br>");
    }
}
?>