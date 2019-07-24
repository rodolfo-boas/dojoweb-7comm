<?php
    function BuscarDadosPessoas(){
        $dados = array();

        $sql = "SELECT * FROM pessoas"; //WHERE `nome` LIKE '$nome'";
        $mysqli = db_connect();
        
        $result = $mysqli->query($sql);

        while ($row = $result->fetch_assoc()) {
            $dados[] = array(
                "nome" => $row['nome'],
                "email" => $row['email'],
                "telefone" => $row['telefone']
            );
        }

        return $dados;
    }

    function BuscarDadosInteresses(){
        $dados = array();

        $sql = "SELECT * FROM pessoas_interesses"; //WHERE `nome` LIKE '$nome'";
        $mysqli = db_connect();
        
        $result = $mysqli->query($sql);

        while ($row = $result->fetch_assoc()) {
            $dados[] = array(
                "pessoas_id" => $row['pessoas_id'],
                "interesses_id" => $row['interesses_id'],
            );
        }

        return $dados;
    }
?>