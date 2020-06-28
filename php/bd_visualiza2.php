<HTML>
	<HEAD>
		<TITLE>PA - Controle</TITLE>
		
		<?php
			require_once "i_topo.php";
			?>
		
      <a href='i_sair.php' style="color: blue; size: 4;">Desconectar</a>	
			

		<DIV id="TOPO">
			<b>CONTROLE DE OBJETOS PERDIDOS</b>
		</DIV>
			<?php
			require_once "i_menuObjeto.php";
			?>

		<DIV id="CONTEUDO">

		  	

		  <?php 
			  		include 'conecta.php';
			  $query = "select * from tb_perdi";
			 		  
			  $result = mysqli_query($db,$query);
			  
			  $num_results = mysqli_num_rows($result);
			  echo '<br>NÚMERO TOTAL DE OBJETOS DE USUÁRIOS ENVIADOS PARA CONSULTA: '.$num_results. "<br>";
			  echo '-----------------------------------------------------------------------------------------------------------';
			  for ($i=0; $i <$num_results; $i++)
			  {
				 $row = mysqli_fetch_array($result);
				 echo '<br />Código: ';
				 echo stripslashes($row[0]);
				 echo '<br>Pessoa que perdeu: ';
				 echo stripslashes($row[1]);
				 echo '<br />Objeto: ';
				 echo stripslashes($row[2]);
				 echo '<br />Cor: ';
				 echo stripslashes($row[3]);
				 echo '<br />Marca: ';
				 echo stripslashes($row[4]);
				 echo '<br />Data que perdeu: ';
				 echo stripslashes($row[5]);
				 echo '<br />Email para contato: ';
				 echo stripslashes($row[6]);
				 echo '<br />---------------------------------------------------<br>';
			  }
			  mysqli_close($db);
		?>

		</DIV>	
	</BODY>
</HTML>

