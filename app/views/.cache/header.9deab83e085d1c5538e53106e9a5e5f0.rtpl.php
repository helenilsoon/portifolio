<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <title>Bem vindo | Portifolio helenilson</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="https://<?php echo htmlspecialchars( $site, ENT_COMPAT, 'UTF-8', FALSE ); ?>/style.css">
  <link rel="shortcut icon" href="https://<?php echo htmlspecialchars( $site, ENT_COMPAT, 'UTF-8', FALSE ); ?>/img/favicon_site.png" type="image/png">
  <meta name="author" content="Helenilson oliveira">
</head>

<body>
  <header><!--menu-->
    <nav> <!-- nav  -->
      <div class="container-menu"><!-- container-menu -->
        <div class="brand"><!-- brand -->

            <a href="/"> HELENILSON </a>

        </div> <!-- end brand -->
        
          <i class="icon-menu" onclick="aparecerMenu()"></i>

        <div id="menu"><!-- menu -->

          <spam class="close" onclick="fecharMenu()">x</spam>
          <a href="/">Home</a>          
          <a href="/contato">Contato</a>
          <a href="/sobre">Sobre</a>
          

          
        </div><!-- end menu -->
      </div><!-- end container-menu -->
    </nav><!-- end nav  -->
  </header><!--end menu-->
