//verifica se o documento foi carregado automaticamente
$(function (){

    //a parte on('click' , function() está diferente do curso pois usar .click( function())... ficou obsoleto
    $("#btnCadastrar").on('click' , function() {

        //aqui eu crio um objeto que vai receber os valores direto do html, devo colocar os ids e o .val() é para pegar o valor deles
        let obj = {
            txtNome : $("#txtNome").val(),
            txtEmail : $("#txtEmail").val(),
            txtTelefone : $("#txtTelefone").val()
        };

        console.log(obj)

        //Aqui é que a mágica acontece, isso aqui é o ajax
        //Se esforça pq é tudo bem autoexplicativo.
        $.ajax({
            url : "action/UsuarioAction.php?req=1",
            type : "POST",
            dataType : "TEXT ",
            data: obj,
            beforeSend : function(){
                $('#spResultado').html("Processando...")
            },
            success : function(data){
                console.log(data);

                //dúvida sobre o retorno de 'data'
                if(data == 1){
                    $("#spResultado").css("color", "green");
                    $("#spResultado").html("Cadastrado...");
                }
                else{
                    $("#spResultado").css("color", "red");
                    $("#spResultado").html("Deu erro...");
                }
            },
            error: function(error){
                console.log(error);
            },
            complete: function(){

            }
        });
    });

    $("#btnConsultar").on("click", function(){
            
        //aqui é a mesma coisa mas com GET 
        $.ajax({
            url : "action/UsuarioAction.php?req=2",
            type : "GET",
            dataType : "TEXT ",
            
            //data está vazio, eu vou pegar algo para preencher data
            data: {},
            success : function(data){
                console.log(data);
                
                //isso aqui vai atribuir o que data vai receber ao conteúdo do id bqResultado
                $("#bqResultado").html(data);

            },
            error: function(error){
                console.log(error);
            },

        });
    });

    $("#txtCep").on("focusout", function(){ //focus out é quando vc clica fora da caixa de escrever

        if($("#txtCep").val().length >= 5){

            let cep = $("#txtCep").val().replace("-", ""); //filtra caso o nosso querido usuário coloque o traço nos 3 ultimos dígitos

            //url http://correiosapi.apphb.com/cep/ foi descontinuada
            let url = "https://viacep.com.br/ws/" + cep + "/json";

            $.ajax({
                url : url,
                type : "GET",
                dataType : "JSON",
                //jsonpCallback: "funcaoCep",
                
                //data está vazio, eu vou pegar o resultado da api e armazenar nele
                data: {},
                success : function(data){
                    console.log(data);
                    
                    if(data != null){
                        $("#txtLogradouro").val(data.regiao);
                        $("#txtRua").val(data.logradouro);
                        $("#txtBairro").val(data.bairro);
                        $("#txtCidade").val(data.localidade);
                        $("#txtEstado").val(data.estado);
                    }
                },
                error: function(error){
                    console.log(error);
                },
    
            });

        }


    });
});

