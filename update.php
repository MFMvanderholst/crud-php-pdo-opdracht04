<?php 
// verbinding gegevens
    include('config.php');

    $dsn = "mysql:host=$dbHost;dbname=$dbName;charset=UTF8";

    try {
        // Maak een nieuw PDO object zodat je verbinding hebt met de musql database
        $pdo = new PDO($dsn, $dbUser, $dbPass);
        if ($pdo) {
            //echo "Er is verbinding";
        } else {
            echo "Interne server-error";
        }
        
    } catch (PDOException $e) {
        $e->getMessage();
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        try {
        // Maak een update query voor het updaten van een record
        $sql = "UPDATE persoon
                SET Voornaam = :Voornaam,
                    Tussenvoegsel = :Tussenvoegsel,
                    Achternaam = :Achternaam,
                    Telefoonnummer = :Telefoonnummer,
                    Straatnaam = :Straatnaam,
                    Huisnummer = :Huisnummer,
                    Woonplaats = :Woonplaats,
                    Postcode = :Postcode,
                    Landnaam = :Landnaam
                WHERE Id = :Id";

            

                //Roep de prepare-method aan van het PDO-object $pdo
                $statement = $pdo->prepare($sql);

                //We moeten de placeholders een waarde geven in de sql-query
                $statement->bindValue(':Id', $_POST['Id'], PDO::PARAM_INT);
                $statement->bindValue(':First_color', $_POST['First_color'], PDO::PARAM_STR);
                $statement->bindValue(':Second_color', $_POST['Second_color'], PDO::PARAM_STR);
                $statement->bindValue(':Third_color', $_POST['Third_color'], PDO::PARAM_STR);
                $statement->bindValue(':Fourth_color', $_POST['Fourth_color'], PDO::PARAM_STR);
                $statement->bindValue(':Phonenumber', $_POST['Phonenumber'], PDO::PARAM_STR);
                $statement->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
                $statement->bindValue(':date', $_POST['date'], PDO::PARAM_STR);
                $statement->bindValue(':Choice', $_POST['Choice'], PDO::PARAM_STR);
                

                // We gaan de query uitvoeren op de mysql-server
                $statement->execute();

                echo "Het record is geupdate";
                header("Refresh:3 read.php");

        } catch(PDOException $e) {
            echo "Het record is niet geupdate";
            header("Refresh:3 read.php");
        }
        
        exit();
    }

    $sql = 'SELECT * FROM Afspraak
            WHERE Id = :Id';
    $statement = $pdo->prepare($sql);

    $statement->bindValue(':Id', $_GET['Id'], PDO::PARAM_INT);

    $statement->execute();

    $result = $statement->fetch(PDO::FETCH_OBJ);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- meta -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- links -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="scss/style.scss">
    <!-- url titel -->
    <title>PHP-CRUD-2209a</title>
</head>
<body>
<h1>Bling Bling Nail Studio Chantal</h1>
    <!-- Formulier -->
    <form action="create.php" method="post">
        <div class="color">

            <h4>Kies 4 basiskleuren voor uw nagels:</h4>

            <label for="First_color">
               
            </label>
            <input type="color" name="First_color" id="First_color" value="#ff0000">

            <label for="Second_color">
               
            </label>
            <input type="color" name="Second_color" id="Second_color" value="#DA70D6">

            <label for="Third_color">
               
            </label>
            <input type="color" name="Third_color" id="Third_color" value="#4B0082">

            <label for="Fourth_color">
               
            </label>
            <input type="color" name="Fourth_color" id="Fourth_color" value="#FFA500">
        </div>
            
        <label for="phone">
            Uw telefoonnummer:
        </label>
        <!-- <input type="tel" name="phone" id="phone" placeholder="06-23415674" patern="[0-6] {2}-[0-9] {20}"> -->
        <input type="tel" name="phone" id="phone" placeholder="+31 6 2341 56 74" patern="[+31] {1}-[6] {2}-[0-9] {20}" required>

        <label for="email">
            Uw e-mailadres:
        </label>
        <input type="email" name="email" id="email" placeholder="randomguy@outlook.com">

        <label for="date">
            Afspraak datum:
        </label>
        <input type="datetime-local" name="date" id="date">

        <div class="ckeckbox">
            <p>Soort behandeling:</p>

            <input type="checkbox" id="checkbox" name="checkbox" value="Nagelbijt arrangement(termijnbetaling mogelijk) €180">
            <label for="checkbox">
                Nagelbijt arrangement(termijnbetaling mogelijk) €180
            </label>

            <input type="checkbox" id="checkbox" name="checkbox" value="Luxe manicure (massage en handpakking) €30.00">
            <label for="checkbox">
                Luxe manicure (massage en handpakking) €30.00
            </label>

            <input type="checkbox" id="checkbox" name="checkbox" value="Nagelreparatie per nagel (in eerste week gratis) €5.00">
            <label for="checkbox">
                Nagelreparatie per nagel (in eerste week gratis) €5.00
            </label>
        </div>
        
        <input type="submit" value="Sla op">
        <input type="reset" value="Reset">
    </form>
    
</body>
</html>