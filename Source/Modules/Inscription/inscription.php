<html>
    <head>
        <meta charset="utf-8">
        <title>SOS Partenaires</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="css/inscription.css">
        <link rel="icon" href="../../img/logo/logo-icon.png">    
    </head> 
    <body class="container">
		<div class="col-lg-6 intro-content cache" id="intro-content">
			<div class=" col-lg-12">
				<h1 align="center">Inscription</h1><br><br>
				<form  id="form_inscription" method="post" action="php/inscrip.php">
					 <div>
						<label>Prénom</label>
						<input type="text" class="form-control" id="prenom" placeholder="Entrez votre nom" name="prenom">
					  </div><br>
					  <div class="form-group">
						<label>Nom</label>
						<input type="text" class="form-control" id="nom" name="nom" placeholder="Entrez votre prénom">
					  </div>
						<div class="form-group">
						<label>Date de naissance</label>
						<input type="date" class="form-control" id="datenaissance" name="datenaissance">
					  </div>
					 <div class="form-group">
						<label for="">Téléphone</label>
						<input class="form-control" type="number" name="tel" id="tel" min="0000000000" max="0999999999" placeholder="xxxxxxxxxx">
					  </div>
					<div class="form-group">
						<label for="">Email</label>
						<input class="form-control" type="Email" name="email" id="email" placeholder="Entrez votre adresse E mail">
					  </div>
						<hr/>
					 <div class="form-group">
						<label>Adresse</label>
						 <textarea class="form-control" name="adresse" id="adresse" placeholder="Entrez votre adresse"></textarea>
					  </div>
					 <div class="form-group">
						<label for="">Ville</label>
						<input type="text" class="form-control" id="ville" name="ville" placeholder="Entrez votre ville">
					  </div>
					 <div class="form-group">
						<label for="">Pays</label>
						<select  class="form-control" id="pays" name="pays"></select> 
					  </div>
					<hr/>
					 <div class="form-group">
						<label>Login</label>
						 <input type="text" class="form-control" name="log" id="log" placeholder="Entrez votre login">
					  </div>
					 <div class="form-group">
						<label>Mot de passe</label>
						 <input type="password" class="form-control" name="mdp" id="mdp" placeholder="Entrez votre mot de passe">
					  </div>
                                        <hr>
                                         <div class="form-check" id="form_check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="1" name="conditions" id="conditions">
                                                J'accepte les <a href="#">conditions utilisateurs</a>
                                            </label>
                                          </div> 
                                        <hr>
					<a href="../../index.php" id="inscription">Retour</a><br><br>
                                       
					<div class="col-lg-6 col-md-6 col-sm-6 ">
						<input type="submit" class="btn btn-block btn_form" value="Inscription">
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6">
						<input type="reset" class="btn btn-block btn_form" value="Annuler">
					</div>
				</form>
			</div>
		</div>
	
    </body> 
    <footer>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="js/inscription.js"></script>
    </footer>
</html>