<?php
/*require 'vendor/autoload.php';
require 'funcs/conexion.php';
require 'funcs/funcs.php';
	
	if(!empty($_POST))
	{
		
		$email = $conn->real_escape_string($_POST['email']);

		if(!isEmail($email))
		{
			echo "<div id='error' class='alert alert-danger text-center' role='alert'>
			<a href='#' onclick=\"showHide('error');\">Error en tu email</a>
			</div>";
		}else{
			$url = 'http://'.$_SERVER["SERVER_NAME"].'/login/cambia_pass.php?id='.$registro.'&val='.$token;
					
					$asunto = 'Activar Cuenta - Sistema de Usuarios';
					$cuerpo = "Estimado $nombre: Para continuar con el proceso de registro, es indispensable de click en la siguiente link $url Activar Cuenta";
			$booleanSendEmail = enviarEmail($email, $nombre, $asunto, $cuerpo);
			if($booleanSendEmail){
			
			echo "<h1 class='text-center p-5'>Para terminar el proceso de registro siga las instrucciones que le hemos enviado la dirección de correo electrónico: $email </h1>";
			
			echo "<br><a class='btn btn-primary btn-lg' href='index.php' >Iniciar Sesión</a>";
			exit;
			
			} else {
				$errors[] = "Error al enviar Email";
			}
		}

}*/
	
?>
<html>
	<head>
		<title>Recuperar Password</title>
		
		<link rel="stylesheet" href="css/bootstrap.min.css" >
		<link rel="stylesheet" href="css/bootstrap-theme.min.css" >
		<script src="js/bootstrap.min.js" ></script>
		
	</head>
	
	<body>
		
		<div class="container">    
			<div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
				<div class="panel panel-info" >
					<div class="panel-heading">
						<div class="panel-title">Recuperar Password</div>
						<div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="index.php">Iniciar Sesi&oacute;n</a></div>
					</div>     
					
					<div style="padding-top:30px" class="panel-body" >
						
						<div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
						
						<form id="loginform" class="form-horizontal" role="form" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" autocomplete="off">
							
							<div style="margin-bottom: 25px" class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<input id="email" type="email" class="form-control" name="email" placeholder="email" required>                                        
							</div>
							
							<div style="margin-top:10px" class="form-group">
								<div class="col-sm-12 controls">
									<button id="btn-login" type="submit" class="btn btn-success">Enviar</a>
								</div>
							</div>
							
							<div class="form-group">
								<div class="col-md-12 control">
									<div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
										No tiene una cuenta! <a href="registro.php">Registrate aquí</a>
									</div>
								</div>
							</div>    
						</form>
					</div>                     
				</div>  
			</div>
		</div>
	</body>
</html>							