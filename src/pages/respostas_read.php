<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>

  <header>
    <?php include('navbar.php') ?>
  </header>
  <body>
  
    <div class="container">
        <div class="row rounded">
          <div class="col-3 d-flex justify-content-center offset-4 ">
            <h3 class="offset-5 mb-4 mt-5 rounded p-2" style="background-color: rgba(122, 122, 122, 0.368);" > RESULTADOS:  </h3>
          </div>
        </div>
        <div class="row">
            
            <div class="col-4" >
                <div class="card mb-3 offset-2" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Formulario de nome</h5>
                        <p class="card-text"></p>
                        <p class="d-inline-flex gap-1">
                       
                        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#idcliente" aria-expanded="false" aria-controls="collapseExample">
                            mostrar respostas
                        </button>
                        </p>
                        <div class="collapse mb-2 " id="idcliente">
                            <div class="card card-body">
                                <h6>pergunta 1)</h6>
                                <p>resposta_1_aqui</p>
                                <h6>pergunta 2)</h6>
                                <p>resposta_2_aqui</p>
                                <h6>pergunta 3)</h6>
                                <p>resposta_3_aqui</p>
                                <h6>pergunta 4)</h6>
                                <p>resposta_4_aqui</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4" >
                <div class="card mb-3 offset-2" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Formulario de nome</h5>
                        <p class="card-text"></p>
                        <p class="d-inline-flex gap-1">
                       
                        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#idcliente" aria-expanded="false" aria-controls="collapseExample">
                            mostrar respostas
                        </button>
                        </p>
                        <div class="collapse mb-2" id="idcliente">
                            <div class="card card-body">
                                <h6>pergunta 1)</h6>
                                <p>resposta_1_aqui</p>
                                <h6>pergunta 2)</h6>
                                <p>resposta_2_aqui</p>
                                <h6>pergunta 3)</h6>
                                <p>resposta_3_aqui</p>
                                <h6>pergunta 4)</h6>
                                <p>resposta_4_aqui</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4" >
                <div class="card mb-3 offset-2" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Formulario de nome</h5>
                        <p class="card-text"></p>
                        <p class="d-inline-flex gap-1">
                       
                        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#idcliente" aria-expanded="false" aria-controls="collapseExample">
                            mostrar respostas
                        </button>
                        </p>
                        <div class="collapse mb-2" id="idcliente">
                            <div class="card card-body">
                                <h6>pergunta 1)</h6>
                                <p>resposta_1_aqui</p>
                                <h6>pergunta 2)</h6>
                                <p>resposta_2_aqui</p>
                                <h6>pergunta 3)</h6>
                                <p>resposta_3_aqui</p>
                                <h6>pergunta 4)</h6>
                                <p>resposta_4_aqui</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
          
           
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>