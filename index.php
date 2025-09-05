<?php

include_once './conexao.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="padaria.css">

  </head>
  <body>
    <header>
        <div class="cabeca">
            <h1 class="MP">MASSA PURA</h1>
        <ul class="nav justify-content-center">
            <li class="nav-item">
              <a class="nav-link" href="#">Ínicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Salgados</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Doces</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Sobre Nós</a>
              </li>            
          </ul>
          <input class="barra" type="text" placeholder="Pesquise...">
          <button class="botao"></button>
        </div>
    </header>
    <body class="fundo">

        <div class="caixa">
            <a href="./produto.html">
                <img class="img1"  src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSXVYfbik--ntEwQPlyw8Yn4OWnuURS_3nD2A&s" alt="">
                <h2 class="nome">Brownie com Morango</h2>
                <h2 class="preco">R$10,00</h2>
            </a>
        </div>  
    </body>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
  </body>
</html>