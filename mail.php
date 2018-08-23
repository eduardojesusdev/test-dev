<!DOCTYPE html>
<html>
<?php
	
	$assunto=$_POST['Fobj'];
	$email=$_POST['Femail'];
	$mensage=$_POST['Fmensagem'];
	
	if(mail($email,$assunto,$mensage)){  //nem deu pa testar my gestor
		echo "Mensagem enviada!";
	}else{
		echo "erro, mensagem nao enviada";
	}
	
	
?>
<head>
	<title>kindle</title>
</head>
<body>

</body>
</html>
