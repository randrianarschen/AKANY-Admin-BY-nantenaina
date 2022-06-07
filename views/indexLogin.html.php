<!DOCTYPE html>
<html lang="en">
<head>
	<title>Connexion et Deconnexion</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./views/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./views/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./views/vendor/animate/animate.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="./views/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./views/vendor/select2/select2.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./views/cssAdmin/util.css">
    <link rel="stylesheet" type="text/css" href="./views/cssAdmin/main.css">
<!--===============================================================================================-->
</head>
<body>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt align="center">
					<img src="views/images/logo.PNG" alt="IMG">

				</div>

				<form class="login100-form validate-form" method="POST" action="">
				<span class="login100-form-title">
						ATA Admin
					</span>
                   <div class="error"><p style="color:red;";> <?=$error_msg?></p></div>
					<div class="wrap-input100 validate-input" data-validate = "nom d'utilisateur obligatoire" align="center">
						<input class="input100" type="text" name="name_admin"  placeholder="Nom d'utilisateur" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Veuillez entrer votre mot de passe" align="center">
						<input class="input100 passadmin" type="password" name="pswd_admin"  placeholder="Mot de passe" required>
						<span class="focus-input100"></span>
						
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
						<span class="symbol-input100">
						<a href="#" class="fa fa-eye-slash symbolviewpass" aria-hidden="true"></a>
					
						</span>
					</div>
					<div class="symboleye">
							<a href="#" class="fa fa-square-o passview" aria-hidden="true">&nbsp;&nbsp;&nbsp;&nbsp;Afficher le mots de passe</a>
						
                   </div>
					
					<div class="container-login100-form-btn" align="center">
					<a href="index.php?controller=admin&task=logIn">	<button class="login100-form-btn  " name="login">
						 Se connecter
						</button></a>
					
					
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Oublié
						</span>
						<a class="txt2" href="#">
							Nom d'utilisateur / Mot de passe?
						</a>
					</div>
					<br>
					
					 

					<div class="text-center p-t-50">
						<a class="txt2" href="index.php">
							Aller à la page d'accueil
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>

			</div>
		</div>
	</div>


	
<!--===============================================================================================-->	
	<script src="./views/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="./views/vendor/bootstrap/js/popper.js"></script>
	<script src="./views/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="./views/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="./views/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="views/js/main.js"></script>
	<script>
		             var input = document.getElementsByTagName('input');
					 for(var i = 0; i <input.length; i++){
						 input[i].addEventListener('onchange', function(e){

						 })
					 }
							var passview = document.querySelector(".passview"); 
							var passadmin = document.querySelector(".passadmin");
							var symbolviewpass = document.querySelector(".symbolviewpass");  
							passview.addEventListener("click", function(e) {
								e.preventDefault();
								
								if (passadmin.type == "password") {
								passview.className = "fa fa-check-square-o passview"
								passview.innerHTML = "&nbsp;&nbsp;&nbsp;&nbsp;Cacher le mots de passe"
								passadmin.type = "text"
								symbolviewpass.className = "fa fa-eye symbolviewpass"
								}
								else {
								passview.className = "fa fa-square-o passview"
								passview.innerHTML = "&nbsp;&nbsp;&nbsp;&nbsp;Afficher le mots de passe"
								passadmin.type = "password"
								symbolviewpass.className = "fa fa-eye-slash symbolviewpass"
								}
								
							});

							</script>


</body>
</html>