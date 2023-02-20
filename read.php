<?php 
// contact maken met config.php
include('config.php');

$dsn = "mysql:host=$dbHost;dbname=$dbName;charset=UTF8";

try {
    $pdo = new PDO($dsn, $dbUser, $dbPass);
    if ($pdo) {
        // echo "Er is een verbinding met de musql server";
    } else {
        echo "Er is een interne server error opgetreden";
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}


$sql = "SELECT Id
               ,First_color
               ,Second_color
               ,Third_color
               ,Fourth_color
               ,Phonenumber
               ,email
               ,date
               ,Choice
                FROM Afspraak";

$statement = $pdo->prepare($sql);
$statement->execute();
// Zet opgezette bestand in een array
$result = $statement->fetchAll(PDO::FETCH_OBJ);


$tableRows = "";

foreach($result as $info) {
    $tableRows .= "<tr>
                    <td>$info->First_color</td>
                    <td>$info->Second_color</td>
                    <td>$info->Third_color</td>
                    <td>$info->Fourth_color</td>
                    <td>$info->Phonenumber</td>
                    <td>$info->email</td>
                    <td>$info->date</td>
                    <td>$info->Choice</td>
                    <td>
                        <a href='delete.php?Id=$info->Id'>
                            <img src='img/rood-kruis-png-.avif' alt='cross' alt='cross' style='width: 40px;'>
                        </a>
                    </td>
                    <td>
                        <a href='update.php?Id=$info->Id'>
                            <img src='img/b_edit.png' alt='cross' alt='cross' style='width: 40px;'>
                        </a>
                    </td>
                  </tr>";
}
?>

<h3>Nagel informatie</h3>

<a href="index.php">
    <input type="button" value="Maak een nieuw record">
</a>

<br><br>

<table border='1'>
    <thead>
        <th>First_color</th>
        <th>Second_color</th>
        <th>Third_color</th>
        <th>Fourth_color</th>
        <th>phone</th>
        <th>email</th>
        <th>date</th>
        <th>Checkbox</th>
        <th></th>
        <th></th>
    </thead>
    <tbody>
        <?php echo $tableRows; ?>
    </tbody>
</table>