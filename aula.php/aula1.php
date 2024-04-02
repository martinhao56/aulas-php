<html>
    <head>
        <meta charset="utf-8">
        <title>aula de php</title>
    </head>
    <body>
        <h1>aula de programação web</h1>

        <!--exemplo client side -->
        <a href="javascript:;" id="btnalerta">mostrar alerta</a>

        <script>
            const btnaletrta= document.getElementById("btnalerta");

            btnaletrta.onclick = function(){
                alert("este é um exemplo de javascript")
            }

        
        </script>

        <!-- exemplo server side -->

        <h2>Data de hoje é: <?php  echo date("d/m/Y H:i:s") ?> </h2>
        
    </body>
</html>