<?php
include('config.php');

//DSN staat voor data sourcename.
$dsn = "mysql:host=$dbHost;dbname=$dbName;charset=UTF8";

try {
    $pdo = new PDO($dsn, $dbUser, $dbPass);
    echo "Er is een verbinding met de database";
} catch(PDOException $e) {
    echo "Er is helaas geen verbinding met de database.<br>
         Neem contact op met de administrator";
    echo "Systeemmelding: " . $e->getMessage();
}
//sql query gemaakt voor het inserten van een record
$sql = "INSERT INTO Afspraak (Id
                            ,First_color
                            ,Second_color
                            ,Third_color
                            ,Fourth_color
                            ,Phonenumber
                            ,email
                            ,date
                            ,Choice)
        VALUES              (NULL
                            ,:First_color
                            ,:Second_color
                            ,:Third_color
                            ,:Fourth_color
                            ,:phone
                            ,:email
                            ,:date
                            ,:checkbox)";
//Maak de query gereed met de prepare-method van het $pdo-object
$statement = $pdo->prepare($sql);
$statement->bindValue(':First_color', $_POST['First_color'], PDO::PARAM_STR);
$statement->bindValue(':Second_color', $_POST['Second_color'], PDO::PARAM_STR);
$statement->bindValue(':Third_color', $_POST['Third_color'], PDO::PARAM_STR);
$statement->bindValue(':Fourth_color', $_POST['Fourth_color'], PDO::PARAM_STR);
$statement->bindValue(':phone', $_POST['phone'], PDO::PARAM_STR);
$statement->bindValue(':email', $_POST['email'], PDO::PARAM_STR);
$statement->bindValue(':date', $_POST['date'], PDO::PARAM_STR);
$statement->bindValue(':checkbox', $_POST['checkbox'], PDO::PARAM_STR);
//Vuur de query af op de database...
$statement->execute();

// Hiermee sturen we automatisch door naar de pagina read.php
header('Location: read.php');