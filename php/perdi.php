<!DOCTYPE html>
  <head>
    <title>Perdi um objeto</title>
    <link rel="stylesheet" type="text/css" href="../css/estiloform.css"/>
    <?php
      require_once "i_topo.php";
    ?>
		<div class="form">  
			<form action=" bd_perdi.php" class="form-contact" method="post" tabindex="1">  
				     <b> Nome Completo: </b><input type="text" class="form-contact-input" name="nome" required /> 

				     <b> Objeto perdido: </b><input type="text" class="form-contact-input" name="descricao" required />  

				     <b> Cor: </b><input type="text" class="form-contact-input" name="cor"  required />  

				     <b> Marca: </b><input type="text" class="form-contact-input" name="marca"  required />  

				     <b> Data que foi perdido: </b><input type="date" class="form-contact-input" name="data"  required /> 

				     <b> Email para contato: </b><input type="email" class="form-contact-input" name="email"  required />  
				    
				     <button type="submit" class="form-contact-button">Enviar</button>
			</form>  <br><br>

	    </div>  

	    <br><br><br><b><font color="#696969">&nbsp As respostas do formulário serão enviadas ao adminstrador da página, que responderá por email se o objeto perdido se encontra no ponto de achados e perdidos.</font></b>
  	
  </body>
</html>