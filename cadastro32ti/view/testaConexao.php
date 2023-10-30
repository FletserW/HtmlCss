<?php
    require_once("../model/conexao.class.php");

    if ($p_sql = conexao :: getInstance()){
        echo "conexao estabelecida!";
    }
?>