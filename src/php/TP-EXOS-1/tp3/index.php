<!DOCTYPE html>
<html lang="fr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Calculatrice en ligne</title>
</head>
<body>
<!-- Code HTML du formulaire -->
<?php

if(isset($_POST["calcul"]) && isset($_POST["nb1"]) && isset($_POST["nb2"])) {
    // if($_POST["calcul"] === "Addition x+y"){
    //     $resultat = $_POST["nb1"] + $_POST["nb2"];
    // }
    switch($_POST["calcul"]) {
        case "Addition x+y":
            $resultat = $_POST["nb1"] + $_POST["nb2"];
            break;
        case "Soustraction x-y":
            $resultat = $_POST["nb1"] - $_POST["nb2"];
            break;
        case "Division x/y":
            $resultat = $_POST["nb1"] / $_POST["nb2"];
            break;
        case "Puissance x^y":
            $resultat = pow($_POST["nb1"], $_POST["nb2"]);
            break;
    }
    echo "<h3>Résultat : ". $resultat. "</h3>";
} else {
    echo "<h3>Entrez deux nombres :</h3>";
}
?>
<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
  <fieldset>
    <legend><b>Calculatrice en ligne</b></legend>
    <table>
      <tbody>
        <tr>
          <th>Nombre X</th>
          <td>
            <input type="number" step="0.1" name="nb1" size="30" value="<?php if(isset($_POST['nb1'])) echo $_POST['nb1']; else echo ''; ?>" />
          </td>
        </tr>
        <tr>
          <th>Nombre Y</th>
          <td>
            <input type="number" step="0.1" name="nb2" size="30" value="<?php if(isset($_POST['nb2'])) echo $_POST['nb2']; else echo ''; ?>" />
          </td>
        </tr>
        <tr>
          <th>Résultat</th>
          <td>
            <input type="number" step="0.5" disabled name="result"  size="30" value="<?php if(isset($resultat)) echo $resultat; else echo ''; ?>" />
          </td>
        </tr>
        <tr>
          <th>Choisissez !</th>
          <td>
            <input type="submit" name="calcul" value="Addition x+y" />
            <input type="submit" name="calcul" value="Soustraction x-y" />
            <input type="submit" name="calcul" value="Division x/y" />
            <input type="submit" name="calcul" value="Puissance x^y" />
          </td>
        </tr>
      </tbody>
    </table>
  </fieldset>
</form>
<pre>
    <?php
    print_r(gettype($_POST["calcul"]));
    ?>
</pre>
<!-- Le code de taitement -->

    
</body>
</html>