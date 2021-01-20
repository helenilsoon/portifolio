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

  
     
        <h2>Faça seu orçamento sem compromisso</h2>
        
      
      <form action="/contato" method="POST" class="form-contato"  >

          <?php if( isset($AVISO) ){ ?>


            <div class="msg-erro"> <?php echo htmlspecialchars( $AVISO, ENT_COMPAT, 'UTF-8', FALSE ); ?> </div>       

                <?php } ?>


          <?php if( isset($retornoEmail) ){ ?>

                    <div class="msg-sucess"><?php echo htmlspecialchars( $retornoEmail, ENT_COMPAT, 'UTF-8', FALSE ); ?>  </div>          
                <?php } ?>

              
         <?php if( isset($retornoEmailErro) ){ ?>

                    <div class="msg-erro"> <?php echo htmlspecialchars( $retornoEmailErro, ENT_COMPAT, 'UTF-8', FALSE ); ?> </div>            

                <?php } ?>


         <div class="continer-campo"> 
          <div class="form-campo">

              <label for="name">Nome ou Empresa:</label><br>
              <input type="text" id="name" name="name" placeholder="Nome"  required>
            
          </div>
          <div class="form-campo">

                <label for="email">Email p/ contato:</label >  <br>   
                <input type="email" id="email" name="email" placeholder="mail@exemplo.com"  required>

          </div>
          <div class="form-campo">
               <label for="whatsApp">whatsApp p/ contato:</label>  <br>   
               <input type="whatsApp" id="whatsApp" name="whatsApp" placeholder="somente número" 
               required>

          </div>
      	
        </div>
        <div class="container-textarea">
          <div class="form-textarea">
            <label for="">O que deseja:</label><br>
            <textarea rows="4" name="descrition" placeholder="Faça uma breve descrição do site que voçê deseja"  required> </textarea>       
        
      	</div>
          </div>
		   

      	 <div class="form_btn">
            <input type="submit" name="btn_enviar"value="Enviar">
         </div>
      	
      </form>


   <!-- </main>-->


  </div><!--end Main-->