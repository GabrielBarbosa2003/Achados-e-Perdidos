<HTML>
	<HEAD>
		<TITLE>Pesquisar objeto(s)</TITLE>
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
			<form action="bd_pesquisa.php" method="post">
			Selecione um criterio: 
				<select name="criterio">
				  <option value="cod_obj">Código</option>
				  <option value="desc_obj">Descrição</option>
				  <option value="cor_obj">Cor</option>
				  <option value="marca_obj">Marca</option>
				  <option value="local_enc">Local</option>
				  <option value="data_enc">Data</option>
				</select><br/>
				Digite o valor de busca:
				<input name="chave" type="text"><br/>
				<input type="submit" value="Enviar">
			</form>
		</div>
	</body>
</html>
