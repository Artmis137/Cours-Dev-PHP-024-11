<!DOCTYPE html>
<html lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculatrice en ligne</title>
    <!-- Lien vers Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal overflow-x-hidden">

    <!-- Conteneur principal -->
    <div class="min-h-screen flex items-center justify-center py-12 px-6">
        <div class="w-full max-w-md bg-white p-8 rounded-lg shadow-lg">
            <h2 class="text-2xl font-bold text-center mb-6 text-gray-800">Calculatrice en ligne</h2>

            <!-- Formulaire -->
            <?php
            if (isset($_POST["calcul"]) && isset($_POST["nb1"]) && isset($_POST["nb2"])) {
                switch ($_POST["calcul"]) {
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
                echo "<h3 class='text-xl font-semibold text-center text-green-600 mt-4'>Résultat : ". $resultat. "</h3>";
            } else {
                echo "<h3 class='text-xl font-semibold text-center text-gray-700 mt-4'>Entrez deux nombres :</h3>";
            }
            ?>

            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post" class="mt-6 space-y-4">
                <div class="flex flex-col">
                    <label for="nb1" class="text-gray-700 font-medium">Nombre X</label>
                    <input type="number" step="0.1" name="nb1" id="nb1" class="p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" value="<?php if (isset($_POST['nb1'])) echo $_POST['nb1']; else echo ''; ?>" />
                </div>

                <div class="flex flex-col">
                    <label for="nb2" class="text-gray-700 font-medium">Nombre Y</label>
                    <input type="number" step="0.1" name="nb2" id="nb2" class="p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" value="<?php if (isset($_POST['nb2'])) echo $_POST['nb2']; else echo ''; ?>" />
                </div>

                <div class="flex flex-col">
                    <label for="result" class="text-gray-700 font-medium">Résultat</label>
                    <input type="number" step="0.5" name="result" id="result" disabled class="p-3 border border-gray-300 rounded-md shadow-sm bg-gray-100" value="<?php if (isset($resultat)) echo $resultat; else echo ''; ?>" />
                </div>

                <!-- Boutons de calcul -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-6">
                    <input type="submit" name="calcul" value="Addition x+y" class="px-6 py-2 bg-blue-500 text-white font-medium rounded-md shadow-sm hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400" />
                    <input type="submit" name="calcul" value="Soustraction x-y" class="px-6 py-2 bg-blue-500 text-white font-medium rounded-md shadow-sm hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400" />
                    <input type="submit" name="calcul" value="Division x/y" class="px-6 py-2 bg-blue-500 text-white font-medium rounded-md shadow-sm hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400" />
                    <input type="submit" name="calcul" value="Puissance x^y" class="px-6 py-2 bg-blue-500 text-white font-medium rounded-md shadow-sm hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400" />
                </div>
            </form>

        </div>
    </div>

    <pre class="m-10 text-gray-500">
                <?php
                print_r(gettype($_POST["calcul"]));
                ?>
            </pre>
</body>
</html>
