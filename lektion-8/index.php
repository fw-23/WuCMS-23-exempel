<?php
    $page_title = "Lektion 8";
    $tal = 7*7;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
</head>
<body>

    <?php include "menu.php"; ?>

    <h2><?php echo $page_title; ?></h2>

    <?php 
        //         $_GET[] används för att komma åt URL-variabler
        $weather = $_GET["weather"];

        if ($weather == "rainy") {
            echo "<p>🌧️ Det regnar, kom ihåg paraplyet!</p>";
        } else if ($weather == "sunny") {
            echo "<p>☀️ Det är soligt, kom ihåg solkrämen!</p>";
        } else if ($weather == "snowy") {
            echo "<p>❄️ Det snöar, bygg en snögubbe!</p>";            
        } else {
            echo "<p>Okänt väder</p>";
        }
    ?>

    <p>
        <!-- ? betyder URL-parametrar (variabler) -->
        <a href="?weather=sunny">Sol</a>
        <a href="?weather=rainy">Regn</a>
        <a href="?weather=snowy">Snö</a>
    </p>
    

    <?php 
        $greeting = "Hello!";
        echo $greeting;

        // man kan skriva variabler direkt i teckensträngar
        echo "<i> $tal </i>";

        // Ibland måste man skilja på variabler och teckensträngar med punkt (konkatenering)
        echo "<b>" . $tal . "</b>";
    ?>

    <h5>Mera innehåll</h5>


</body>
</html>