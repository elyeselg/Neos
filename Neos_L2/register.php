<?php
// Connexion à la base de données
try {
    $bdd = new PDO('mysql:host=localhost;dbname=neos;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

// Récupération des données du formulaire
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$hashed_password = password_hash($password, PASSWORD_DEFAULT);
$score = isset($_POST['score']) ? $_POST['score'] : 0;


// Requête préparée pour insérer un nouvel utilisateur dans la base de données
$req = $bdd->prepare('INSERT INTO users(email, username, password, score) VALUES(?, ?, ?, ?)');
$req->execute(array($email, $username, $hashed_password, $score ));

// Redirection vers la page de connexion
header('Location: connexion.php');
?>