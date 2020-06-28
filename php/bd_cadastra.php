<HTML>
	<HEAD>
		<TITLE>Cadastrando objeto</TITLE>
			<?php
			require_once "i_topo.php";
			?>
		      <a href='i_sair.php' style="color: blue; size: 4;">Desconectar</a>
			
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
		  $marca=$_POST['marca'];
		  $local=$_POST['local'];
		  $data=$_POST['data'];

		   if (!$descricao || !$cor || !$local || !$data)
		  {
			 die( 'Você não preencheu todos os dados, favor cadastrar novamente!!<br>');
		  }
		  
		  include 'conecta.php';

		  $query = "insert into tb_objeto(desc_obj, cor_obj, marca_obj, local_enc, data_enc) values ('$descricao','$cor', '$marca', '$local', '$data')";
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