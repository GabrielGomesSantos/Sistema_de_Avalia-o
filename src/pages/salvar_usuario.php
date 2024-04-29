<?php
    include('conexao.php');
    session_start();

    // Recebendo os dados do formulário
    $nome = $_POST['name'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $CPF = $_POST['CPF'];
    $_SESSION['cpf'] = $CPF;

    // Consulta para verificar se já existe um cliente com o mesmo CPF
    $sql_verificar = "SELECT * FROM `cliente` WHERE cpf = $CPF";
    $result_verificar = mysqli_query($conn, $sql_verificar);
    // Verifica se o CPF já existe no banco de dados

    if(mysqli_num_rows($result_verificar) > 0){
        // Se já existe, redireciona de volta para o formulário com uma mensagem de erro
        header('Location: form.php');
        exit; // Encerra o script para evitar a execução do restante do código
    } else {
        // Se não existe, insere o novo cliente no banco de dados
        $sql_inserir = "INSERT INTO `cliente` (`nome`, `e-mail`, `telefone`, `cpf`) VALUES ('$nome','$email','$telefone','$CPF')";

        if (!mysqli_query($conn, $sql_inserir)) {
            // Se houver um erro ao inserir no banco de dados, exibe uma mensagem de erro
            die("Error: " . mysqli_error($conn));
        }
        // Redireciona de volta para o formulário após a inserção bem-sucedida
        header('Location: form.php');
        exit; // Encerra o script para evitar a execução do restante do código
    }
?>
