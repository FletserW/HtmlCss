<?php
    class ClienteDAO{
        public function inserir($cliente){
            try{
                $sql = "SELECT * FROM clientes WHERE cli_nome LIKE :nome";
                $sql = "INSERT INTO clientes(cli_nome, cli_nasc) VALUES (:nome,:nasc)";
                $p_sql = Conexao::getInstance()->prepare($sql);
                $p_sql->bindValue('nome',$cliente->getCli_nome());
                $p_sql->bindValue('nasc',$cliente->getCli_nasc());

                return $p_sql->execute();
                $lista = $p_sql -> fetchALL(PDO::FETCH_ASSOC);
                return $lista;
            }catch(Exception $e){
                echo "Erro ao cadastrar cliente:".$e->getMessage();
            }
        }
        public function excluir($cod){
            try {
                $sql = "DELETE FROM clientes where cli_cod = :cod";
                $p_sql = Conexao::getInstance()->prepare($sql);
                $p_sql->bindValue('cod', $cod);
                
                return $p_sql-> execute();

            } catch(Exception $e) {
                echo "Erro ao excluir Cleiente".$e->getMessage();
            }
        }
    }
?>