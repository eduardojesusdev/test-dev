function validacao(){

		if(document.forms["formulario"].Fnome.value==""){
			alert("Por favor, preencha o campo nome.")
			document.forms["formulario"].Fnome.focus()
			return false
		}

		if (document.forms["formulario"].Fnome.value>95){
			alert("Por favor, preencha o campo nome com até 95 caracteres (inclui espaçamentos.")
			document.forms["formulario"].Fnome.focus()
			return false
		}

		if(document.forms["formulario"].Flogin.value==""){
			alert("Por favor, preencha o campo Login.")
			document.forms["formulario"].Flogin.focus()
			return false
		}

		var senha = document.forms["formulario"].Fsenha.value
		var repSenha = document.forms["formulario"].Fsenha1.value

		if(document.forms["formulario"].Fsenha.value==""){
			alert("Por favor, preencha o campo Senha.")
			document.forms["formulario"].Fsenha.focus()
			return false
		}

		if(document.forms["formulario"].Fsenha1.value==""){
			alert("Por favor, preencha o campo Repetir senha.")
			document.forms["formulario"].Fsenha1.focus()
			return false
		}

		if(senha!=repSenha){
			alert("As senhas não coincidem")
			document.forms["formulario"].Fsenha.focus()
			
			return false
		}

		if(document.forms["formulario"].Femail.value==""){
			alert("Por favor, preencha o campo Email.")
			document.forms["formulario"].Femai.focus()
			return false
		}

		if(document.forms["formulario"].Femail.value.indexOf("@")<1){
			alert("Por favor, preencha com um email válido!")
			document.forms["formulario"].Femail.focus()
			return false
		}


}

function valida_login(){

	if(document.forms["login"].Flogin.value==""){
			alert("Por favor, preencha o campo Login.")
			document.forms["login"].Flogin.focus()
			return false
		}
	if(document.forms["login"].senha.value==""){
			alert("Por favor, preencha o campo senha.")
			document.forms["login"].senha.focus()
			return false
		}

}