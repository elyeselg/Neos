<!DOCTYPE html>
<html lang="en">

<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: connexion.php');
    exit();
}
?>

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Carte Lyon</title>

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="styleMap.css">

    <style>
        #map {
            width: 80%;
            height: 100vh;
            float: left;
        }

        .listLieux {
            width: 20%;
            height: 100%;
            float: left;
        }
    </style>

</head>

<body>
    <div id="map"></div>
    <div class="listLieux"></div>





    <script>
        var map = L.map('map').setView([45.7578137, 4.8320114], 13);

        L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>',
            maxZoom: 18,
        }).addTo(map);

        // chargement du fichier GeoJSON
        $.getJSON("http://localhost/lyonEco.geoJson", function(data) {
            // création d'une couche GeoJSON et ajout à la carte
            var lieuxLayer = L.geoJSON(data).addTo(map);

            // création de la liste des lieux
            var lieuxListe = $(".listLieux");
            data.features.forEach(function(feature) {
                // création d'un élément de la liste pour chaque feature
                var nom = feature.properties.name;
                var listItem = $("<div>")
                    .html("<b>" + nom)
                    .appendTo(lieuxListe);

                // au clic sur un élément de la liste, centrage de la carte sur le feature correspondant
                listItem.click(function() {
                    var coord = feature.geometry.coordinates.reverse();
                    map.setView(coord, 25);
                });
            });

            // Création d'un marker pour chaque lieu
            data.features.forEach(function(lieu) {
                var marker = L.marker([lieu.geometry.coordinates[1], lieu.geometry.coordinates[0]])
                    .addTo(map)
                    .bindPopup("<b>" + lieu.properties.name + "</b><br>" + lieu.properties.description + "</b><br>" + lieu.properties.address);


            });
        });

        
    </script>


    <form method="post" action="logout.php">
        <button type="submit">Se déconnecter</button>
    </form><br><br>

    <button onclick="location.href='association.php'">Association</button><br><br>
    <button onclick="location.href='challenge.php'">Challenges</button><br><br>
    <button onclick="location.href='profil.php'">Profil</button><br><br>




</body>

</html>