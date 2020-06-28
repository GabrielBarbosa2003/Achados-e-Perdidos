<HTML>
	<HEAD>
		<TITLE>Excluir objeto(s)</TITLE>
			<?php
			require_once "i_topo.php";
			?>
		
			
      <a href='i_sair.php' style="color: blue; size: 4;">Desconectar</a>
			
			<?php
			require_once "i_menuObjeto.php";
			?>

				<DIV id="TOPO">
			<b>EXCLUSÃO DE CONSULTA(S) DE OBJETO(S)</b>
				</DIV>
			
		<DIV id="CONTEUDO">
			<form action="bd_exclui2.php" method="post">
			Selecione um criterio:<br />
				<select name="criterio">
				  <option value="cod_obj">Código (Recomendado)</option>
				  <option value="desc_obj">Descrição</option>
				  <option value="data_perd">Data</option>
				  <option value="email_pessoa">Email</option>

				</select>
				<br />
				Digite o valor de busca:<br />
				<input name="chave" type="text">
				<br />
				<input type="submit" value="Excluir">
			</form>
		</div>
	</body>
</html>
