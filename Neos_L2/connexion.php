<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Connexion</title>
	<link rel="stylesheet" type="text/css" href="styleLog.css">
</head>

<body>
	<div class="header">
		<img src ="logo.png">
		<p>Néos<br>Le guide pour devenir éco-responsable</p>
	</div>

	<div class="container">
		<form action="login.php" method="post">
			<form action="score.php" method="post" enctype="multipart/form-data">

				<h2>Connexion</h2>

				<label for="username">Nom d'utilisateur:</label>
				<input type="text" name="username" required>

				<label for="password">Mot de passe:</label>
				<input type="password" name="password" required>

				<button type="submit" name="submit">Se connecter</button>

				<p>Pas encore inscrit ? <a href="inscription.php">Inscrivez-vous ici</a></p>
			</form>
	</div>
</body>

</html>
