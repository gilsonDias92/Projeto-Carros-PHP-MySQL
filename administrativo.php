<!doctype html>
<html lang="en">
<head>
    <title>Administrativo</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
    integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style type="text/css">
        .divFooter {
            clear: both;}

        tbody .linhatb:hover{
            background-color: red;
        }



    </style>

</head>
<body>
  <body>
    <!--NAVBAR-->
    <div class="header">
      <div class="wrap">
         <div class="header-bot">
            <div class="logo">
               <a href="index.html">
                  <img src="images/logo.png" alt=""><br>
                  <span class="text-light font-weight-bold">PAINEL DE CONTROLE</span>
              </a>
          </div>
          <div class="cart">
           <div class="menu-main">
              <ul class="dc_css3_menu">
                <li>
                    <a href="./">Home</a>
                </li>
                <li class="">
                    <a href="./administrativo.php?menu=cadastrar">Cadastrar</a>
                </li>
                <li>
                    <a href="./administrativo.php?menu=listar">Exibir Todos</a>
                </li>
                <li>
                    <a href="www.google.com.br">Sair</a>
                </li>
            </ul>
            <div class="clear"></div>
        </div>
    </div>
    <div class="clear"></div>
</div>
</div>
</div>

<?php 

$menu = @$_GET['menu'];

switch ($menu) {
   case 'incluir':
        require_once './incluir.Carro.php';
        break;
   case 'cadastrar':
        require_once './cadastrar.php';
        break;
    case 'listar':
        require_once './listaCarros.php';
        break;
   default:
   break;
}
?>


<!--SECTIONS-->
<div class="container">


</div>  
<!--FOOTER-->                  
<footer class="page-footer font-small divFooter bg-dark mt-2">
  <div class="footer-copyright text-danger font-weight-bold text-center py-4">© 2019 Copyright:
  </div>
</footer>  
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
</body>
</html>



