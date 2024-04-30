<?php

    include("conexao.php");
    $id = $_POST['id_avaliacao'];
    $resposta = $_POST['resposta'];

    $sql_inserir = "UPDATE `avaliacoes` SET `resposta`='$resposta' WHERE id_avaliacao=$id";

        if (!mysqli_query($conn, $sql_inserir)) {
            // Se houver um erro ao inserir no banco de dados, exibe uma mensagem de erro
            die("Error: " . mysqli_error($conn));
        }else{
            echo("FeedBack Enviado Com Sucesso");
            header("refresh:3;url=respostas_read.php");
        }


    ;

?>