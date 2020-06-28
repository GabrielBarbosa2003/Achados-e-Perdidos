<!DOCTYPE html>
  <head>
    <title>Perdi um objeto</title>
    <link rel="stylesheet" type="text/css" href="../css/estiloform.css"/>
    <?php
      require_once "i_topo.php";
      	  $nome=$_POST['nome'];
     	  $descricao=$_POST['descricao'];
		  $cor=$_POST['cor'];
		  $marca=$_POST['marca'];
		  $data=$_POST['data'];
		  $email=$_POST['email'];

		  
		  include 'conecta.php';

		  $query = "insert into tb_perdi(nome_pessoa,desc_obj, cor_obj, marca_obj, data_perd, email_pessoa) values ('$nome', '$descricao','$cor', '$marca', '$data', '$email')";
		  $result = mysqli_query($db,$query);
		  if ($result)
			   echo  mysqli_affected_rows($db).'<h2><center><br> Objeto perdido enviado ao banco do administrador!!</br></h2></center><center><h3><a href="perdi.php"> Preencher formulário de outro objeto perdido.</a></h3></center>'; 
		  else
		  echo mysqli_error($db).'<br>';
		  mysqli_close($db);
    ?>
	
  	
  </body>
</html>