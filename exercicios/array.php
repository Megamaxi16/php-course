<!DOCTYPE html>
<!--
1) Crie um array e insira o nome de seis frutas, exiba o nome de cada uma
delas dentro de um elemento <option>, filho do elemento <select>.
2) Crie um array com os seguintes valores: Mouse, Teclado, Monitor,
Gabinete, Estabilizador e Caixa de som. Exiba na tela através de seu
respectivo índice, apenas o Teclado e o Gabinete.
3) Utilizando o array criado no exercício anterior, exiba os valores começando
da última posição até a primeira. ["Mouse", "Teclado", "Monitor",
"Gabinete", "Estabilizador", "Caixa de som"]
-->

<hmtl>
<head>
    <meta charset="utf-8">
    <title> Array </title>


</head>
<body>
<?php 
$frutas = array("banana", "maça", "melancia", "uva", "melão", "mamao");?>


<select>
    <?php 
    for($i=0;$i<6;$i++){
        echo("<option>".$frutas[$i]."<option><br>");
    }?>
</select><br><br><br>

<!--Número 2-->

<?php 
$eletros = array("Mouse", "Teclado", "Monitor", "Gabinete", "Estabilizador", "Caixa de som");
    echo($eletros[1]."<br>");
    echo($eletros[3]);
    


// Número 3
for($i = 5; $i >= 0; $i--){
    echo($eletros[$i]."<br>");
}

$comidas = array(
    1=>"maça",
    2=>"banana",
    3=>"morango",
    4=>"carambola",
    5=>"jaca",
);
?>
<select>

    <?php
    foreach($comidas as $numero => $fruta){

        echo("<option value=".$numero.">".$fruta."</option>");

    }?>

</select>

<br><a href="index.php">Voltar para o hub</a><br>
</body>
</html>

<!-- Alexia Melo Brandão	
10.0
0.0
2	Alice Gallas Leite	
7.5
0.0
3	Ana Catharina Ribeiro de Lima de Azevedo	
10.0
0.0
5	Anita Brum Ferri	
8.0
0.0
6	Breno Gavioli de Matos	
9.0
0.0
7	Davi Oliveira Pileggi de Camargo	
8.5
0.0
8	Eduardo Correa Vedovato	
8.0
0.0
9	Enzo Daniel da Câmara	
9.0
0.0
10	Enzo Paiva Disconzi Martins	
10.0
0.0
11	Felipe de Souza Zerial	
9.5
0.0
12	Felipe Galhardo Ferreira	
10.0
0.0
13	Gabriel Fernandes Mendes Nogueira Lopes	
10.0
0.0
14	Gabriel Hey Nascimento	
10.0
0.0
15	Gabriela Marques de Souza	
8.0
0.0
16	Guilherme Kanaoka Ballista	
10.0
0.0
17	Henri Nocchi de Castilho	
10.0
0.0
18	Henrique Turim Schultz	
10.0
0.0
19	Isabella Cáceres Peixoto	
10.0
0.0
20	João Pedro Gonçalves de Mello	
9.5
0.0
21	João Pedro Martinez Valério	
10.0
0.0
22	João Pedro Soares Rodrigues	
9.5
0.0
23	Jordana Irala Barbosa	
10.0
0.0
24	José Vinícius Uehara Borges	
8.0
0.0
25	Lorenzo Bonfim Doerzbacher	
10.0
0.0
26	Lorenzo Gomes Hipólito de Campos	
10.0
0.0
29	Mateus Grance Lanzarini	
10.0
0.0
30	Murilo Miranda de Andrade	
10.0
0.0
31	Otávio Augusto da Silva	
9.0
0.0
32	Otávio de Oliveira Karrú	
9.0
0.0
33	Rafael Assis Peres dos Reis Barros	
0.0
0.0
34	Rafaela Beatriz Candeloro	
9.0
0.0
35	Valentina Yoshimura de Almeida	
10.0
0.0
36	Vitória Novaes Lorentz Nogueira	
10.0
0.0
37	Anny Mikaela Scottini de Bastos	
9.0
-->