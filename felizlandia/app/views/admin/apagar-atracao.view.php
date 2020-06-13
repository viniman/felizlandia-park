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
  <link rel="stylesheet" type="text/css" href="../../../public/css/style.css">

<!--JAVASCRIPT-->
<script type="text/javascript" src="../../../public/js/script.js"></script>




  <!--icon para aparecer na aba do navegador, podemos trocar a imagem por uma maior-->
  <link rel="icon" href="img/favicon.ico" type="image/x-icon"/>

  <!-- modifica a fonte do site -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400&display=swap" rel="stylesheet">
  <!-- <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&display=swap" rel="stylesheet"> -->

</head><!--"background-color:  rgb(241, 173, 173);"-->
<body style="background-image: url(../../../public/img/bg3.jpg);background-size: cover;
background-repeat: no-repeat;
background-attachment: fixed;">

<!--PARALAX
<div class="atracoes-paralax1">
     <br><br><br>
     <br><br>
    
    </div>
  

FIM PARALAX-->

  <nav id="navbar" class="navbar navbar-expand-md navbar-dark fundofalso sticky" > <!-- bg-transparent-->
    <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
      <ul class="navbar-nav mr-auto ">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#">Atrações</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#">Categorias</a>
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
          <a class="nav-link" href="#">Usuários</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#">Logout</a>
        </li>
      </ul>
    </div>
  </nav>
     
<!--CONTEÚDO PRINCIPAL-->

<div class="apagar-atracao">
  <div class="container" >
    <div class="row mb-4">
            <div class="col d-flex justify-content-center">
              <h1>Apagar atração</h1>
            </div>
    </div>
    <div class="row">
        <div class="col d-flex justify-content-center">
           <form class="col-md-6" >
               <?php foreach ($atracao_exclusao as $atracao) : ?>
                <fieldset disabled>

              <div class="form-group">
                <label for="exampleFormControlInput1">Nome</label>
                <input type="text" name="nome" value="<?= $atracao->nome ?>" class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Descrição</label>
              <textarea class="form-control" name="descricao" id="exampleFormControlTextarea1" rows="3">
              <?= $atracao->descricao ?>
              </textarea>
            </div>
            <div class="form-group">
                  <label for="exampleFormControlSelect1">Categoria</label>
                  <select class="form-control" name="categoria" id="exampleFormControlSelect1">
                    <option><?= $atracao->categoria?></option>
                    <option>vem da base de dados</option>
                    <option>vem da base de dados</option>
                    <option>vem da base de dados</option>
                    <option>vem da base de dados</option>
                  </select>
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Valor</label>
              <input type="text" name="valor" value="<?= $atracao->valor ?>"  class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="form-group">
              <label for="exampleFormControlFile1" >Foto</label>
              <div class="imagem-db">
              <img 
                src="../../../public/img/atracoes-img/<?= $atracao->foto ?>" 
                />              </div>
             
            </div>    
            </fieldset>
  
            <?php endforeach ;?>

              <div class="form-group d-flex justify-content-between">
                <a class="d-flex justify-content-center" href="/atracoes/adm"><button type="button" class="btn btn-primary">&#10094;Voltar</button></a>          


                <button class="btn btn-danger" type="button" id="dropdownMenuButton"data-toggle="modal" data-target="#exampleModal">
                  Apagar
                  </button>
           <!--colocar confirmação-->
           
            </div>
            
            </form>

          </div><!--fecha div coluna-->
       </div>
  </div>

</div>
            
          
          
         <!--MODAL-->
             
  <form method="POST" action="/atracoes/excluir">
  <div class="modal modal-exclusao fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Deseja mesmo apagar essa atração?</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
              <img src="img/lixeira.png" class="img-modal">
              <!--<img src="img/errado.png" class="img-modal">  Caso algum erro seja detectado-->
          </div>
          <div class="modal-footer">
          <input type="hidden" name="id" value=<?= $atracao->id ?> >
          <input type="hidden" name="foto_salva" value=<?= $atracao->foto ?> >


              <button type="submit" class="btn btn-danger" value ="delete" name="delete">apagar</button>
          </div>
        </div>
      </div>
    </form>
            
      
  



 

  





</body>
</html>