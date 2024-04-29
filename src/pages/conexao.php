<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db_avaliacoes";

    // Cria a conexão
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Verifica a conexão
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    mysqli_set_charset($conn, "utf8");

?>