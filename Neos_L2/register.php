<?php
// vérifier si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // récupérer les données du formulaire
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $image = $_POST['image'];

    // valider les données
    $errors = [];

    if (empty($username)) {
        $errors[] = 'Le nom d\'utilisateur est obligatoire';
    }

    if (empty($email)) {
        $errors[] = 'L\'email est obligatoire';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'L\'email est invalide';
    }

    if (empty($password)) {
        $errors[] = 'Le mot de passe est obligatoire';
    } elseif (strlen($password) < 6) {
        $errors[] = 'Le mot de passe doit avoir au moins 6 caractères';
    }


    // vérifier si l'image a été téléchargée avec succès
    if (!empty($image)) {
        $image_path = 'images/' . basename($image);
        if (!move_uploaded_file($_POST['image']['tmp_name'], $image_path)) {
            $errors[] = 'Une erreur est survenue lors du téléchargement de l\'image';
        }
    }

    // si les données sont valides, enregistrer l'utilisateur dans la base de données
    if (empty($errors)) {
        // se connecter à la base de données avec PDO
        $dsn = 'mysql:host=localhost;dbname=neos';
        $username_db = 'root';
        $password_db = '';

        try {
            $db = new PDO($dsn, $username_db, $password_db);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'Connexion échouée : ' . $e->getMessage();
            exit();
        }

        // préparer la requête pour insérer l'utilisateur dans la base de données
        $stmt = $db->prepare('INSERT INTO users (username, email, password, image) VALUES (?, ?, ?, ?)');
        $stmt->execute([$username, $email, password_hash($password, PASSWORD_DEFAULT), $image]);

        // rediriger l'utilisateur vers la page de connexion
        header('Location: connexion.php');
        exit();
    }
}
?>

