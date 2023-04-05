<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body class="bg-body-secondary">
    <div class="container text-center bg-white">
  
        <div class="row">
          <div class="col bg-primary">
            <nav class="navbar bg-primary navbar-expand-lg" data-bs-theme= "dark">
                <div class="container-fluid">
                  <a class="navbar-brand" href="#">Sistema Web</a>
                  <button class="navbar-toggler"  type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Cadastrar</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="index.php">Consultar</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
          </div>
         
            <div class="mb-3" >
                    <p class="text-start"><br><b>Cadastrar - Agendamento de Potenciais Clientes</b></br></p>
                    <p class="text-start"> Sistema utilizado para agendamentos de serviços.</p>

                    <form method="POST" action="teste.class.php">
                    <p class="text-start">Nome:</p>

                <input type="name" class="form-control" id="nome" name="nome">              
                    <p class="text-start">Telefone:</p>
                    
                    <input type="name" class="form-control" name="telefone" id="telefone" placeholder="(xx)xxxxx-xxxx">

                    <p class="text-start">Origem:</p>
                    <select class="form-select" aria-label="Default select example" id="origem" name="origem">
                        <option selected>Celular</option>
                        <option value="Whatsapp">Whatsapp</option>
                        <option value="Telefone fixo">Telefone fixo</option>
                        <option value="outros">Outros</option>
                      </select>

                      <p class="text-start"> Data do Contato:</p>
                      <input type="date" class="form-control" id="datadecontato" name="datadecontato">
                    
                      <p class="text-start"> Observação:</p>
                      <textarea class="form-control" id="observacao"  name="observacao" rows="3"></textarea>  
                      <input type="submit" class="btn-check" id="btn-check" autocomplete="off">
                      <label class="btn btn-primary" name="cadastrar "for="btn-check">Cadastrar</label>
                  </div>
              </div>
            </div>
          </form>
       </body>
</html>


