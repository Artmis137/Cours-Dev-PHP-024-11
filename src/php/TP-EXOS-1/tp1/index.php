<!DOCTYPE html>
<html lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Formulaire traité par PHP</title>
</head>
<body>
    <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post" enctype="application/x-www-form-urlencoded">
        <fieldset>
            <legend><b>Infos</b></legend>
            Nom : <input type="text" name="nom" size="40" value="<?php if (isset($_POST["nom"])) echo $_POST["nom"] ?>" /><br />
            Débutant : <input type="radio" name="niveau" value="debutant" <?php if (isset($_POST["niveau"]) && $_POST["niveau"] == "debutant") echo "checked" ?> />
            Initié : <input type="radio" name="niveau" value="initie" <?php if (isset($_POST["niveau"]) && $_POST["niveau"] == "initie") echo "checked" ?> /><br />
            <input type="reset" value="Effacer" />
            <input type="submit" value="Envoyer" />
        </fieldset>
    </form>
    <?php
//  var_dump($_SERVER["REQUEST_METHOD"]);
 if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["nom"]) && isset($_POST["niveau"])) {
        echo "<h2>Bonjour " . stripslashes($_POST["nom"]) . ", vous êtes " . $_POST["niveau"] . " en PHP.</h2>";
    } else {
        echo "<h2>Veuillez remplir tous les champs.</h2>";
    }
}
    ?>
</body>
</html>
