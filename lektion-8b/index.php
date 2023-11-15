<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hemsidan</title>
</head>
<body>
    <nav>
        <a href="?page=home">Hem</a>
        <a href="?page=history">Historia</a>
        <a href="?page=jobs">Lediga jobb</a>
    </nav>

    <?php 
        $page = $_GET["page"];

        if (!$page) { 
            // ! betyder "not", "if not $page"
            // om $page inte finns, sätt $page till "home"
            $page = "home";
        }

        include "./content/" . $page  . ".php"; 
    ?>
    
    <p><a href="../lektion-8/">Tillbaka till Lektion 8</a></p>
</body>
</html>