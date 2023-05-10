<?php

// Informations de connexion à la base de données
$host = 'localhost';
$dbname = 'neos';
$username = 'root';
$password = '';

// Connexion à la base de données avec PDO
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Erreur de connexion à la base de données : " . $e->getMessage();
}

// Démarrer la session
session_start();

// Récupération de l'utilisateur connecté 
if(isset($_SESSION['username'])){
    $username = $_SESSION['username']; 

    // Insertion d'un score utilisateur
    if (isset($_POST['submit'])) { // Vérifie que le formulaire a été soumis
        $score = $_POST['score']; // Récupération du score depuis un formulaire POST

        // Requête SQL pour récupérer l'utilisateur existant dans la base de données en fonction de son username
        $stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username");
        $stmt->bindParam(':username', $username);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$user) { // Vérifie que l'utilisateur existe dans la base de données
            echo "Utilisateur non trouvé dans la base de données.";
        } else {
            // Requête SQL pour mettre à jour le score de l'utilisateur
            $stmt = $pdo->prepare("UPDATE users SET score = :score WHERE username = :username");
            $stmt->bindParam(':score', $score);
            $stmt->bindParam(':username', $username);

            if ($stmt->execute()) {
                echo "Score enregistré avec succès pour l'utilisateur $username !";
                header('Location: profil.php');
            } else {
                echo "Erreur lors de l'enregistrement du score pour l'utilisateur $username.";
            }
        }
    }
}
// Fermer la connexion à la base de données
$pdo = null;
?> 