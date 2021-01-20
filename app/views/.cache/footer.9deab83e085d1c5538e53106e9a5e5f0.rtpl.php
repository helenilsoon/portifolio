<?php if(!class_exists('Rain\Tpl')){exit;}?><footer><!--footer-->

  <div>
    <div class="footer-header"><!-- footer-header -->
      <div class="newsllater">
        <form>
          <h2>NEWSLATTER</h2>
           <input type="text" name="name" placeholder="Nome" required>
           <input type="email" name="newsllater" placeholder="E-mail" required>
            <button class="btn-newsllater" type="submit">Assinar</button> 
      </form>
      </div>
      </div><!-- end footer-header -->
  </div>
  <div class="footer"> <!-- essa e uma div .footer -->
    
  
    
      <div class="footer-body"> <!-- footer-body -->
        <div class="footer-body-cols">
           <h2>Criação de sites</h2>
          <ul>
            <li><a href="#">Landing Pages</a></li>
            <li><a href="#">Blogs</a></li>
            <li><a href="#">Loja virtual</a></li>
            
          </ul>
          
        </div>
        <div class="footer-body-cols">
           <h2>Desgner grafico</h2>
          <ul>
            <li><a href="#">Logomarca</a></li>
            <li><a href="#">Banner</a></li>
            
            
          </ul>
        </div>
        <div class="footer-body-cols">
        
            
      
      <h2>Faça seu orçamento sem compromisso</h2>
        
      
      
         <div class="btn">
            <a href="/contato" >Orçamento</a>
         </div>
        
      
  



        </div>


      </div><!-- end footer-body -->
      <div class="footer-footer"><!-- footer-footer -->
          <div class="mandeinbrasil">
               helenilson &copy; 2020 made in Brazil
            <img src="https://<?php echo htmlspecialchars( $site, ENT_COMPAT, 'UTF-8', FALSE ); ?>/img/brasil.svg">
         </div>
      </div><!-- end footer-footer  -->
       
    
  </div><!-- end .footer -->

</footer><!--end footer-->
  

  <script>
    var janela = document.getElementById("iframe");
    janela.style.visibility = "hidden";
    var menu = document.getElementsByClassName("container-menu");


    
    var media = window.matchMedia("(max-width:600px)");
    var iconClose = document.querySelector(".close");


    function aparecerMenu() {
      var aparM = document.getElementById("menu");
      aparM.style = "visibility:visible;";
      if (media.matches) {
        iconClose.style = "visibility:visible;";
      }
    }


    function fecharMenu() {

      var closeM = document.getElementById("menu");
      closeM.style = "visibility:hidden;";
      iconClose.style = "visibility:hidden;";

    }


  </script>
</body>

</html>