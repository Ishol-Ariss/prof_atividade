<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css">
  </head>
  <body>
    <header>
        <div class="row">
            <div class="col-12">
                <button type="button" class="btn btn-light btn-lg">Home</button>
            </div>
        </div>
    </header>

    <main>
        <div class="row">
            <div class="col-2" id="navBar">
                <nav class="navbar bg-light" data-bs-toggle="modal" data-bs-target="#turma">
                    <div class="container-fluid">
                    <a class="navbar-brand" href="#" >Cadastrar Turma</a>
                    </div>
                </nav>

                <nav class="navbar bg-light" data-bs-toggle="modal" data-bs-target="#atividade">
                    <div class="container-fluid">
                    <a class="navbar-brand" href="#" >Cadastrar Atividade</a>
                    </div>
                </nav>

                <nav class="navbar bg-light">
                    <div class="container-fluid">
                    <a class="navbar-brand" href="#">Vizualizar</a>
                    </div>
                </nav>
            </div>

            <div class="col-10">
                <div id="tabela">
                    
                </div>
            </div>
        </div>

        <div class="modal" tabindex="-1" id="atividade">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Cadastrar Atividade</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                    <div class="modal-body">
                        <form>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nome / Descrição</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Único?</label>
                            </div>
                            <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Cadastrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal" tabindex="-1" id="turma">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Cadastrar Turma</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                    <div class="modal-body">
                        <form>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nome / Descrição</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Cadastrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
  </body>
</html>