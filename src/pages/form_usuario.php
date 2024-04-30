<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bem-Vindo</title>
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

            <form action="src/pages/salvar_usuario.php" method="post">
                <div class="row mt-5">

                <div class="col-4 offset-4">
                    <h4>1) Qual o seu nome?</h4>
                    <div class="form-group">
                       <input type="text" class="form-control" id="name" placeholder="Insira seu nome" name="name" required>
                       <div class="valid-feedback">Valid.</div>
                       <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                </div>


                </div>

                <div class="row mt-5">

                    <div class="col-4 offset-4">
                        <h4>2) Qual o seu e-mail?</h4>
                        <div class="form-group">
                           <input type="text" class="form-control" id="email" placeholder="Insira seu email" name="email" required>
                           <div class="valid-feedback">Valid.</div>
                           <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                    </div>


                </div>

                <div class="row mt-5">

                <div class="col-4 offset-4">
                    <h4>3) Qual o seu telefone?</h4>
                    <div class="form-group">
                       <input type="text" class="form-control" id="telefone" placeholder="Insira seu telefone" name="telefone" required>
                       <div class="valid-feedback">Valid.</div>
                       <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                </div>
    
                </div>
                <div class="row mt-5">

                <div class="col-4 offset-4">
                    <h4>4) Qual o seu CPF?</h4>
                    <div class="form-group">
                       <input type="text" class="form-control" id="CPF" placeholder="Insira seu cpf" name="CPF" required>
                       <div class="valid-feedback">Valid.</div>
                       <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
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