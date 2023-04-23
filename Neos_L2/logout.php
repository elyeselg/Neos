<?php
// Début de session
session_start();

// Destruction de la session
session_destroy();

// Redirection vers la page de connexion
header('Location: connexion.php');
exit();
?>