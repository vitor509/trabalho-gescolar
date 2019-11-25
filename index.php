<?php 

// Caso o usuário clique em sair.
if(isset($_REQUEST['sair'])) {

    unset($_SESSION['gescolar_dados_usuario']) // Destroi a sessão de autenticação do usuário.
    header("location login.php"); // Redireciona para a página no login.
}

// Protegendo a página contra acesso sem autenticação.
if(!isset($_SESSION['gescolar_dados_usuario'])) {
    header("location login.php"); // Redireciona para o login.
}

// Abreviando o nome da variável que contém os dados do usuário.
$usuario = $_SESSION['gescolar_dados_usuario'];

?>
<!DOCTYPE html>
<HTML>
   <head>
       <link href="css/estilos.css" type="text/css" rel="stylesheet" />
   </head>
   <body>
       <div id="global">

            <!-- Exibindo o nome do usuario que esta guardado na sessão com os outros dados --> 
            <h1>Gescolar <small>, Bem-Vindo <?= $usuario['nome'] ?> </small> </h1>

            <?php include_once 'includes/cabecalho.php' ?>

        </div>
    </body>
</html>      