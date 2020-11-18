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

  <div class="form-contato">	
      <div class="header-form">
        <h2>Faça seu orçamento sem compromisso</h2>
      </div>
      

      <form action="/contato" method="POST" >

          <?php if( isset($retornoEmail) ){ ?>

                    <div class="msg-sucess"><?php echo htmlspecialchars( $retornoEmail, ENT_COMPAT, 'UTF-8', FALSE ); ?>  </div>          
                <?php } ?>

              
         <?php if( isset($retornoEmailErro) ){ ?>

                    <div class="msg-erro"> <?php echo htmlspecialchars( $retornoEmailErro, ENT_COMPAT, 'UTF-8', FALSE ); ?> </div>
             


                <?php } ?>


          
          <div class="form-campo">

              <label for="name">Nome:</label><br>
              <input type="text" id="name" name="name" placeholder="Nome" required>
            
          </div>
          <div class="form-campo">

                <label for="email">Email p/ contato:</label >  <br>   
                <input type="email" id="email" name="email" placeholder="mail@exemplo.com" required>

          </div>
          <div class="form-campo">
               <label for="whatsApp">whatsApp p/ contato:</label>  <br>   
               <input type="whatsApp" id="whatsApp" name="whatsApp"placeholder="somente número" required>

          </div>
      	
      
         
            <label for="">O que deseja:</label><br>
            <textarea rows="10" name="descrition" placeholder="Faça uma breve descrição do site que voçê deseja" required></textarea>

        
      	

		   

      	 <div class="form_btn">
            <input type="submit" name="btn_enviar"value="Enviar">
         </div>
      	
      </form>
  </div>

   <!-- </main>-->


  </div><!--end Main-->