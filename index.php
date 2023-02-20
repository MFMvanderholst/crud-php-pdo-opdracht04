<!DOCTYPE html>
<html lang="en">
<head>
    <!-- meta -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- links -->
    <link rel="stylesheet" href="css/style.css">
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