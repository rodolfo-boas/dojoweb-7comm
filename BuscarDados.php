<?php
    function BuscarDadosPessoas(){
        $dados = array();

        $sql = "SELECT * FROM pessoas"; //WHERE `nome` LIKE '$nome'";
        $mysqli = db_connect();
        
        $result = $mysqli->query($sql);

        while ($row = $result->fetch_assoc()) {
            $dados[] = array(
                'id' => $row['id'],
                "nome" => $row['nome'],
                "email" => $row['email'],
                "telefone" => $row['telefone']
            );
        }

        return $dados;
    }

    function BuscarIndiceInteresses(){
        $dados = array();

        $sql = "SELECT * FROM pessoas_interesses"; //WHERE `nome` LIKE '$nome'";
        $mysqli = db_connect();
        
        $result = $mysqli->query($sql);

        while ($row = $result->fetch_assoc()) {
            $dados[] = array(
                "pessoa_id" => $row['pessoa_id'],
                "interesse_id" => $row['interesse_id'],
            );
        }

        return $dados;
    }

    function BuscarTabelaInteresses(){
        $dados = array();

        $sql = "SELECT * FROM interesses"; //WHERE `nome` LIKE '$nome'";
        $mysqli = db_connect();
        
        $result = $mysqli->query($sql);

        while ($row = $result->fetch_assoc()) {
            $dados[] = array(
                "id" => $row['id'],
                "titulo" => $row['titulo'],
            );
        }

        return $dados;
    }

    function BuscaCompleta(){
        $dadosPessoais = BuscarDadosPessoas();
        $indiceInteresses = BuscarIndiceInteresses();
            $dados[] = $dadosPessoais;
            $dados[] = $indiceInteresses;        
        return $dados;
    }
?>