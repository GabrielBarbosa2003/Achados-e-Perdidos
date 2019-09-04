<HTML>
	<HEAD>
		<TITLE>Cadastrar objeto</TITLE>

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
		 <form action="bd_cadastra.php" method="post">
			 <fieldset>	
					<label for="descricao">Descrição: </label>
					<input type="text" name="descricao" maxlength="100" size="30"/><br>
	
					<label for="cor">Cor: </label>
					<input type="text" name="cor" maxlength="30" size="30"/><br>

					<label for="tamanho">Tamanho: </label>
					<input type="text" name="tamanho" maxlength="20" size="30"/><br>

					<label for="tamanho">Marca: </label>
					<input type="text" name="marca" maxlength="20" size="30"/><br>

					<label for="ponto">Ponto em que se encontra(A ou B):</label>
					<input type="text" name="ponto" maxlength="1" size="30"/><br>



			</fieldset>
			<input type="submit" value="Enviar"/>
		 </form>
		</DIV>	
			</body>
</HTML>
