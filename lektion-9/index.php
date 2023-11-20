<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Lektion 9</h2>

    <h5>Skicka feedback</h5>
    <form method="post" action="tack.php"> 
        <!-- form ska i princip allrid vara method="post"
            action ==> vart formuläret skickas, kan lämnas bort (skickas till denna sida) -->
        
        <!-- input type="text" är ett vanligt textfält -->
        <input name="namn" type="text" placeholder="Namn"><br>
        <input name="email" type="text" placeholder="E-post"><br>

        <!-- textarea är ett större öppet textfält, obligatorisk end-tag! -->
        <textarea name="msg"  placeholder="Skriv ditt meddelande..."></textarea><br>
        
        <!-- input type="submit" skapar en knapp som skickar iväg formuläret -->
        <input type="submit" value="Skicka">

    </form>

    <h5>Logga in</h5>
    <?php
        // vi kan ha flera villkor med AND, alltså && 
        if ($_POST["username"] == "fredde" && $_POST["password"] == "password123") {
            /* OBS: på riktigt skulle användarnamnet och lösenordet INTE vara 
                hårdkodade utan kollas i sidans databas. */
            
            echo "Grattis, du är inloggad!";
        }
    ?>

    <!-- om vi lämnar bort action skickas formuläret tillbaks till denna sida-->
    <form method="post">
        <input type="text" name="username" placeholder="Användarnamn"><br>
        <input type="password" name="password" placeholder="Lösenord"><br>
        <input type="submit" value="Logga in">

    </form>
</body>
</html>