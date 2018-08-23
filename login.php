
<?php
	include "conexao.inc";

	$login=$_POST['Flogin'];
	$senha=$_POST['senha'];
	

	$sql="SELECT * FROM tb_cadastrar WHERE login='$login' AND senha='$senha'"; //select no banco junto com AND
	$res=mysqli_query($conectarBanco,$sql);
	$linha=mysqli_affected_rows($conectarBanco);
	
	
	if($linha > 0 ){
		$num=rand(100000,900000);    //gerar session de id radomica com range de coisa pra caralho de numero
		session_start();			//OBS.: eu fiz com cookies tbm
		$_SESSION['sessao']=$num;
		$_SESSION['login']=$login;
		header("Location:redirect.php?num1=$num");  //redirect que elas gosta
	}else{
		echo "<br>Erro no login<br>";
		echo "<a href=login.html>Voltar</a>";
	}
?>
