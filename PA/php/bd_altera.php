<HTML>
	<HEAD>
		<TITLE>Alterando informações</TITLE>
		<?php
			require_once "i_topo.php";
			?>
		<br><br>
			
			<?php
			require_once "i_menuObjeto.php";
			?>
				
				<DIV id="TOPO">
			<b>ALTERAÇÃO DE DADOS DO OBJETO PERDIDO</b>
				</DIV>
			
		<DIV id="CONTEUDO">
		<?php
		  
		  include 'buscar.php';
		 
		  include 'conecta.php';

		  $query = "select * from tb_objeto where $criterio = '$chave'";
		  $result = mysqli_query($db,$query);
		  $num_results = mysqli_num_rows($result);
	      $pessoa = mysqli_fetch_array($result);
		   echo "<form action='bd_altera1.php' method='post'>
			Código: <input type='number' name='cod_obj' value='$pessoa[0]' readonly /><br/>
			Descrição: <input type='text' name='desc_obj' value='$pessoa[1]'/><br/>
			Cor: <input type='cor_obj' name='cor_obj' value='$pessoa[2]'/><br/>
		    Tamanho: <input type='text' name='tam_obj' value='$pessoa[3]'/><br/>
			Marca: <input type='text' name='marca_obj' value='$pessoa[4]'/><br/>
			Ponto: <input type='text' name='ponto_obj' value='$pessoa[5]'/><br/>
			<input type='submit' value='Alterar'/>
		 </form>"


		  
		?>
		</div>
	</body>
</html>
  
