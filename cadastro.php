<!DOCTYPE html>
<html>
<head>
	<title>kindle</title>
</head>
<body>

</body>
</html>
<?php
	include 'conexao.inc';
	
	
	$nome=$_POST['Fnome'];
	$login=$_POST['Flogin'];
	$senha=$_POST['Fsenha'];
	$email=$_POST['Femail'];
	
	$sql="INSERT INTO tb_cadastrar VALUES ('$nome', '$login', '$senha', '$email')";//insert no banco imobiliario
	$res=mysqli_query($conectarBanco,$sql);
	$num=mysqli_affected_rows($conectarBanco);
	
	if($num == 1){
		echo "<h3>Cadastro realizado com sucesso.<br>
		Aguarde e será redirecionado para login</h3>";
		header("refresh: 4; url=login.html");
	}else{
		echo "Erro de cadastro, verifique sua informações";
	}
	mysqli_close($conectarBanco);

?>
