<!doctype html>
<html lang="pt-br">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

  <title>Login | FelizLândia</title>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="css/style.css">

  <!-- icones fontawesome -->
  <script src="https://kit.fontawesome.com/8a90f3aa8c.js" crossorigin="anonymous"></script>

  <!--icon para aparecer na aba do navegador, podemos trocar a imagem por uma maior-->
  <link rel="icon" href="img/favicon.ico" type="image/x-icon"/>

  <!-- modifica a fonte do site -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400&display=swap" rel="stylesheet">
  <!-- <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&display=swap" rel="stylesheet"> -->

</head>
<body class="login">
    <div id="overlay"></div>
    <div class="container">  
            <div class="row login-top">
                <div class="col-md-auto center login-header">
                    <img class="login-logo" alt="Logotipo FelizLândia Park" src="img/logo.png" onclick="window.open('index.html')"><br/>
                    <h2>Bem-vindo à Central Administrativa</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-md-auto center login-box">
                    <div class="alert alert-info">
                        Por favor, para acessar o sistema insira seu e-mail e senha.
                    </div>
                    <form class="form-horizontal" action="view-adm-home.html" method="post">
                        <div class="form-group input-element">
                            <span class="input-icon"><i class="fas fa-at"></i></span>
                            <input type="email" class="form-control" id="inputEmail" placeholder="E-mail">
                        </div>
                        <div class="form-group input-element">
                            <span class="input-icon"><i class="fas fa-lock"></i></span>
                            <input type="password" class="form-control" id="inputPassword" placeholder="Senha">
                        </div>
                        <div class="form-group center col-md-5">
                            <button type="submit" class="btn btn-primary">Entrar</button>
                        </div>
                    </form>
                </div>
        </div>
    </div>
</body>
</html>