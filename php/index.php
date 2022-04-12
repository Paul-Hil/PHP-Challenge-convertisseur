<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convertisseur</title>
    <?php include "./convertisseur.php"?>
</head>
<body>
    <h1>Convertisseur</h1>

    <form method="get">

    <label id="choice-devise">Choix de la devise à convertir:</label>
    <select name="choice-devise">
    <option value="dollars" default>Dollars</option>
    <option value="euros" default>Euros</option>
    <option value="yens" default>Yens</option>
    </select><br>

    <label for="montant">Entrer un montant:</label>
    <input type="number" name= "montantEU" id="montant">

    <button type="submit">Lancer</button>
    </form>    
    <div class="result"><?= "Conversion euros / dollars: " . $result ?></div>

</body>

</html>