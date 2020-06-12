<!doctype html>
<html lang="pt-br">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

  <title>FelizLândia</title>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="css/style.css">

  <!--JAVASCRIPT-->
  <script type="text/javascript" src="js/script.js"></script>






  <!--icon para aparecer na aba do navegador, podemos trocar a imagem por uma maior-->
  <link rel="icon" href="img/favicon.ico" type="image/x-icon"/>

  <!-- modifica a fonte do site -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400&display=swap" rel="stylesheet">
  <!-- <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&display=swap" rel="stylesheet"> -->

</head>
<body class="adm-users">
  <nav id="navbar" class="navbar navbar-expand-md navbar-dark fundofalso sticky" > <!-- bg-transparent-->
    <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
      <ul class="navbar-nav mr-auto ">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#">Quem somos</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#">Atrações</a>
            </li>
      </ul>
    </div>
    <div class="mx-auto order-0">
      <a class="navbar-brand mx-auto" href="#"><img src="img/logo.png" class="logo"></a>
      <span class="TogglerPaginaAtual">Atrações</span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
          <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Contato</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#">Logout</a>
        </li>
      </ul>
    </div>
  </nav>
     
<!--CONTEÚDO PRINCIPAL-->

<div class="container-admin-user">
  <div class="container" >
    
    <div class="row mb-4">
      <div class="col d-flex justify-content-center">
        <h1>Visualizar Usuário</h1>
      </div>
    </div>
    <div class="row">

        <div class="col d-flex justify-content-center">
          <form class="col-md-8">

            <fieldset disabled>
              <div class="form-group">
                <label for="exampleFormControlInput1">Nome</label>
                <input type="text" name="nome" value="Amendobobo de Oliveira Orninto" class="form-control" id="exampleFormControlInput1">
              </div>
              <div class="form-group mb-4">
                <label for="exampleFormControlInput1">Email</label>
                <input type="email" name="nome" value="ornintolangorinco@mail.com" class="form-control" id="exampleFormControlInput1">
              </div>       
            </fieldset>

            <div class="form-inline">
              <div class="form-inline">
                <div class="form-group d-flex justify-content-between my-1 mr-2">
                  <a class="d-flex justify-content-center" href="edit-user.html"><button type="button" class="btn btn-info">&#10094;Editar Usuário</button></a>
                </div>
                <div class="form-group d-flex justify-content-between my-1 mr-2">
                  <a class="d-flex justify-content-center" href="change-password.html"><button type="button" class="btn btn-warning">&#10094;Modificar Senha</button></a>
                </div>
              </div> 
              <div class="form-inline">
                <div class="form-group d-flex justify-content-between my-1 mr-2">
                  <a class="d-flex justify-content-center" href="" data-toggle="modal" data-target="#exampleModal"><button type="button" class="btn btn-danger">&#10094;Excluir Usuário</button></a>
                </div>
              
                <div class="form-group d-flex justify-content-between my-1">
                  <a class="d-flex justify-content-center" href="list-users.html"><button type="button" class="btn btn-primary">&#10094;Voltar</button></a>
                </div>
              </div>
            </div>
          </form>



        </div><!--fecha div coluna-->
    </div>
  </div>

</div>
            
          
          
        
<form action="list-users.html">
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Deseja mesmo excluir este usuário?</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <img src="img/trash.png" class="img-modal">
            <!--<img src="img/errado.png" class="img-modal">  Caso algum erro seja detectado-->
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-danger" type="submit" value="delete" name="delete">Confirmar Exclusão</button>
        </div>
      </div>
    </div>

  </div>            
</form>
      
  



 

  





</body>
</html>