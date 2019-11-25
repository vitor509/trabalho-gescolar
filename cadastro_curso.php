<?php
/**
 * arquivo para registrar os dados de um curso banco de dados.
 */
if(isset($_REQUEST['cadastrar']))
{
    try
    {
        include 'includes/conexao.php';

        $sql = "INSERT INTO curso (nome) VALUES (?) ";

        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(1, $_REQUEST['nome']);
        $stmt->execute();

    } catch(Exception $e) {
        echo $e->getMessage();
    }
}
?>
<link href="css/estilos.css" type="text/css" rel="stylesheet" />
<div>
<fieldset>
    <legend>Cadastro de Curso </legend>
        <form action="cadastro_curso.php?cadastrar=true">
            <label>Nome: <input type="text" name="nome" required /> </label>
            <button type="submit">Salvar</button>
        </form>
    </legend>
</div>