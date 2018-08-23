
<?php
	include "conexao.inc";
	
	session_start();
	
	if(isset($_SESSION["sessao"])){ //se retornar true via "isset" obtemos sessao
		$n1=$_GET["num1"];
		$n2=$_SESSION["sessao"];
		
		if($n1 != $n2){
			echo "login nao efetuado";
			exit;
			}
		}else{
			echo "login nao efetuado";
			exit;
		}	
	echo "Aguarde e será redirecionado, ".$_SESSION['login'].".";
	header("refresh:3; url=home.html");
	
	
?>
