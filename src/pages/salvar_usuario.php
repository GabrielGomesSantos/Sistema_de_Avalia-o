<?php
    include('conexao.php');

    $nome = $_POST['name'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $CPF = $_POST['CPF'];

    $sql = "SELECT * FROM `cliente` WHERE 'cpf' LIKE '$CPF'";
    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) != 0){
        header('Location: form.php');
    }else{
        $sql = "INSERT INTO `cliente` (`nome`, `e-mail`, `telefone`, `cpf`) VALUES ('$nome','$email','$telefone','$CPF')";

        if (!mysqli_query($conn,$sql)) {
            die("Error: ".mysqli_error($conn));
        }
        header('Location: form.php');
    }
?>