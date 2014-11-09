<?php
  session_start();

  if(!isset($_SESSION['email'])):
    header("location: index.php");
  endif; 

  $email = $_SESSION['email'];
  $default = "http://www.somewhere.com/homestar.jpg";

  $p_grav_url = "http://www.gravatar.com/avatar/" . md5( strtolower( trim( $email ) ) ) . "?d=" . urlencode( $default ) . "&s=35";

  $g_grav_url = "http://www.gravatar.com/avatar/" . md5( strtolower( trim( $email ) ) ) . "?d=" . urlencode( $default ) . "&s=90";

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
          <form class="navbar-form navbar-right" role="form">
            <div class="form-group">
              <img src="<?=$p_grav_url?>" class="img-rounded"/>
            </div>  
            <div class="form-group">
              <label style="color:white;"><?=$_SESSION['email']?></label>
            </div>
            <a href="logout.php" class="btn btn-danger">Sair</a>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    <div class="container">
    	<div class="row">
    		<div class="box-profile"> 
    			<h2><i class="fa fa-user"></i> Perfil de usuário</h2>
          <hr>
          <div class="panel panel-default">
            <div class="panel-body">
              <div class="col-md-2">
                <img src="<?=$g_grav_url?>" class="img-rounded"/>
              </div>
              <div class="col-md-8">
                <div class="form-grop">
                  <label>Nome completo</label>
                  <span><?=$_SESSION['complete_name']?></span>
                </div>
                <div class="form-grop">
                  <label>Nome de usuário</label>
                  <span><?=$_SESSION['username']?></span>
                </div>
                <div class="form-grop">
                  <label>Email</label>
                  <span><?=$_SESSION['email']?></span>
                </div>
              </div>
            </div>
          </div>
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