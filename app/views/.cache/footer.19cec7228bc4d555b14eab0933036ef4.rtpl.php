<?php if(!class_exists('Rain\Tpl')){exit;}?><footer><!--footer-->

  </footer><!--end footer-->
  <div class="mandeinbrasil">
    helenilson &copy; 2020 made in Brazil
    <img src="img/brasil.svg">
  </div>

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