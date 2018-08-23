<?php

	session_destroy();
	mysqli_close($conectarBanco);
	$_SESSION=array();  //eliminia todas as variaveis da sessao
	session_destroy();	//destroi a sessao mantendo as variaveis
	
	header("Location:index.html");
	
?>