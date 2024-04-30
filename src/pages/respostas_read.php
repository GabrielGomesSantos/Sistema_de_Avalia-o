<?php

  include('conexao.php');
  session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Painel de Avaliações</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <header>
    <?php include('navbar.php') ?>
  </header>


  
  <div class="container"><br><br>
    <h3 class="offset-5 mb-4"><u>RESULTADOS:</u></h3><br>
    <div class="row">

        <?php

        $sql_verificar = "SELECT * FROM `respostas`";
        $result = mysqli_query($conn, $sql_verificar);

        if (mysqli_num_rows($result) > 0) {
            // Organizando os dados por id_avaliacao
            $dados_por_avaliacao = [];
            while($row = mysqli_fetch_assoc($result)) {
                $id_avaliacao = $row['id_avaliacao'];
                $dados_por_avaliacao[$id_avaliacao][] = $row;
            }

            // Exibindo os dados em uma tabela HTML
            foreach ($dados_por_avaliacao as $id_avaliacao => $dados_avaliacao) {
                echo '<div class="col-4">';
                echo '<div class="card mb-3" style="width: 18rem;">';
                echo '<div class="card-body">';
                echo '<h5 class="card-title">Avaliação ID: ' . $id_avaliacao . '</h5>';
                echo '<p class="card-text"></p>';
                echo '<p class="d-inline-flex gap-1">';
                echo '<button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#avaliacao-' . $id_avaliacao . '" aria-expanded="false" aria-controls="collapseExample">';
                echo 'Mostrar Respostas';
                echo '</button>';
                echo '</p>';
                echo '<div class="collapse mb-2" id="avaliacao-' . $id_avaliacao . '">';
                echo '<div class="card card-body">';
                foreach ($dados_avaliacao as $dado) {
                    echo '<h6>Pergunta ' . $dado['id_pergunta'] . ':</h6>';
                    echo '<p>' . $dado['resposta'] . '</p>';
                }
                echo '<a href="responder.php?id_avaliacao=' . $id_avaliacao . '" class="btn btn-success">Responder</a>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
        }

        ?>

    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>