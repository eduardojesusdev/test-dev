<?php

include "conexao.ini";

?>



<!doctype html>
<html lang="pt-br">
	<meta charset="utf-8">

	<head>
	    <meta charset="UTF-8">
	    <title>kindle</title>
	    <link rel="stylesheet" type="text/css" href="_css/home.css">
	    
	</head>
			
		<body>
	<div id="topo">
		<img id="logoimg" src="_imagens/kindle.svg">
		Bem vindo $user. <i>"Que a Força esteja com você."</i><br><br>
<a href="destroi_sessao.inc" class="botao-sair">/Logout</a>
	
</div>
		
			<nav class="nav_tabs">
				<ul>
					<li>
						<input type="radio" name="tabs" class="rd_tabs" id="tab1" checked>
						<label for="tab1">Informações de sessão</label>
						<div class="content">
							<article>
							

								informações de sessão:<br>
								Nome: "$nome"<br>
								Usuário: "$login"<br>
								Email: "$email"<br>
							
							</article>
						</div>
					</li>

					<li>
						<input type="radio" name="tabs" class="rd_tabs" id="tab2">
						<label for="tab2">Contato</label>
						<div class="content">
							<article>
								
							<div id="cadastro">
								<form name="formulario" method="post" action="mail.php">
									<div>
										<label for="Femail">Email:</label>
										<input type="text" name="Femail" size="100" maxlength="55">
									</div>

									<div>
										<label for="Fobj">Assunto:</label>
										<input type="text" name="Fobj" size="100" maxlength="95">
									</div>

									<div>
										<label for="Fmensagem">Mensagem:</label>
										<textarea name="Fmensagem" rowns="5" cols="50"></textarea>
									</div>

									<div>
											<input type="submit" id="enviar"name="Fenviar" value="Enviar e-mail!"><br>
									</div>
								</form>
							</div>
						</article>
						</div>
					</li>

				</ul>
			</nav>



<footer>
<div id="footer">
    <a href="http://www.kindle.com.br/site/" target="_blank">
        <img id="img-footer" src="_imagens/background.gif">
    </a>
</div>
</footer>
</body>
</html>