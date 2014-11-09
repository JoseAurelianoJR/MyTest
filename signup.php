<html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MyTest</title>

    <!-- Bootstrap core CSS -->
    <link href="lib/bootstrap/bootstrap.css" rel="stylesheet">
    <link href="lib/fontawesome/font-awesome.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
  
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><i class="fa fa-ils"></i> MyTest</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right" role="form">
            <div class="form-group">
              <input type="text" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Senha" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Entrar</button>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    <div class="container">
    	<div class="row">
    		<div class="box"> 
    			<h2>Preencha o formulário abaixo:</h2>
    			<hr>
	    		<form role="form" action="create_account.php" method="post" id="create_account_form">
				  <div class="form-group">
				    <label for="completename">Nome Completo</label>
				    <input type="text" class="form-control" name="completename" placeholder="Nome Completo">
				  </div>
				  <div class="form-group">
				    <label for="username">Nome de Usuário</label>
				    <input type="text" class="form-control username_field" name="username" placeholder="Nome de Usuário">
				    <span class="notUniqueUsername">Nome de usuário ja existente</span>
				  </div>
				  <div class="form-group">
				    <label for="email">Email</label>
				    <input type="email" class="form-control email_field" name="email" placeholder="Informe um email válido" >
				  	<span class="notUniqueEmail">Email ja cadastrado, informe outro</span>
				  </div>
				  <div class="form-group">
				    <label for="password">Senha</label>
				    <input type="password" class="form-control" name="password" id="password" placeholder="Senha" >
				  </div>
				  <div class="form-group">
				    <label for="passwordconfirmation">Confirme a Senha</label>
				    <input type="password" class="form-control" name="passwordconfirmation" placeholder="Confirme sua Senha" >
				  </div>
				  <button type="submit" class="btn btn-primary">Criar minha conta</button>
				</form>
			</div>
    	</div>
    </div>

      <footer>
        <p>© MyTest 2014</p>
      </footer>
    </div> 
    <script src="lib/jquery/jquery.js"></script>
    <script src="lib/jquery-validation/jquery.validate.js"></script>
    <script src="lib/bootstrap/bootstrap.js"></script>
 	<script src="js/main.js"></script>
 	<script type="text/javascript">
 		$(document).ready(function(){
 			$('.notUniqueUsername').hide();
 			$('.notUniqueEmail').hide();
 		});
 	</script>


</body></html>