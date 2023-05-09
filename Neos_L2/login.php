<?php
// Connexion à la base de données
try {
    $bdd = new PDO('mysql:host=localhost;dbname=neos;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
 
// Récupération des données du formulaire
$username = $_POST['username'];
$password = $_POST['password'];

// Requête préparée pour récupérer l'utilisateur correspondant au nom d'utilisateur fourni
$req = $bdd->prepare('SELECT id, username, password FROM users WHERE username = ?');
$req->execute(array($username));

// Vérification si l'utilisateur existe
if ($req->rowCount() == 1) {
    // L'utilisateur existe, on vérifie le mot de passe
    $user = $req->fetch();
    if (password_verify($password, $user['password'])) {
        // Le mot de passe est correct, on peut connecter l'utilisateur
        session_start();
        $_SESSION['username'] = $username;
        header('Location: map.php');
        exit();
    }
}

// L'utilisateur n'existe pas ou le mot de passe est incorrect, on affiche un message d'erreur
echo 'Mauvais nom d\'utilisateur ou mot de passe.';