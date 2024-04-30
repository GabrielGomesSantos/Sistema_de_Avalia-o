<?php
    include('conexao.php');
    session_start();

    $prg01 = $_POST['prazo'];
    $prg02 = $_POST['cordial'];
    $prg03 = $_POST['satisfacao'];
    $prg04 = $_POST['retorno'];


    $sql_verificar = "SELECT * FROM `cliente` WHERE cpf = {$_SESSION['cpf']}";
    $result = mysqli_query($conn, $sql_verificar);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            $_SESSION['id'] = $row['Id_cliente'];
        }
      }

      $sql_avaliacao = "INSERT INTO `avaliacoes` (`id_cliente`) VALUES ('{$_SESSION['id']}')";

      if (!mysqli_query($conn, $sql_avaliacao)) {
        echo "Erro ao inserir avaliação: " . mysqli_error($conn);
    }

    $sql_av = "SELECT id_avaliacao FROM `avaliacoes` WHERE id_cliente = {$_SESSION['id']}";
    $result = mysqli_query($conn, $sql_av);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            $_SESSION['ID_AV'] = $row['id_avaliacao'];
        }
    }

    $sql_resposta_1 = "INSERT INTO `respostas`(`id_cliente`, `id_pergunta`, `id_avaliacao`, `resposta`) VALUES ('{$_SESSION['id']}','1','{$_SESSION['ID_AV']}','$prg01')";
    $sql_resposta_2 = "INSERT INTO `respostas`(`id_cliente`, `id_pergunta`, `id_avaliacao`, `resposta`) VALUES ('{$_SESSION['id']}','2','{$_SESSION['ID_AV']}','$prg02')";
    $sql_resposta_3 = "INSERT INTO `respostas`(`id_cliente`, `id_pergunta`, `id_avaliacao`, `resposta`) VALUES ('{$_SESSION['id']}','3','{$_SESSION['ID_AV']}','$prg03')";
    $sql_resposta_4 = "INSERT INTO `respostas`(`id_cliente`, `id_pergunta`, `id_avaliacao`, `resposta`) VALUES ('{$_SESSION['id']}','4','{$_SESSION['ID_AV']}','$prg04')";

    mysqli_query($conn, $sql_resposta_1);
    mysqli_query($conn, $sql_resposta_2);
    mysqli_query($conn, $sql_resposta_3);
    mysqli_query($conn, $sql_resposta_4);




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Obrigado pelo feedback</h1>
</body>
</html>