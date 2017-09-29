<html>
    <head>
        <meta charset="utf-8">
        <title>SOS Partenaires</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="Modules/Accueil/css/index.css">
        <link rel="icon" href="img/logo/logo-icon.png">    
    </head> 
    <body class="container">
		<div class="col-lg-6 intro-content cache" id="intro-content">
			<div class=" col-lg-12">
				<h1 align="center">Connexion</h1><br><br>
				<form id="Form_connect" method="post" action="modules/accueil/php/test_co.php">
					 <div>
						<label >Login</label>
						<input type="text" class="form-control" id="log" name="log" placeholder="Login">
					  </div><br>
					  <div class="form-group">
						<label >Mot de passe</label>
						<input type="password" class="form-control" name="mdp" id="mdp" placeholder="Mot de passe">
					  </div>
					<a href="modules/inscription/inscription.php" id="inscription">Pas de compte ? inscrivez-vous</a><br><br>
					<input type="submit" class="btn btn-block btn-success" value="Connexion">
				</form>
			</div>
		</div>
	
    </body> 
    <footer>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="Modules/Accueil/js/index.js"></script>
    </footer>
</html>