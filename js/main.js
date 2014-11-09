//Validations

$.validator.addMethod("validpassword", function(value, element) {
    return this.optional(element) ||
        /^.*(?=.{8,})(?=.*[a-z])(?=.*[A-Z])(?=.*[\d])(?=.*[\W_]).*$/.test(value);
}, "A senha precisa conter no minimo uma letra maiuscula," +
           " uma letra minuscula, um numero e um caracter especial ( ! @ # $ % & * )");

$("#create_account_form").validate({
	rules:{
		completename:{
			required: true
		},
		username: {
			required: true
		},
		email: {
			required: true,
			email: true
		},
		password: {
			required: true,
			minlength: 6,
			validpassword: true
		},
		passwordconfirmation: {
			required: true,
			equalTo: "#password"
		}

	},
	messages: {
		completename: {
			required: 'Nome Completo obrigatório'
		},
		username: {
			required: 'Nome de Usuário obrigatório'
		},
		email: {
			required: 'Email obrigatório',
			email: 'Por Favor, informe um email válido.'
		},
		password: {
			required: 'Você precisa criar uma senha',
			minlength: 'Sua senha precisa ter no minimo 6 caracteres ( incluindo maiusculos, minusculos e numeros )'
		},
		passwordconfirmation: {
			required: 'Por questão de segurança digite sua senha novamente',
			equalTo: 'As senhas não conferem'
		}
	}
});

//Ajax requests in signup page

$('.username_field').on('blur', function(){
	var username = $(this).val();
	$.ajax({
	  type: "GET",
	  url: "verifications.php",
	  data: { value: username, type: "username" }
	})
	  .success(function( msg ) {
	    if(msg === 'FAIL'){
	    	$('.notUniqueUsername').show();
	    	return false;
	    }else{
	    	$('.notUniqueUsername').hide();
	    }
	  });
});


$('.email_field').on('blur', function(){
	var email = $(this).val();
	$.ajax({
	  type: "GET",
	  url: "verifications.php",
	  data: { value: email, type: "email" }
	})
	  .success(function( msg ) {
	    if(msg === 'FAIL'){
	    	$('.notUniqueEmail').show();
	    	return false;
	    }else{
	    	$('.notUniqueEmail').hide();
	    }
	  });
});
