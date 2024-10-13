<!DOCTYPE html>
<!-- Crie um formulário com dois campos de entrada, um para o nome e outro
para o estado (utilizando um select, não precisa ser todos os estados). Sua
aplicação deverá conter as seguintes funcionalidades quando o formulário
for submetido:
- Utilize o filter_input para obter os valores dos formulários;
- Você deverá verificar se o nome possui mais de 5 caracteres e menos
que 100;


- Crie um array associativo utilizando os mesmos valores do array como
chave, e verifique se o estado selecionado está ou não no array, caso
esteja, exiba o nome do estado completo na tela;

R: posso associar uma booleana tipada como valor para confirmar se um estado é estado do brasil ou não. Então São Paulo
vai ter 1, Rio de Janeiro vai ter 1 e Sólido, liquido vai ter 0 como valores.
-->
<hmtl>
<head>
    <meta charset="utf-8">
    <title> HUB </title>
    
    <?php $estados= ["São Paulo",
        "Rio de Janeiro", 
        "Paraná", 
        "Sólido", 
        "Líquido",
        "Mato Grosso do Sul"];



    $recebe_nome= filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
    $recebe_estado= filter_input(INPUT_POST, "estado", FILTER_SANITIZE_NUMBER_INT);
    
    if($recebe_nome && $recebe_nome != NULL){
    tamanho_string($recebe_nome);
    }

    if($recebe_estado && $recebe_estado != NULL){
    printa_estado($recebe_estado, $estados);
    }

    function tamanho_string($recebe_nome) {
        $tamanho= strlen($recebe_nome);
        if($tamanho >=5 and $tamanho <= 100){
            echo("ok");
        }
        else{
            echo("Que nome troll");
        }
    }

    function printa_estado($indice_do_array, $array){
        echo($array[$indice_do_array]);
    }

    

    ?>

</head>
<body>
<div>
    <form method="post">
        Nome:<input type="text" name="nome"/><br/>
        Estado:<select name="estado">
            <?php for($i=0; $i <count($estados); $i++) {?>
               <option value="<?=$i?>"> <?php echo($estados[$i]);?>
               </option> <?php }?>
        </select><br/>
        <input type="submit" name="btn_enviar" value="enviar"></button>
    </form>
</div>


</body>
</html>