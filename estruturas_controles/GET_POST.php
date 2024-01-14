<!DOCTYPE html>
<html>
    <head>
        <link href="../css/get_post.css" rel="stylesheet">
    </head>
    <body>
        <div class="title"> $_GET e $_POST </div>
        <hr><br>
  
        
        <!-- POST -->
        <!--   -->
        <!---->
        <!--  -->

        <!-- HTTP -->
        <!--  -->
        <!-- -->

        <!-- HTTPS -->
        <!--  -->
        <!-- 
         -->
        <?php
            echo"<div> 
                    <h1> GET </h1>
                 </div>
                 <div>
                     <ul>
                        <li> Ele é enviado na URL - Parametros vão pela url </li>
                        <li> Geralmente usamos quando usamos poucas informações passadas </li>
                        <li> Menos seguro (Pois conseguimos ver os parâmetros na url) </li>
                    </ul>
                 </div>

                 <div> 
                    <h1> POST </h1>
                 </div>
                 <div>
                     <ul>
                        <li> Ele é enviado dentro do body da requisição - Dados vão por uma conexão paralela, os dados são passados por essa conexão </li>
                        <li> Geralmente é usado quando temos muitas informações a será passadas </li>
                        <li> É mais seguro - Pois as informações é invisivel ao olhos do usuário </li>
                    </ul>
                 </div>

                 <div> 
                 <h1> HTTP </h1>
                 </div>
                 <div>
                     <ul>
                        <li> HTTP (Hypertext Transfer Protocol) </li>
                        <li> HTTP é um protocolo baseado em texto, os dados do usuário e do servidor podem ser 
                        interceptados ou alterados no meio do caminho. Nesse contexto, um usuário na rede pode interceptar 
                        os seus dados e lê-los ou, pior, alterar a página que você recebe ou a informação que envia para o servidor. </li>
                     </ul>
                 </div>

                 <div> 
                 <h1> HTTPS </h1>
                 </div>
                 <div>
                     <ul>
                        <li>HTTPS (Hypertext Transfer Protocol Secure) </li>
                        <li>É um protocolo de comunicação utilizado na internet para garantir a segurança e a privacidade dos dados   transmitidos por meio de comunicação criptografada. Ele é necessário em todos os sites que lidam com informações sensíveis.</li>
                     </ul>
                 </div>
            "
        ?>
    </body>
</html>

<style>
    h1{
        font-size: 30px;
    }
</style>
