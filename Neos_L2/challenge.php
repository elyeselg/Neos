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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Challenges</title>
    <link rel="stylesheet" type="text/css" href="styleChallenge.css">
</head>

<?php
    include("navigation.php"); 
?>

<body>
    <h1>Challenges éco-responsables</h1>

    <h2>Dans la salle de bains</h2>

    <div class="challenges-container">
        <div class="challenge">
            <input type="checkbox" id="challenge1" name="score" value="5" onchange="getScore()">
            <label for="challenge1"><span class="span1">Challenge 1 : </span><br>Remplacer vos cotons par leur versions lavable<br><span class="span2">Score : 5</span></label>
        </div>
        <div class="challenge">
            <input type="checkbox" id="challenge2" name="score" value="5" onchange="getScore()">
            <label for="challenge2"><span class="span1">Challenge 2 : </span><br>Remplacer votre brosse à dent classique par une brosse à dent à tête rechargeable<br><span class="span2">Score : 5</span></label>
        </div>
        <div class="challenge">
            <input type="checkbox" id="challenge3" name="score" value="10" onchange="getScore()">
            <label for="challenge3"><span class="span1">Challenge 3 : </span><br>Passez au solide : remplacer votre shampoing et gel douche par leur format solide<br><span class="span2">Score : 10</span></label>
        </div>
        <div class="challenge">
            <input type="checkbox" id="challenge4" name="score" value="10" onchange="getScore()">
            <label for="challenge4"><span class="span1">Challenge 4 : </span><br>Acheter des recharges (savon pour les mains, crème pour le corps, …) Plus écologique et plus économique<br><span class="span2">Score : 10</span></label>
        </div>
        <div class="challenge">
            <input type="checkbox" id="challenge5" name="score" value="10" onchange="getScore()">
            <label for="challenge5"><span class="span1">Challenge 5 : </span><br>Laissez de côté les déodorants aérosols nocif pour vous et l'environnement<br><span class="span2">Score : 10</span></label>
        </div>
        <div class="challenge">
            <input type="checkbox" id="challenge6" name="score" value="15" onchange="getScore()">
            <label for="challenge6"><span class="span1">Challenge 6 : </span><br>Remplacer vos rasoirs jetables par des rasoirs de sûreté<br><span class="span2">Score : 15</span></label>
        </div>
        <div class="challenge">
            <input type="checkbox" id="challenge7" name="score" value="20" onchange="getScore()">
            <label for="challenge7"><span class="span1">Challenge 7 : </span><br>Hygiène intime : remplacer vos protections jetables par des protections réutilisables<br><span class="span2">Score : 20</span></label>
        </div>
        <div class="challenge">
            <input type="checkbox" id="challenge8" name="score" value="20" onchange="getScore()">
            <label for="challenge8"><span class="span1">Challenge 8 : </span><br>Pendant deux semaines, stopper l'eau pendant que vous vous savonnez lors de votre douche<br><span class="span2">Score : 20</span></label>
        </div>
        <div class="challenge">
            <input type="checkbox" id="challenge9" name="score" value="20" onchange="getScore()">
            <label for="challenge9"><span class="span1">Challenge 9 : </span><br>Privilégier la douche pendant un mois au lieu de prendre un bain<br><span class="span2">Score : 20</span></label>
        </div>   
    </div>
    <br>

    <h2>Dans la cuisine</h2>

    <div class="challenges-container">
        <div class="challenge">
            <input type="checkbox" id="challenge10" name="score" value="5" onchange="getScore()">
            <label for="challenge10"><span class="span1">Challenge 10 : </span><br>Priviligiez des contenants en verre ou en aluminium (recyclable à l'infini)<br><span class="span2">Score : 5</span></label>
        </div>
        <div class="challenge">
            <input type="checkbox" id="challenge11" name="score" value="10" onchange="getScore()">
            <label for="challenge11"><span class="span1">Challenge 11 : </span><br>Optez pour du thé en vrac avec un infuseur réutilisables (et bien d'autres alternatives)<br><span class="span2">Score : 10</span></label>
        </div>
        <div class="challenge">
            <input type="checkbox" id="challenge12" name="score" value="10" onchange="getScore()">
            <label for="challenge12"><span class="span1">Challenge 12 : </span><br>Pas de gaspillage : finissez vos produits actuels avant d'en ouvrir un nouveau<br><span class="span2">Score : 10</span></label>
        </div>
        <div class="challenge">
            <input type="checkbox" id="challenge13" name="score" value="15" onchange="getScore()">
            <label for="challenge13"><span class="span1">Challenge 13 : </span><br>Remplacer votre sopalin par des tissus/microfibres réutilisables<br><span class="span2">Score : 15</span></label>
        </div>
        <div class="challenge">
            <input type="checkbox" id="challenge14" name="score" value="15" onchange="getScore()">
            <label for="challenge14"><span class="span1">Challenge 14 : </span><br>Remplacer vos éponges classiques par des alternatives plus respectueuses de l'environnement<br><span class="span2">Score : 15</span></label>
        </div>
        <div class="challenge">
            <input type="checkbox" id="challenge15" name="score" value="15" onchange="getScore()">
            <label for="challenge15"><span class="span1">Challenge 15 : </span><br>Remplacer votre liquide vaisselle chimique par un bloc de savon de marseille<br><span class="span2">Score : 15</span></label>
        </div>
        <div class="challenge">
            <input type="checkbox" id="challenge16" name="score" value="20" onchange="getScore()">
            <label for="challenge16"><span class="span1">Challenge 16 : </span><br>Optez pour un tapis en silicone alimentaire pour faire cuir vos meilleures recettes au four<br><span class="span2">Score : 20</span></label>
        </div>
        <div class="challenge">
            <input type="checkbox" id="challenge17" name="score" value="20" onchange="getScore()">
            <label for="challenge17"><span class="span1">Challenge 17 : </span><br>Abandonner le film plastique pour conserver vos plats et opter pour des charlottes de bol ou équivalent<br><span class="span2">Score : 20</span></label>
        </div>
        <div class="challenge">
            <input type="checkbox" id="challenge18" name="score" value="25" onchange="getScore()">
            <label for="challenge18"><span class="span1">Challenge 18 : </span><br>Optez pour du lait végétal pendant une semaine<br><span class="span2">Score : 25</span></label>
        </div>
        <div class="challenge">
            <input type="checkbox" id="challenge19" name="score" value="25" onchange="getScore()">
            <label for="challenge19"><span class="span1">Challenge 19 : </span><br>Pendant une semaine, cuisinez deux plats végétariens<br><span class="span2">Score : 25</span></label>
        </div>
        <div class="challenge">
            <input type="checkbox" id="challenge20" name="score" value="25" onchange="getScore()">
            <label for="challenge20"><span class="span1">Challenge 20 : </span><br>Pendant deux semaines, faites un détour chez les boucher ou le poissonier pour des produits locaux<br><span class="span2">Score : 25</span></label>
        </div> 
        <div class="challenge">
            <input type="checkbox" id="challenge21" name="score" value="30" onchange="getScore()">
            <label for="challenge21"><span class="span1">Challenge 21 : </span><br>Laissez de côté vos dosettes de café qui ne se recycle rarement, optez pour une meilleure alternative (selon vos machines)<br><span class="span2">Score : 30</span></label>
        </div>
        <div class="challenge">
            <input type="checkbox" id="challenge22" name="score" value="30" onchange="getScore()">
            <label for="challenge22"><span class="span1">Challenge 22 : </span><br>Laissez de côté les pack d'eau et optez pour le charbon ou les perles de céramique pour filtrer naturellement l'eau de votre robinet<br><span class="span2">Score : 30</span></label>
        </div>
        <div class="challenge">
            <input type="checkbox" id="challenge23" name="score" value="35" onchange="getScore()">
            <label for="challenge23"><span class="span1">Challenge 23 : </span><br>Installez un mousseur au bout de votre robinet. Pour réduire la consommation d'eau et améliorer la pression de l'eau<br><span class="span2">Score : 35</span></label>
        </div>  
    </div>  
    <br>

    <h2>Pour les courses</h2>

    <div class="challenges-container">
        <div class="challenge">
            <input type="checkbox" id="challenge24" name="score" value="5" onchange="getScore()">
            <label for="challenge24"><span class="span1">Challenge 24 : </span><br>Amenez vos sacs réutilisables (tote bag, sac de course)<br><span class="span2">Score : 5</span></label>
        </div>
        <div class="challenge">
            <input type="checkbox" id="challenge25" name="score" value="15" onchange="getScore()">
            <label for="challenge25"><span class="span1">Challenge 25 : </span><br>Lors de vos 4 prochaines courses, faite un tour au rayon anti-gaspi : vous pourrez peut-être sauver des produits<br><span class="span2">Score : 15</span></label>
        </div>
        <div class="challenge">
            <input type="checkbox" id="challenge26" name="score" value="15" onchange="getScore()">
            <label for="challenge26"><span class="span1">Challenge 26 : </span><br>Prennez seulement des fruits et légumes de saison<br><span class="span2">Score : 15</span></label>
        </div> 
        <div class="challenge">
            <input type="checkbox" id="challenge27" name="score" value="25" onchange="getScore()">
            <label for="challenge27"><span class="span1">Challenge 27 : </span><br>Acheter 100% de vrac (féculents...)<br><span class="span2">Score : 25</span></label>
        </div> 
    </div> 
    <br>

    <h2>Au quotidien</h2>

    <div class="challenges-container">
        <div class="challenge">
            <input type="checkbox" id="challenge28" name="score" value="5" onchange="getScore()">
            <label for="challenge28"><span class="span1">Challenge 28 : </span><br>Utilisez une gourde plutôt qu'une bouteille en plastique<br><span class="span2">Score : 5</span></label>
        </div> 
        <div class="challenge">
            <input type="checkbox" id="challenge29" name="score" value="5" onchange="getScore()">
            <label for="challenge29"><span class="span1">Challenge 29 : </span><br>Télécharger l'application "Guide du tri" pour vous accompagner dans votre tri des déchets<br><span class="span2">Score : 5</span></label>
        </div> 
        <div class="challenge">
            <input type="checkbox" id="challenge30" name="score" value="10" onchange="getScore()">
            <label for="challenge30"><span class="span1">Challenge 30 : </span><br>Trier vos déchets pendant une semaine<br><span class="span2">Score : 10</span></label>
        </div> 
        <div class="challenge">
            <input type="checkbox" id="challenge31" name="score" value="15" onchange="getScore()">
            <label for="challenge31"><span class="span1">Challenge 31 : </span><br>Pendant la prochaine semaine de soleil : faite sécher vos vêtements au lieu d'utiliser le sèche linge<br><span class="span2">Score : 15</span></label>
        </div>
        <div class="challenge">
            <input type="checkbox" id="challenge32" name="score" value="15" onchange="getScore()">
            <label for="challenge32"><span class="span1">Challenge 32 : </span><br>Lors de fortes chaleur : fermer les volets pour garder la fraicheur<br><span class="span2">Score : 15</span></label>
        </div> 
        <div class="challenge">
            <input type="checkbox" id="challenge33" name="score" value="15" onchange="getScore()">
            <label for="challenge33"><span class="span1">Challenge 33 : </span><br>Trier vos placards et donner vie à vos objets<br><span class="span2">Score : 15</span></label>
        </div>
        <div class="challenge">
            <input type="checkbox" id="challenge34" name="score" value="15" onchange="getScore()">
            <label for="challenge34"><span class="span1">Challenge 34 </span><br>Pour votre prochaine lecture, regardez d'abord de seconde main sinon privilégiez votre libraire <br><span class="span2">Score : 15</span></label>
        </div>
        <div class="challenge">
            <input type="checkbox" id="challenge35" name="score" value="20" onchange="getScore()">
            <label for="challenge35"><span class="span1">Challenge 35 : </span><br>Vinted et leboncoin sont vos meilleurs amis : achetez votre prochain objet de seconde main<br><span class="span2">Score : 20</span></label>
        </div>
        <div class="challenge">
            <input type="checkbox" id="challenge36" name="score" value="20" onchange="getScore()">
            <label for="challenge36"><span class="span1">Challenge 36 : </span><br>Ne jettez pas vos cartons d'envoi mais réutilisez les pour votre prochaine vente de seconde main<br><span class="span2">Score : 20</span></label>
        </div> 
        <div class="challenge">
            <input type="checkbox" id="challenge37" name="score" value="25" onchange="getScore()">
            <label for="challenge37"><span class="span1">Challenge 37 : </span><br>Pensez à réparer avant de jeter (électronique, électroménager, vetements, …)<br><span class="span2">Score : 25</span></label>
        </div> 
        <div class="challenge">
            <input type="checkbox" id="challenge38" name="score" value="25" onchange="getScore()">
            <label for="challenge38"><span class="span1">Challenge 38 : </span><br>Avant de jeter : réfléchissez si son utilisation est encore possible ou non (même d'une autre manière)<br><span class="span2">Score : 25</span></label>
        </div>
        <div class="challenge">
            <input type="checkbox" id="challenge39" name="score" value="25" onchange="getScore()">
            <label for="challenge39"><span class="span1">Challenge 39 : </span><br>Désencombrage : recycler vos piles, ampoules, et produits électriques dans un endroit adapté<br><span class="span2">Score : 25</span></label>
        </div>  
        <div class="challenge">
            <input type="checkbox" id="challenge40" name="score" value="35" onchange="getScore()">
            <label for="challenge40"><span class="span1">Challenge 40 : </span><br>Lors de votre prochaine balade, profitez en pour faire un clean walk (nettoyez les déchets)<br><span class="span2">Score : 35</span></label>
        </div> 
        <div class="challenge">
            <input type="checkbox" id="challenge41" name="score" value="40" onchange="getScore()">
            <label for="challenge41"><span class="span1">Challenge 41 : </span><br>A votre échelle : créer votre potager pour récolter des aliments d'où vous saurez la provenance<br><span class="span2">Score : 40</span></label>
        </div> 
    </div>

    <br><br><br><br>

    <form action="score.php" method="post" enctype="multipart/form-data">
        <div class="score"><img src="fleur.png">Score total :<span id="score">0</span></div>
        <input type="hidden" name="score" id="score-input" value="0">
        <button type="submit" name="submit">Valider</button>
    </form>


    <script>
        function getScore() {
            let score = 0;
            const checkboxes = document.querySelectorAll('input[name="score"]:checked');
            checkboxes.forEach((checkbox) => {
                score += parseInt(checkbox.value);
            });
            document.getElementById('score').innerText = score;
            document.getElementById("score-input").value = score;
        }

        function displayScore() {
            const score = document.getElementById('score').innerText;
            alert(`Votre score est de ${score} points.`);
        }
    </script>
</body>

</html>
