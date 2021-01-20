<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="header-home"><!--cabeçalho do body-->
     <div class="header-chamada-home">
        <div class="boasVindas">
        <div class="titulo">Precisa construir um site? </div>
          <a class="sim" href="/contato">Sim</a>
      </div>
    </div>   
</div><!--end cabeçalho do body-->

  <div class="container"><!--container-->
    <iframe id="iframe" name="pagina" src=""></iframe>
    <h1> Principais projetos</h1>
    <main id="janela"><!--main-->
      <!-- webuild-->

      <?php $counter1=-1;  if( isset($sites) && ( is_array($sites) || $sites instanceof Traversable ) && sizeof($sites) ) foreach( $sites as $key1 => $value1 ){ $counter1++; ?>

      <!--<?php echo htmlspecialchars( $value1["nome"], ENT_COMPAT, 'UTF-8', FALSE ); ?>-->
      <div class="container-img" id="container-img">
        <div class='borda-img'>
          <a href='<?php echo htmlspecialchars( $value1["url"], ENT_COMPAT, 'UTF-8', FALSE ); ?>' >
            <img src='img/<?php echo htmlspecialchars( $value1["icon"], ENT_COMPAT, 'UTF-8', FALSE ); ?>'>
          </a>
        </div>
        <div class="nome_projeto">
          <p><?php echo htmlspecialchars( $value1["nome"], ENT_COMPAT, 'UTF-8', FALSE ); ?></p>
        </div>
      </div>
      <?php } ?>


     
    </main><!--end main-->
  </div><!--end container-->
