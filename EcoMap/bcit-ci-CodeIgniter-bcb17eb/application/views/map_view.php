<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Carte Région Rhone</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
  
    <style>
        body {
            background-color: #FFD700;
            margin: 0;
        }
        #map {
            width: 80%;
            height: 100vh;
            float: left;
        }
        #cityList {
            width: 20%;
            height: 100vh;
            float: left;
            background-color: #FFD700;
            overflow-y: auto;
        }
    </style>
</head>

<body>

    <!-- Barre de recherche -->
    <input type="text" id="searchBar" onkeyup="filterCities()" placeholder="Rechercher une ville...">

    <div id="map"></div>
    
    <div id="cityList"></div>
    
    <script>
        var map = L.map('map').setView([45.7578137, 4.8320114], 10);

        L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>',
            maxZoom: 18,
        }).addTo(map);

        $.getJSON("http://localhost/prix-des-carburants-en-france-flux-instantane-v2(1).geojson", function(data) {
            var lieuxLayer = L.geoJSON(data, {
                // ... code existant pour les marqueurs et popups ...
            }).addTo(map);

            var lieuxListe = $("#cityList");
            data.features.forEach(function(feature) {
                var nom = feature.properties.ville; 
                var listItem = $("<div>")
                    .html("<b>" + nom + "</b>")
                    .appendTo(lieuxListe);

                listItem.click(function() {
                    var coord = feature.geometry.coordinates.reverse();
                    map.setView(coord, 25);
                });
            });
        });

        function filterCities() {
            var input = document.getElementById('searchBar');
            var filter = input.value.toUpperCase();
            var list = document.getElementById('cityList');
            var cities = list.getElementsByTagName('div'); 

            for (var i = 0; i < cities.length; i++) {
                var cityName = cities[i].textContent || cities[i].innerText;
                if (cityName.toUpperCase().indexOf(filter) > -1) {
                    cities[i].style.display = "";
                } else {
                    cities[i].style.display = "none";
                }
            }
        }
    </script>
</body>
</html>
