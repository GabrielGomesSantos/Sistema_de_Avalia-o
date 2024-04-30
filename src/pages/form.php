<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
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

            <form action="salvar_form.php" method="post">
                <div class="row mt-5">


                    <h4>1) O serviço foi concluído no prazo?</h4>
                    <div class="form-check form-check-inline mt-2">
                        <input class="form-check-input" type="radio" name="prazo" id="inlineRadio1" value="0" require>
                        <label class="form-check-label" for="prazo">Sim</label>
                    </div>
                    <div class="form-check form-check-inline mt-2">
                      <input class="form-check-input" type="radio" name="prazo" id="inlineRadio2" value="1" require>
                      <label class="form-check-label" for="prazo">Não</label>
                    </div>


                </div>

                <div class="row mt-5">

                    <h4>2) O prestador de serviço foi cordial no atendimento?</h4>
                    <div class="form-check form-check-inline mt-2">
                        <input class="form-check-input" type="radio" name="cordial" id="inlineRadio1" value="0" require>
                        <label class="form-check-label" for="cordial">Sim</label>
                    </div>
                    <div class="form-check form-check-inline mt-2">
                      <input class="form-check-input" type="radio" name="cordial" id="inlineRadio2" value="1">
                      <label class="form-check-label" for="cordial">Não</label>
                    </div>

                </div>

                <div class="row mt-5">

                    <h4>3) Qual o grau de satisfação com a qualidade do serviço?</h4>
                    <div class="form-check form-check-inline mt-2">
                        <input class="form-check-input" type="radio" name="satisfacao" id="inlineRadio1" value="2" >
                        <label class="form-check-label" for="satisfacao">Ruim</label>
                    </div>
                    <div class="form-check form-check-inline mt-2">
                      <input class="form-check-input" type="radio" name="satisfacao" id="inlineRadio2" value="3">
                      <label class="form-check-label" for="satisfacao">Bom</label>
                    </div>
                    <div class="form-check form-check-inline mt-2">
                        <input class="form-check-input" type="radio" name="satisfacao" id="inlineRadio1" value="4">
                        <label class="form-check-label" for="satisfacao">Muito Bom</label>
                    </div>
                    <div class="form-check form-check-inline mt-2">
                      <input class="form-check-input" type="radio" name="satisfacao" id="inlineRadio2" value="5">
                      <label class="form-check-label" for="satisfacao">Excelente</label>
                    </div>
                </div>
                <div class="row mt-5">

                    <h4>4) Qual a possibilidade de recomendar nossos serviços?</h4>
                    <div class="form-check form-check-inline mt-2">
                        <input class="form-check-input" type="radio" name="retorno" id="inlineRadio1" value="6">
                        <label class="form-check-label" for="retorno">Nunca</label>
                    </div>
                    <div class="form-check form-check-inline mt-2">
                      <input class="form-check-input" type="radio" name="retorno" id="inlineRadio2" value="7">
                      <label class="form-check-label" for="retorno">Talvez</label>
                    </div>
                    <div class="form-check form-check-inline mt-2">
                        <input class="form-check-input" type="radio" name="retorno" id="inlineRadio1" value="8">
                        <label class="form-check-label" for="retorno">Sempre</label>
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