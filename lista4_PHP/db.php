<?php

    function conectarBD(){

        $sHost = '127.0.0.1';
        $sPort = '5432';
        $sDbName = 'jovensTalentos';
        $sUser = 'postgres';
        $sPassword = 'admin';

        $sConexao = "host = $sHost
                    port = $sPort
                    dbname = $sDbName
                    user = $sUser
                    password = $sPassword";

        $conexao = pg_connect($sConexao);

        if (!$conexao) {
            die("Erro na conexão com o banco de dados.");
        }
        return $conexao;

    }
