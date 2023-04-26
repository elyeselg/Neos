<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Défis écoresponsables</title>
</head>

<body>
    <h1>Défis écoresponsables</h1>
    <div id="defis"></div>
    <div id="score"></div>



    <script>
        // Définition des défis avec leur score
        const defis = [{
                nom: "Prendre les transports en commun",
                score: 5
            },
            {
                nom: "Manger des produits locaux",
                score: 10
            },
            {
                nom: "Réduire sa consommation d'eau",
                score: 15
            },
            {
                nom: "Utiliser une gourde plutôt que des bouteilles en plastique",
                score: 5
            },
            {
                nom: "Faire du compost",
                score: 10
            },
            {
                nom: "Réduire sa consommation de viande",
                score: 20
            },
            {
                nom: "Éteindre les lumières en quittant une pièce",
                score: 5
            },
            {
                nom: "Acheter des produits d'occasion",
                score: 10
            },
            {
                nom: "Utiliser des sacs réutilisables pour faire ses courses",
                score: 5
            },
            {
                nom: "Éviter les produits jetables",
                score: 10
            },
            {
                nom: "Planter des arbres",
                score: 15
            },
            {
                nom: "Réduire sa consommation d'électricité",
                score: 20
            },
        ];

        // Variables globales
        let defisValides = [];
        let scoreTotal = 0;
        let defisAffiches = 0;

        // Fonction pour afficher les défis
        // Fonction d'affichage des défis
        function afficherDefis() {
            // Sélection des 5 défis suivants non encore validés
            const defisRestants = defis.filter(defi => !defisValides.includes(defi));
            const defisAAfficher = defisRestants.slice(0, 5);

            // Construction du tableau HTML des défis
            let html = "<table><tr><th>Défi</th><th>Score</th><th>Valider</th></tr>";
            for (const defi of defisAAfficher) {
                html += `<tr><td>${defi.titre}</td><td>${defi.score} points</td><td><button onclick="validerDefi('${defi.titre}', ${defi.score})">Valider</button></td></tr>`;
            }
            html += "</table>";

            // Affichage du tableau HTML des défis
            const divDefis = document.getElementById("defis");
            divDefis.innerHTML = html;

            // Mise à jour du nombre de défis affichés
            defisAffiches += defisAAfficher.length;
        }

        // Fonction de validation d'un défi
        function validerDefi(titre, score) {
            // Ajout du défi validé à la liste des défis validés
            defisValides.push(titre);
            // Ajout du score du défi validé au score total
            scoreTotal += score;
            // Affichage du score total mis à jour
            const divScore = document.getElementById("score");
            divScore.innerHTML = `Score total : ${scoreTotal} points`;

            // Si tous les défis affichés sont validés, on réinitialise la liste des défis validés et on affiche les 5 suivants
            if (defisAffiches >= 5 && defisValides.length === defisAffiches) {
                defisValides = [];
                scoreTotal = 0;
                defisAffiches = 0;
                afficherDefis();
            }
        }



        // Fonction d'initialisation de la page
        function init() {
            // Affichage des premiers défis
            afficherDefis();

            // Affichage du score total
            const divScore = document.getElementById("score");
            divScore.innerHTML = `Score total : ${scoreTotal} points`;
        }

        // Appel de la fonction d'initialisation au chargement de la page
        window.onload = init;
    </script>

</body>

</html>