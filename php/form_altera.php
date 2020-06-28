<HTML>
	<HEAD>
		<TITLE>Alterar objeto</TITLE>
			<?php
			require_once "i_topo.php";
			?>


      <a href='i_sair.php' style="color: blue; size: 4;">Desconectar</a>
			
			<?php
			require_once "i_menuObjeto.php";
			?>

			<DIV id="TOPO">
			<b>ALTERAÇÃO DE INFORMAÇÕES SOBRE UM OBJETO PERDIDO</b>
				</DIV>
			
		<DIV id="CONTEUDO">
			<form action="bd_altera.php" method="post">
			Selecione um criterio:<br />
				<select name="criterio">
				  <option value="cod_obj">Código (Recomendado)</option>
				  <option value="desc_obj">Descrição</option>
				</select>
				<br />
				Digite o valor de busca:<br />
				<input name="chave" type="text"  >
				<br />
				<input type="submit" value="Editar">
			</form>
		</div>
	</body>
</html>
