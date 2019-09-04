<HTML>
	<HEAD>
		<TITLE>Cadastrando objeto</TITLE>
			<?php
			require_once "i_topo.php";
			?>
		<br><br>
			
			<?php
			require_once "i_menuObjeto.php";
			?>

				<DIV id="TOPO">
			<b>CADASTRO DE OBJETO PERDIDO</b>
				</DIV>

		<DIV id="CONTEUDO">
		<?php
		  $descricao=$_POST['descricao'];
		  $cor=$_POST['cor'];
		  $tamanho=$_POST['tamanho'];
		  $marca=$_POST['marca'];
		  $ponto=$_POST['ponto'];

		   if (!$descricao || !$cor || !$tamanho || !$ponto)
		  {
			 die( 'Você não preencheu todos os dados, favor cadastrar novamente!!<br>');
		  }
		  
		  include 'conecta.php';

		  $query = "insert into tb_objeto(desc_obj,cor_obj,tam_obj, marca_obj, ponto_obj) values ('$descricao','$cor','$tamanho', '$marca', '$ponto')";
		  $result = mysqli_query($db,$query);
		  if ($result)
			   echo  mysqli_affected_rows($db).' Objeto inserido no BD do sistema.</br>'; 
		  else
			  echo mysqli_error($db).'<br>';
		  mysqli_close($db);
		?>
  	</div>
  </body>
  </html>