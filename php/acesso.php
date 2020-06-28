<html>

<?php 
  session_start();


if (isset($_SESSION['Login'])){
 if (($_SESSION['Login']=="OK")) {
    }

}else{
	

$usuario = $_POST['usuario'];
$senha = md5($_POST['senha']);






			if($usuario == "bisnagas" AND $senha == md5("admin123")){
     			header("location:controle.php");
				$_SESSION['Login']="OK";
			}else{
				header('Location:loginadm.php?error=1');
			}
		  
		  mysqli_close($db);

}
?>


</html>