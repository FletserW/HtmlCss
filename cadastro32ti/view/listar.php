<?php
    require_once("../control/clientesDAO.class.php");
    require_once("../model/clientes.class.php");
    require_once("../model/conexao.class.php");

    if(isset($_get['cod]'])){
        $cli = new clientesDAO();
        if($cli->excluir($_GET['cod'])){
            echo " 
                <script>
                    alert('cadastro excluido com sucesso!');
                    window.location.href = 'listar.php';
                </script>";
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Sistema Cadastro</title>
    </head>
    <body>
        <div style="width: 600px; margin: 0 auto">
        <fieldset>
            <legend>Localizar por nome:</legend>
            <form method="POST">
                Nome: <input type="text" name="nome">&nbsp;
                <input type="submit" value="Buscar"><br><br>
            </form>
            <a href="index.html">Voltar</a><br><br>
        </fieldset>
        <?php
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $dao = new clientesDAO();
                if($lista = $dao->buscaNome($_POST['nome'])){
                    echo "
                        <table border='1'>
                            <tr>
                                <th>Código</th>
                                <th>Nome</th>
                                <th>Data de nascimento</th>
                                <th></th>
                                <th></th>
                            </tr> ";
                   foreach($lista as $l){
                    echo "
                        <tr>
                            <td>{$l['cli_mod']}</td>
                            <td>{$l['cli_nome']}</td>
                            <td>{$l['cli_nasc']}</td>
                            <td><a href="">Excluir</a></td>
                            <td>
                                <form action='form_alterar.php' method='post'>
                                    <input type='hidden' name='cli_mod' value='{$l['cli_mod']}'>
                                    <input type='hidden' name='cli_nome' value='{$l['cli_nome']}'>
                                    <input type='hidden' name='cli_nasc' value='{$l['cli_nasc']}'>
                                    <input> type='submit' value='Alterar>'
                                </form>
                            </td>
                        </tr>";
                   }
                   
                   
                    echo "</table>"
                }else{
                    echo "<h3>Nenhum cadastro encontrado!<h3>";
                }

            }
        ?>
        <form action="form_alterar.php" method="post">
            <input type='hidden' name='cli_cod' value='{$l['cli_cod']}'>
            
        </form>

        </div>
    </body>
</html>