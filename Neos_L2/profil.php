<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Page profil</title>
    <link rel="stylesheet" href="styleProfil.css">
</head>

<body>
    <header>
        <h1>Mon profil</h1>
        <img src="avatar.png" alt="Mon avatar">
    </header>
    <main>
        <h2>Mon score</h2>
        <div id="score"></div>
        <h2>Mon niveau</h2>
        <div id="niveau">
            <div id="barre"></div>
        </div>
        <h2>Mes éco-actions</h2>
        <ul>
            <li>
                <input type="checkbox" id="action1">
                <label for="action1">Action 1</label>
            </li>
            <li>
                <input type="checkbox" id="action2">
                <label for="action2">Action 2</label>
            </li>
            <li>
                <input type="checkbox" id="action3">
                <label for="action3">Action 3</label>
            </li>
        </ul>
    </main>
    <footer>
        <a href="map.php">Aller à la carte</a>
    </footer>


    <script>
        // Récupération des éléments HTML
        const avatarImg = document.getElementById("avatar-img");
        const scoreDiv = document.getElementById("score-div");
        const niveauDiv = document.getElementById("niveau-div");
        const rappelsList = document.getElementById("rappels-list");

        // Récupération du score de l'utilisateur depuis la base de données
        const userScore = 50; // remplacer par le score récupéré depuis la base de données

        // Affichage du score dans la vignette dédiée
        scoreDiv.textContent = `Score: ${userScore}`;

        // Calcul du niveau en fonction du score
        const niveau = Math.floor(userScore / 10);

        // Affichage du niveau dans la vignette dédiée
        niveauDiv.textContent = `Niveau ${niveau}`;

        // Affichage de la barre de niveau en fonction du score
        niveauDiv.dataset.niveau = niveau;
        const niveauBar = document.createElement("div");
        niveauBar.classList.add("niveau-bar");
        niveauBar.style.width = `${(userScore % 10) * 10}%`;
        niveauDiv.appendChild(niveauBar);

        // Récupération de la liste des rappels écoresponsables depuis la base de données
        const rappels = [
            "Prendre les transports en commun ou le vélo",
            "Acheter des produits locaux et de saison",
            "Réduire sa consommation d'eau",
            "Recycler les déchets",
            "Éteindre les lumières inutiles",
        ];

        // Affichage de la liste des rappels dans la page
        rappels.forEach((rappel) => {
            const li = document.createElement("li");
            li.textContent = rappel;
            rappelsList.appendChild(li);
        });

        // Affichage d'une bulle de rappel dans la carte
        const map = L.map("map").setView([45.7578137, 4.8320114], 13);
        L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>',
            maxZoom: 18,
        }).addTo(map);
        const rappelMarker = L.marker([45.762, 4.83]).addTo(map);
        rappelMarker.bindPopup("N'oubliez pas de prendre les transports en commun aujourd'hui !");
    </script>
</body>

</html>