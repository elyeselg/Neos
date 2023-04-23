<!DOCTYPE html>
<html>
<head>
	<title>Connexion</title>
	<link rel="stylesheet" type="text/css" href="styleLog.css">
</head>
<body>
	<div class="container">
		<form action="login.php" method="post">

			<h2>Connexion</h2>

			<label for="username">Nom d'utilisateur:</label>
			<input type="text" name="username" required>

			<label for="password">Mot de passe:</label>
			<input type="password" name="password" required>

			<button type="submit" name="submit">Se connecter</button>

			<p>Pas encore inscrit? <a href="inscription.php">Inscrivez-vous ici</a></p>
		</form>
	</div>

	<div class="logo">
        <a href="connexion.php">
            <img src="Neos.png" alt="Logo">
        </a>
    </div>
</body>
</html>