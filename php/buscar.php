<?php  
		  $criterio=$_POST['criterio'];
		  $chave=$_POST['chave'];
		  $chave = trim($chave);
		  if (!$criterio || !$chave)
		  {
			 echo 'Impossivel realizar pesquisa...faltam dados';
			 exit;
		  }
		  $criterio = addslashes($criterio);
		  $chave = addslashes($chave);

?>