<!DOCTYPE html>
<html>
 
<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: connexion.php');
    exit();
}
?>

<head>
    <meta charset="UTF-8">
    <title>Liste d'associations éco-responsables</title>
    <link rel="stylesheet" type="text/css" href="styleAssociation.css">
</head>

<?php
    include("navigation.php"); 
?>

<body>
    <h1>Liste d'associations écoresponsables</h1>
    <div class="asso">

        <ul>
            <li>
                <a href="https://www.greenpeace.org/france/">Greenpeace France</a> - Organisation internationale de protection de l'environnement
            </li>
            <li>
                <a href="https://www.wwf.fr/">WWF France</a> - Organisation mondiale de protection de la nature
            </li>
            <li>
                <a href="https://www.amisdelaterre.org/">Les Amis de la Terre</a> - Association de défense de l'environnement
            </li>
            <li>
                <a href="https://www.fondation-nature-homme.org/">Fondation Nicolas Hulot pour la Nature et l'Homme</a> - Association de protection de la biodiversité et de lutte contre le changement climatique
            </li>
            <li>
                <a href="https://www.agirpourlenvironnement.org/">Agir pour l'Environnement</a> - Association citoyenne nationale de protection de l'environnement
            </li>
            <li>
                <a href="https://www.generations-futures.fr/">Génération Futures</a> - Association qui mène des enquêtes, des campagnes de sensibilisation...pour informer sur les risques de diverses pollutions
            </li>
            <li>
                <a href="https://fne.asso.fr/">France Nature Environnement</a> - Fédération pour mettre fin à la dégradation de la biodiversité et la surexploitation des ressources naturelles
            </li>
            <li>
                <a href="https://www.planetemer.org//">Planète Mer</a> - Association de préservation de la vie marine et des activités humaines qui en dépendent
            </li>
            <li>
                <a href="https://noe.org/">Noé</a> - Association dont la mission est de sauvegarder la biodiversité en France et à l’international
            </li>
            <li>
                <a href="https://www.mouvementdepalier.fr/">Mouvement Palier</a> - Mouvement de Palier propose des formations régulières et gratuites pour vous transformer en ambassadeur·ice
            </li>
        </ul>
    </div>
</body>

</html>
