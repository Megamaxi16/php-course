<hmtl>
<head>
    <meta charset="utf-8">
    <title> EXGET </title>
    
   
<?php
        
    $msg= filter_input(INPUT_GET, "msg", FILTER_SANITIZE_NUMBER_INT);
    $nome= filter_input(INPUT_GET, "nome",FILTER_SANITIZE_SPECIAL_CHARS);
    $email= filter_input(INPUT_GET, "email", FILTER_SANITIZE_EMAIL);

 if(isset($msg)){
    if($msg == 1){
        echo "Você está logado";
    }

    if($msg == 2){
        echo "Você foi deslogado";
    }
 }
 
 ?>

</head>
<body>
<div>
    <form action="exget2.php" method="get">
        Nome:<input type="text" name="nome"/><br/>
        Email<input type="text" name="email"/><br/>
        <br/>
        <input type="submit" name="btn_enviar" value="enviar">
        
    </form>
</div>


</body>
</html>