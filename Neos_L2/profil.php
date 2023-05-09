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
    <title>Profil utilisateur</title>
    <link rel="stylesheet" type="text/css" href="styleProfil.css">
</head>

<body>

    <?php
    include("navigation.php");
    ?>
    <?php
    // Connexion à la base de données et récupération des informations sur l'utilisateur
    // Informations de connexion à la base de données
    $host = 'localhost';
    $dbname = 'neos';
    $user = 'root';
    $password = '';

    // Connexion à la base de données avec PDO
    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Erreur de connexion à la base de données : " . $e->getMessage();
    }

    // Démarrer la session
    session_start();

    // Requête SQL pour récupérer l'utilisateur existant dans la base de données en fonction de son username
    $username = $_SESSION['username'];

    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username");
    $stmt->bindParam(':username', $username);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);


    // Requête SQL pour récupérer du score existant dans la base de données en fonction de son username
    $score = $user['score'];

    $stmt = $pdo->prepare("SELECT score FROM users WHERE username = :username");
    $stmt->bindParam(':score', $score);
    $stmt->bindParam(':username', $username);


    ?>

    <h1>Profil de l'utilisateur : <?php echo $username; ?></h1>
    <div class="progress-bar" style="width: 150px;">
        <div class="progress-bar-fill" style="width : <?php echo $score; ?>%;"></div>

        <div class="progress-bar-scale">
            <?php for ($i = 0; $i <= 610; $i += 50) : ?>
                <div class="progress-bar-tick" style="left: <?php echo $i; ?>%;">
                    <?php if ($i % 50 == 0) : ?>
                        <span class="progress-bar-tick-label"><?php echo $i; ?></span>
                    <?php endif; ?>
                </div>
            <?php endfor; ?>
        </div>
    </div>
    <br><br>
    <div class="message" id="message"></div> <br><br>


    <script>
        // Récupération du score depuis la jauge
        const progressBarFill = document.querySelector(".progress-bar-fill");
        const score = Math.floor((progressBarFill.offsetWidth / progressBarFill.parentNode.offsetWidth) * 100);

        // Définition des paliers de 50 points et des messages correspondants
        const message = {
            0: "Aller encore un petit effort, tu vas y arriver",
            50: "Bravo, il y aura moins de pollution grâce à vous !",
            100: "Bravo, il y aura moins de fonte de glacier grâce à vous !",
            150: "Bravo, la biodiversité sera préservée grâce à vous !",
            200: "Bravo, la qualité de l'air sera améliorée grâce à vous !",
            250: "Bravo, il y aura moins de déchets dans la nature grâce à vous !",
            300: "Bravo, il y aura moins de gaspillage alimentaire grâce à vous !",
            350: "Bravo, il y aura moins de consommation d'énergie grâce à vous !",
            400: "Bravo, il y aura moins de gaspillage d'eau grâce à vous !",
            450: "Bravo, la planète vous dit merci !",
            500: "Bravo, les ours polairs ne vont plus avoir chaud ",
            550: "Bravo, la foret respire de nouveau ",
            600: "Bravo, vous êtes un(e) écolo aguerri(e) "
        };



        // Affichage du message correspondant au palier de 50 points atteint
        const messageElement = document.getElementById("message");
        for (let i = 50; i <= 610; i += 50) {
            if (score >= i) {
                messageElement.textContent = message[i];
            }
        }

        // Animation de la jauge
        progressBarFill.style.width = score + "%";
        progressBarFill.style.transition = "width 2s ease";
    </script>





    <h1>Rappels écologiques</h1>
    <form>
        <label for="date">Date:</label>
        <input type="date" id="date"><br><br>
        <label for="time">Heure:</label>
        <input type="time" id="time"><br><br>

        <label for="rappel">Rappel écologique:</label>
        <select id="rappel">
            <option value="">Choisissez un rappel</option>
            <option value="Eteindre les lumières">Eteindre les lumières</option>
            <option value="Prendre les escaliers">Prendre les escaliers</option>
            <option value="Utiliser un mug">Utiliser un mug</option>
            <option value="Acheter des produits en vrac">Acheter des produits en vrac</option>
            <option value="Utiliser un sac réutilisable">Utiliser un sac réutilisable</option>
            <option value="Planter un arbre">Planter un arbre</option>
        </select><br><br>

        <button type="button" onclick="setReminder()">Programmer le rappel</button>
    </form>
    <script>
        function setReminder() {
            let date = document.getElementById("date").value;
            let time = document.getElementById("time").value;
            let reminder = new Date(date + " " + time);

            let now = new Date();
            let delay = reminder.getTime() - now.getTime();

            if (delay < 0) {
                alert("La date et l'heure du rappel doivent être ultérieures à la date et l'heure actuelles.");
            } else {
                setTimeout(function() {
                    alert("C'est l'heure du rappel!");
                }, delay);
            }
        }
    </script>



</body>

</html>