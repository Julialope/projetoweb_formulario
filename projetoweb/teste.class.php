<?php
require_once("pessoa.class.php");
$pessoa = new Pessoa();

$pessoa->setNome($_POST['nome']);
$pessoa->setTelefone($_POST['telefone']);  
$pessoa->setOrigem($_POST['origem']); 
$pessoa->setDatadecontato($_POST['datadecontato']); 
$pessoa->setObservacao($_POST['observacao']);       

?>
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
         
          
          <label for="formGroupExampleInput" class="form-label"><br><b>Consultar</b></br>
            <table width=50% border=0 cellpadding=10 cellpadding=1 align=center>
                <tr align=center bgcolor=#007BFF>
              <th width=8%>Nome</th>
              <th width=8%>Telefone</th>
              <th width=8%>Origem</th>
              <th width=8%>Contato</th>
              <th width=8%>Observação</th>
              <th width=8%>Ação</th>
        </tr>
        <tr align=center bgcolor=white>
              <th width=8%><?php echo $pessoa->getNome();?></th>
              <th width=8%><?php echo $pessoa->getTelefone();?></th>
              <th width=8%><?php echo $pessoa->getOrigem();?></th>
              <th width=8%><?php echo $pessoa->getDatadecontato();?></th>
              <th width=8%><?php echo $pessoa->getObervacao();?></th>

            </tr>
</table>
</div>
</div>
</body>
</html>
           
