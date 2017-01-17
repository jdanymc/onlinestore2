<!DOCTYPE html>
<html>
	<head>
    	<title>Log In</title>
    	<meta charset="utf-8">      <!-- Bootstrap -->
    	<link rel="stylesheet" type="text/css" href="/extra/bootstrap/css/bootstrap.min.css">
    	<link rel="stylesheet" href="/extra/bootstrap/css/bootstrap-theme.min.css">
      	<link rel="stylesheet" href="/extra/css/jquery.dataTables.min.css">
      	<link rel="stylesheet" href="/extra/css/login-styles.css">
      	<script src="/extra/js/jquery-1.11.3.min.js"></script>
      	<script src="/extra/bootstrap/js/bootstrap.min.js"></script>
      	<script src="/extra/js/validator.min.js"></script>

  	</head>
  
  	<body>
		<div class="container">
			<div class="card card-container">
				<a href="./registrar">Registro de usuario</a>
	            <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
	            <p id="profile-name" class="profile-name-card"></p>
	            <form class="form-signin" method="post">
	                <span id="reauth-email" class="reauth-email"></span>
	                <input type="email" id="email" name="email" class="form-control" placeholder="Direccion de Email" required autofocus>
	                <input type="password" id="clave" name="clave" class="form-control" placeholder="Contraseña" required>
					<div class="help-block"><?php echo !isset($login)?'':'La usuario/contraseña no es correcta!'; ?></div>
	                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Entrar</button>

	            </form><!-- /form -->
				<a href="#" class="forgot-password">
	                Olvidaste tu Password?
	            </a>
	        </div><!-- /card-container -->
    	</div><!-- /container -->

	</body>
 </html>