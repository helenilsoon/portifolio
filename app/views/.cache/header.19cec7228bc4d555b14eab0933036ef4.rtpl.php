<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <title>Bem vindo | Portifolio helenilson</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="shortcut icon" href="img/favicon_site.png" type="image/png">
  <meta name="author" content="Helenilson oliveira">
</head>

<body>
  <header><!--menu-->
    <nav>
      <div class="container-menu">
        <div class="brand"><a href="home.html"> HELENILSON </a>
        </div>
        <i class="icon-menu" onclick="aparecerMenu()"></i>

        <div id="menu">

          <spam class="close" onclick="fecharMenu()">x</spam>
          <a href="/">Home</a>
          <a href="/sobre">Sobre</a>
          <a href="/contato">Contato</a>
          
        </div>
      </div>
    </nav>
  </header><!--end menu-->
