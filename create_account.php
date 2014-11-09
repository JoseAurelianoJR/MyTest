<?php
require 'classes/conexao.classe.php';
require 'classes/mailer.php';

//variables

$complete_name = $_POST['completename'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_confirmation = $_POST['passwordconfirmation'];


//Create account and send email confirmation

if(validate($complete_name, $username, $email, $password, $password_confirmation)){
	//create account
	$conexao = new Conexao();

	$actualDate = date("Y-m-d");
	$activation_key = md5($actualDate.$email.$username);
	$sql = "insert into users
			(complete_name, username, email, password, status, created_at, activation_key)
			values 
			('".$complete_name."', '".$username."', '".$email."', '".md5($password)."', 0, '".$actualDate."', '".$activation_key."')";
	
	if($conexao->Query($sql)){
		//Send email confirmation
		sendEmailConfirmation($complete_name, $username,  $email, $activation_key);

	}

}





//utils

function validate($complete_name, $username, $email, $password, $password_confirmation){
	//backend validations
	if(!thisIsNull($complete_name)){
		
		if(!thisIsNull($username)){

			if(!thisIsNull($email)){

				if(validateEmail($email)){

					if(!thisIsNull($password)){

						if(validatePassword($password)){
							
							if($password_confirmation == $password){
								return true;
							}else{
								//password confirmation is invalid
								return false;
							}
						}else{
							//password is invalid
							return false;
						}

					}else{
						//password is null
						return false;
					}
				}else{
					//email is invalid
					return false;
				}
			}else{
				//email is null
				return false;
			}
		}else{
			//username is null
			return false;
		}
	}else{
		//complete name is null
		return false;
		
	}
}

function thisIsNull($value){
	return $value == null;
}

function validateEmail($value){
	if (filter_var($value, FILTER_VALIDATE_EMAIL)) {
	    return true;
	}else{ return false; }
}

function validatePassword($value){
	if (!preg_match_all('$\S*(?=\S{6,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])(?=\S*[\W])\S*$', $value))
        return FALSE;
    return TRUE;
}

function sendEmailConfirmation($complete_name, $username,  $email, $activation_key){

	$mandrill = new Mailer();
	$mandrill->send($complete_name, $username,  $email, $activation_key);
	echo "<script type='text/javascript'> document.location = 'account_created.php'; </script>";

}

