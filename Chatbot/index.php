<!DOCTYPE html>
<html lang="pt-BR">
    <!-- Código font by ClevCodes www.youtube.com/@clevcodes -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- link para arquivo css -->
    <link rel="stylesheet" href="style.css">
    <!-- <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script> -->
    <script src="jquery-3.7.0.min.js"></script>
    <title>Simples chat bot</title>
</head>
<body>
    <div class="conteudo">
        <header class="cabecalho">Simples ChatBot</header>
        <div class="area-sms">
            <!-- bot -->
            <div class="user-bot user">
                <div class="icon">
                    <img src="icones/bot.png"/>
                </div>
                <div class="mensagem">
                    <p>Ola em que posso ajudar hoje?</p>
                </div>
            </div>
        </div>

        <div class="area-envio">
            <div class="linhas">
                <input id="valorInput" type="text" placeholder="Mensagem...">
                <button id="clickBtn"><img src="icones/enviar.png"/></button>
            </div>
        </div>
    </div>

    <script>
        //trabalhando com jquery

        $(document).ready(function(){
            //trabalhando com accao do botao
            $("#clickBtn").on("click", function(){
                //pegando valor do input
                var $valor = $("#valorInput").val();
                var $mensagem = '<div class="user-user user"><div class="mensagem"><p>'+$valor+'</p></div></div>';
                $(".area-sms").append($mensagem); //para poder criar uma div de sms
                $("#valorInput").val('');


                // trabalhando com ajax
                $.ajax({
                    url: 'mensagem.php',
                    type: 'POST',
                    data: 'text='+$valor,
                    success: function(resutado){
                        
                    }
                });
            })
        });
    </script>
</body>
</html>