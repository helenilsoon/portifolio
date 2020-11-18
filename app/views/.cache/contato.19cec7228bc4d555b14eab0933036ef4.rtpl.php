<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="header"><!--cabeçalho do body-->
     <div class="header-chamada">
        <div class="boasVindas">
           <div class="titulo">Contato</div>    

      </div>
     </div>
  
</div><!--end cabeçalho do body-->


<div class="container"><!--Main-->

	
    
    <h1> Contate-nós</h1>
    <!--<main id="janela">-->

    	<div class="formulario">
		
	</div>
      
      <h2>Faça seu orçamento sem compromisso</h2><br>
      <form action="/contato" method="POST" >
      	<label for="name">Nome:</label><br>
      	<input type="text" id="name" name="name"><br>
      	
      	<label for="email">Email p/ contato:</label><br>      	
      	<input type="email" id="email" name="email"><br>

		<label for="whatsApp">whatsApp p/ contato:</label><br>      	
      	<input type="whatsApp" id="whatsApp" name="whatsApp"><br>


      	<label for="">Faça uma breve descrição do site que voçê deseja</label><br>
      	<textarea cols="40" rows="5" name="descrition"></textarea><br>
      	<input type="submit" name="btn_enviar"value="Enviar"><br>
      </form>


   <!-- </main>-->


  </div><!--end Main-->