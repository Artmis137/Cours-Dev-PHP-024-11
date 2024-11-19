<!DOCTYPE html>
<html lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire traité par PHP</title>
    <!-- Lien vers Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    <div class="min-h-screen flex items-center justify-center py-12 px-6">
        <div class="w-full max-w-md bg-white p-8 rounded-lg shadow-lg">

            <h2 class="text-2xl font-bold text-center mb-6 text-gray-800">Formulaire de soumission</h2>

            <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post" enctype="application/x-www-form-urlencoded">
                <fieldset class="mb-6">
                    <legend class="text-lg font-medium text-gray-800">Infos</legend>
                    
                    <label for="nom" class="block text-gray-700">Nom :</label>
                    <input type="text" id="nom" name="nom" class="w-full p-2 border border-gray-300 rounded-md mb-4" value="<?php if (isset($_POST["nom"])) echo $_POST["nom"] ?>" />
                    
                    <div class="mb-4">
                        <span class="block text-gray-700">Niveau :</span>
                        <label class="inline-flex items-center mr-4">
                            <input type="radio" name="niveau" value="debutant" <?php if (isset($_POST["niveau"]) && $_POST["niveau"] == "debutant") echo "checked" ?> class="form-radio" />
                            <span class="ml-2">Débutant</span>
                        </label>
                        <label class="inline-flex items-center">
                            <input type="radio" name="niveau" value="initie" <?php if (isset($_POST["niveau"]) && $_POST["niveau"] == "initie") echo "checked" ?> class="form-radio" />
                            <span class="ml-2">Initié</span>
                        </label>
                    </div>
                    
                    <div class="flex justify-between">
                        <input type="reset" value="Effacer" class="px-4 py-2 bg-red-500 text-white rounded-md hover:bg-red-600 focus:outline-none" />
                        <input type="submit" value="Envoyer" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none" />
                    </div>
                </fieldset>
            </form>

            <?php
            if ($_SERVER["REQUEST_METHOD"] === "POST") {
                if (isset($_POST["nom"]) && isset($_POST["niveau"])) {
                    echo "<div class='mt-6 text-center text-lg font-semibold text-gray-800'>";
                    echo "<h2>Bonjour " . stripslashes($_POST["nom"]) . ", vous êtes " . $_POST["niveau"] . " en PHP.</h2>";
                    echo "</div>";
                } else {
                    echo "<div class='mt-6 text-center text-lg font-semibold text-red-500'>";
                    echo "<h2>Veuillez remplir tous les champs.</h2>";
                    echo "</div>";
                }
            }
            ?>
        </div>
    </div>

</body>
</html>
