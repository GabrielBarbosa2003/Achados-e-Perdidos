<HTML>
	<HEAD>
		<TITLE>Excluindo objeto(s)</TITLE>
			<?php
			require_once "i_topo.php";
			?>
		<br><br>
			
			<?php
			require_once "i_menuObjeto.php";
			?>

			<DIV id="TOPO">
			<b>EXCLUSÃO DE OBJETO(S) PERDIDO(S)</b>
				</DIV>
			
		<DIV id="CONTEUDO">
		<?php

		  include 'buscar.php';

		  include 'conecta.php';

		  $query = "DELETE From tb_objeto where $criterio = '$chave'";
		  $result = mysqli_query($db,$query);
		  echo mysqli_affected_rows($db).' objeto(s) exlcuído(s)';
		  mysqli_close($db);
		 ?>
	</body>
</html>
  
