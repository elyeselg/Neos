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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Challenges</title>
    <link rel="stylesheet" type="text/css" href="styleChallenge.css">
</head>

<body>

    <div class="challenges-container">
        <div class="challenge">
            <input type="checkbox" id="challenge1" name="score" value="5" onchange="getScore()">
            <label for="challenge1">Challenge 1 - Score: 5</label>
        </div>
        <div class="challenge">
            <input type="checkbox" id="challenge2" name="score" value="6" onchange="getScore()">
            <label for="challenge2">Challenge 2 - Score: 6</label>
        </div>
        <div class="challenge">
            <input type="checkbox" id="challenge3" name="score" value="10" onchange="getScore()">
            <label for="challenge3">Challenge 3 - Score: 10</label>
        </div>
        <div class="challenge">
            <input type="checkbox" id="challenge4" name="score" value="8" onchange="getScore()">
            <label for="challenge4">Challenge 4 - Score: 8</label>
        </div>
        <div class="challenge">
            <input type="checkbox" id="challenge5" name="score" value="11" onchange="getScore()">
            <label for="challenge5">Challenge 5 - Score: 11</label>
        </div>
        <div class="challenge">
            <input type="checkbox" id="challenge6" name="score" value="9" onchange="getScore()">
            <label for="challenge6">Challenge 6 - Score: 9</label>
        </div>
        <div class="challenge">
            <input type="checkbox" id="challenge7" name="score" value="4" onchange="getScore()">
            <label for="challenge7">Challenge 7 - Score: 4</label>
        </div>
        <div class="challenge">
            <input type="checkbox" id="challenge8" name="score" value="7" onchange="getScore()">
            <label for="challenge8">Challenge 8 - Score: 7</label>
        </div>
        <div class="challenge">
            <input type="checkbox" id="challenge9" name="score" value="12" onchange="getScore()">
            <label for="challenge9">Challenge 9 - Score: 12</label>
        </div>
        <div class="challenge">
            <input type="checkbox" id="challenge10" name="score" value="14" onchange="getScore()">
            <label for="challenge10">Challenge 10 - Score: 14</label>
        </div>
        <div class="challenge">
            <input type="checkbox" id="challenge11" name="score" value="2" onchange="getScore()">
            <label for="challenge11">Challenge 11 - Score: 2</label>
        </div>
        <div class="challenge">
            <input type="checkbox" id="challenge12" name="score" value="1" onchange="getScore()">
            <label for="challenge12">Challenge 12 - Score: 1</label>
        </div>
        <div class="challenge">
            <input type="checkbox" id="challenge13" name="score" value="16" onchange="getScore()">
            <label for="challenge13">Challenge 13 - Score: 16</label>
        </div>
        <div class="challenge">
            <input type="checkbox" id="challenge14" name="score" value="18" onchange="getScore()">
            <label for="challenge14">Challenge 14 - Score: 18</label>
        </div>
        <div class="challenge">
            <input type="checkbox" id="challenge15" name="score" value="19" onchange="getScore()">
            <label for="challenge15">Challenge 15 - Score: 19</label>
        </div>
        <div class="challenge">
            <input type="checkbox" id="challenge16" name="score" value="15" onchange="getScore()">
            <label for="challenge16">Challenge 16 - Score: 15</label>
        </div>
        <div class="challenge">
            <input type="checkbox" id="challenge17" name="score" value="13" onchange="getScore()">
            <label for="challenge17">Challenge 17 - Score: 13</label>
        </div>
        <div class="challenge">
            <input type="checkbox" id="challenge18" name="score" value="17" onchange="getScore()">
            <label for="challenge18">Challenge 18 - Score: 17</label>
        </div>
        <div class="challenge">
            <input type="checkbox" id="challenge19" name="score" value="20" onchange="getScore()">
            <label for="challenge19">Challenge 19 - Score: 20</label>
        </div>
        <div class="challenge">
            <input type="checkbox" id="challenge20" name="score" value="3" onchange="getScore()">
            <label for="challenge20">Challenge 20 - Score: 3</label>
        </div>

    </div>

    <form action="score.php" method="post" enctype="multipart/form-data">
        <div>Score total: <span id="score">0</span></div><br><br>
        <input type="hidden" name="score" id="score-input" value="0">
        <button type="submit" name="submit">Envoyer</button>
    </form>

    <br><br>

    <button onclick="location.href='map.php'">Carte</button><br><br>




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