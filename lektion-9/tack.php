<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tack!</title>
</head>
<body>
    <?php
        // print_r "dumpar" ut allting ur en viss variabel
        // print_r($_POST);

        /* här kan vi skriva kod som t.ex. sparar meddelandet 
        i databas och skickar till personalen*/

    ?>

    <!-- if-sats med uppdelat syntax -->
    <?php if ($_POST["namn"]) { ?>
        <!-- om "namn" från formuläret har ett värde... -->
        <p>Tack för ditt meddelande, <?php echo $_POST["namn"]; ?>, vi svarar inom kort!</p>

    <?php } else { ?>
        <!-- annars... -->
        <p>Du måste skriva ditt namn!</p>

    <?php } ?>

    <a href="./">Tillbaka</a>
    
</body>
</html>