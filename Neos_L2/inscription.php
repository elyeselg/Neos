<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Inscription</title>
	<link rel="stylesheet" type="text/css" href="styleLog.css">
</head>

<body> 
	//Barre d'en-tête
	<div class="header">
        	<img src ="logo_clair.png">
        	<p>Néos<br>Le guide pour devenir éco-responsable</p>
    	</div>

	<form action="register.php" method="post" enctype="multipart/form-data">
		
		<h2>Inscription</h2>

		<label for="username">Nom d'utilisateur</label>
		<input type="text" name="username" required><p><p>

		<label for="email">Adresse e-mail</label>
		<input type="email" name="email" required><p><p>

		<label for="password">Mot de passe</label>
		<input type="password" name="password" required><p><p>

		<label for="confirm_password">Confirmer le mot de passe</label>
		<input type="password" name="confirm_password" required><p><p>

		<button type="submit">S'inscrire</button><p><p>

		<p>Déjà un compte ? <a href="connexion.php">Se connecter</a></p>
</body>

</html> 
