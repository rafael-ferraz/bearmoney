<?php

    function connect() {
        $servername = "localhost";
        $username = "bearmoney";
        $password = "Rafa132385b";
        $database = "bearmoney";

        $conn = new mysqli($servername,$username,$password,$database);
		mysqli_set_charset( $conn, 'utf8');

        if( $conn->connect_error ) {
            die("Erro de Conexão com o Banco de Dados: ". $conn->connect_error);
        }    
    return $conn;
    }

    function closeConnection($conn) {
        $conn->close();
    }
?>