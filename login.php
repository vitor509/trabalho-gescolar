<?php
session_start();

if(isset($_REQUEST['logar']))
{
    try 
    {
        include 'includes/conexao.php';

        $stmt = $conexao -> prepare("SELECT * FROM usuarios WHERE usuario = ? AND senha = ? ");
        $stmt -> bindParam(1, $_REQUEST['usuario']);
        $stmt -> bindParam(2, sha1($_REQUEST['senha']));
        $stmt -> execute();

        // Caso o usuário seja encontrado no banco de dados...
        if($stmt -> rowCount() > 0) {
            $dados_usuario = $stmt -> fetchObject(); // Pega todos os dados do usuário.

            $_SESSION['gescolar_dados_usuario'] = $dados_usuario; // Coloca na variavel da sessao.
            
            header("Location: index.php"); // Redireciona para a pagina inicial.
        } else{
            header("Location: login.php?erro=true"); // Caso login der errado.
        }
    } catch(Exception $e) {
        echo $e -> getMessage();
    }
}
?>
<link href="css/estilos.css" type="text/css" rel="stylesheet" />

<style>
fieldset { width: 15%; margin-top:10%; }
</style>

<fieldset>
    <legend> Login </legend>

    <form method = "post" action="login.php?logar=true" >
        <label>Usuário:
            <input name ="usuario" type="password" reqired />
        </label>
        <label>Senha:
            <input name ="senha" type="password" reqired />
        </label>
        <button type="submit">Entrar</button>
    </form>
</fieldset>        