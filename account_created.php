<?php
  session_start();
?>
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
          <form class="navbar-form navbar-right" role="form" method="post" action="login.php">
            <div class="form-group">
              <input type="text" placeholder="Email" class="form-control" name="email">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Senha" class="form-control" name="password">
            </div>
            <button type="submit" class="btn btn-success">Entrar</button>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    <div class="container">
    	<div class="row">
    		<div class="box"> 
    			<h1 class="centralize-text"><i class="fa fa-paper-plane-o"></i></h1><h2> Sua conta foi criada, enviamos um email de ativação para o email cadastrado.</h2>
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
 	


</body></html>