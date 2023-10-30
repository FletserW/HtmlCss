<?php
    require_once("../control/clientesDAO.class.php");
    require_once("../model/clientes.class.php");
    require_once("../model/conexao.class.php");
?>
<!DOCTYPE html>
    <html>
        <head>
            <title> Sistema Cadastro</title>
        </head>
        <body style="font-size: 150%">
            <div style="width: 600px; margin: 0 auto">
                <fieldset style="width: 600px">
                    <label> Sistema Cadastro</label><br><br>
                    <form method="post">
                        <label>Nome: </label>
                        <input type="text" name="nome"><br><br>
                        <label>Data de Nascimento</label>
                        <input type="text" name="data"><br><br>
                        <input type="submit" value="Cadastrar"><br><br>
                    </form>
                    <a href="index.html">Voltar</a><br><br>
                </fieldset>
            </div>
            <?php
                if($_SERVER['REQUEST_METHOD'] == 'POST'){
                    $cliente = new Cliente();

                    $cliente->setCli_nome($_POST['nome']);
                    $cliente->setCli_nasc($_POST['data']);

                    $dao = new ClienteDAO();
                    if($dao->inserir($Cliente)!= NULL){
                        echo "Cadastro efetuado com sucesso!";
                    }
                }
            ?>
        </body>
    </html>
