<HTML>
	<HEAD>
		<TITLE>Pesquisando objeto(s)</TITLE>
			<?php
			require_once "i_topo.php";
			?>

		  <a href='i_sair.php' style="color: blue; size: 4;">Desconectar</a>

			<?php
			require_once "i_menuObjeto.php";
			?>
			
				<DIV id="TOPO">
			<b>PESQUISA DE OBJETO(S) PERDIDO(S)</b>
				</DIV>

		<DIV id="CONTEUDO">
		<?php

		  include 'buscar.php';
		  
		  include 'conecta.php';

		  $query = "select * from tb_objeto where ".$criterio." like '%".$chave."%'";
		 		  
		  $result = mysqli_query($db,$query);
		  
		  $num_results = mysqli_num_rows($result);
		  echo '<br>NÚMERO DE OBJETOS ENCONTRADOS: '.$num_results. "<br>";
		  for ($i=0; $i <$num_results; $i++)
		  {
			 $row = mysqli_fetch_array($result);
			 echo '<br />Código: ';
			 echo stripslashes($row[0]);
			 echo '<br>Descrição: ';
			 echo stripslashes($row[1]);
			 echo '<br />Cor: ';
			 echo stripslashes($row[2]);
			 echo '<br />Marca: ';
			 echo stripslashes($row[3]);
			 echo '<br />Local onde foi encontrado: ';
			 echo stripslashes($row[4]);
			 echo '<br />Data que foi encontrado: ';
			 echo stripslashes($row[5]);
			 echo '<br />---------------------------------------------- <br />';
		  }
		  mysqli_close($db);
		?>
		</div>
	</body>
</html>
  
