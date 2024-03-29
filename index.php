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
          <form class="navbar-form navbar-right" role="form" action="login.php" method="post">
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

    <div class="jumbotron">
      <div class="container">
        <h1>Bem-vindo ao MyTest</h1>
        <p>O MyTest é um serviço extraordinário onde você pode gerenciar seu perfil de qualquer lugar do mundo.</p>
      	<p><a class="btn btn-success btn-lg" href="signup.php" role="button"><i class="fa fa-thumbs-o-up"></i> Legal, quero criar minha conta.</a></p>
      </div>
    </div>

    <div class="container">
     <div class="row">
        <div class="col-md-4">
          <h1 class="centralize-text"><i class="fa fa-bullhorn"></i></h1>
          <h2 class="centralize-text">Seja Popular</h2>
          <p class="centralize-text">Através do MyTest você terá seu perfil espalhado por toda a web, tornando você popular em toda a web. </p>
        </div>
        <div class="col-md-4">
          <h1 class="centralize-text"><i class="fa fa-users"></i></h1>
          <h2 class="centralize-text">Conecte-se</h2>
          <p class="centralize-text">Com o MyTest você irá se conectar com milhões de pessoas em todo o mundo.</p>
       </div>
        <div class="col-md-4">
          <h1 class="centralize-text"><i class="fa fa-shield"></i></h1>
          <h2 class="centralize-text">100% Seguro</h2>
          <p class="centralize-text">Nossa plataforma é totalmente segura e livre de fraudes.</p>
        </div>
      </div>

      <hr>

      <footer>
        <p>© MyTest 2014</p>
      </footer>
    </div> 
    <script src="lib/jquery/jquery.js"></script>
    <script src="lib/bootstrap/bootstrap.js"></script>
 	<script src="js/main.js"></script>

</body></html>