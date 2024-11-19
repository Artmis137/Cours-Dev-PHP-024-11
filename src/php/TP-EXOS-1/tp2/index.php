<!DOCTYPE html>
<html lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Listes à choix multiples</title>
</head>
<body>
    <form method="post" action="evalmul.php">
        <fieldset>
            <legend>Recherche d’emploi : complétez la fiche</legend>
            <div>
                <span>
                    Nom <input type="text" name="ident[]" /><br />
                    Prénom <input type="text" name="ident[]" /><br />
                    Âge <input type="number" step="1" name="ident[]" /><br /><br />
                </span>
                <br />
                Langues pratiquées<br />
                <select name="lang[]" multiple="multiple">
                    <option value="français">français</option>
                    <option value="anglais">anglais</option>
                    <option value="allemand">allemand</option>
                    <option value="espagnol">espagnol</option>
                </select>
                <br /><br />
                Compétences informatiques<br />
                HTML 5 <input type="checkbox" name="competent[]" value="HTML 5" /><br />
                CSS 3 <input type="checkbox" name="competent[]" value="CSS 3" /><br />
                PHP <input type="checkbox" name="competent[]" value="PHP" /><br />
                MySQL <input type="checkbox" name="competent[]" value="MySQL" /><br />
            </div>
            <br />
            <input type="reset" value="EFFACER" />
            <input type="submit" value="ENVOI" />
        </fieldset>
    </form>
</body>
</html>
