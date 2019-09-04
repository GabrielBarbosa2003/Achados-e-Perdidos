<HTML>
	<HEAD>
		<TITLE>Alterando dados</TITLE>
			<?php
			require_once "i_topo.php";
			?>
		<br><br>
			
			<?php
			require_once "i_menuObjeto.php";
			?>
			
					<DIV id="TOPO">
			<b>ALTERANDO DE DADOS DO OBJETO PERDIDO</b>
					</DIV>

		<DIV id="CONTEUDO">
		<?php
		  $codigo= $_POST['cod_obj'];
		  $descricao=$_POST['desc_obj'];
		  $cor=$_POST['cor_obj'];
		  $tamanho=$_POST['tam_obj'];
		  $marca=$_POST['marca_obj'];
		  $ponto=$_POST['ponto_obj'];
		   if (!$codigo && !$descricao && !$cor && !$tamanho && !$marca && !$ponto)
		  {
			 echo 'Nao possue alteracoes a serem feitas<br />';
			 exit;
		  }
		  
		  include 'conecta.php';
		  
		  $query = "update tb_objeto set desc_obj='$descricao', cor_obj='$cor', tam_obj='$tamanho', marca_obj='$marca', ponto_obj= '$ponto' where cod_obj='$codigo'";
		  $result = mysqli_query($db,$query);
		  if (mysqli_affected_rows($db)) echo "O objeto '$descricao' (relacionado ao codigo: $codigo) foi atualizado no BD.</br>"; 
		  else echo mysqli_error($db).'<br>';
		  mysqli_close($db);
		?>
		</div>
	</body>
</html>
