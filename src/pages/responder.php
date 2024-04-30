<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Painel de Reposta</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
  .central {
    display: flex;
    justify-content: flex-start;
  }
</style>
<header>
  <?php include('navbar.php'); ?>
</header>
<body>
  <div class="container">
    <form action="salvar_resposta.php" method="post">
      <div class="row-5 mt-5">
        <div class="col-8 offset-2">
          <h4>Digite seu feedback :</h4>
          <div class="form-group mt-3">
            <label for="resposta" class="form-label"></label>
            <textarea class="form-control" id="resposta" name="resposta" placeholder="Digite aqui!" rows="5"></textarea>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
          </div>

          <input type="hidden" name="id_avaliacao" value="<?php echo $_GET['id_avaliacao']; ?>">
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-2 offset-5"><button type="submit" class="btn btn-primary col-10 offset-1">Enviar</button></div>
      </div>
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
