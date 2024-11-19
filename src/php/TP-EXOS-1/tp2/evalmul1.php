<!DOCTYPE html>
<html lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compétences informatiques</title>
    <!-- Lien vers Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    <div class="min-h-screen flex items-center justify-center py-12 px-6">
        <div class="w-full max-w-2xl bg-white p-8 rounded-lg shadow-lg">

            <h2 class="text-2xl font-bold text-center mb-6 text-gray-800">Récapitulatif de votre fiche d’informations personnelles</h2>

            <?php
            if ($_SERVER["REQUEST_METHOD"] === "POST") {
                if (isset($_POST["ident"], $_POST["lang"], $_POST["competent"])) {
                    // Récupération des valeurs et affichage
                    $nom = $_POST["ident"][0];
                    $prenom = $_POST["ident"][1];
                    $age = $_POST["ident"][2];
                    $lang = $_POST["lang"];
                    $competent = $_POST["competent"];
            ?>

                    <div class="bg-green-100 p-4 rounded-md mb-6">
                        <p class="text-lg font-medium text-gray-800">Vous êtes : <b><?= $prenom . " " . stripslashes($nom) ?></b></p>
                        <p class="text-lg font-medium text-gray-800">Vous avez <?= $age ?> ans.</p>
                        <p class="text-lg font-medium text-gray-800">Vous parlez :</p>
                        <ul class="list-disc pl-5 text-gray-700">
                            <?php foreach ($lang as $valeur) { ?>
                                <li><?= $valeur ?></li>
                            <?php } ?>
                        </ul>
                        <p class="text-lg font-medium text-gray-800">Vous avez des compétences informatiques en :</p>
                        <ul class="list-disc pl-5 text-gray-700">
                            <?php foreach ($competent as $valeur) { ?>
                                <li><?= $valeur ?></li>
                            <?php } ?>
                        </ul>
                    </div>

            <?php
                } else {
            ?>
                    <div class="bg-red-100 p-4 rounded-md text-red-700">
                        <p class="font-medium">S'il vous plaît, saisissez votre nom et cochez au moins une compétence !</p>
                    </div>
            <?php
                }
            }
            ?>

            <!-- Boutons pour revenir en arrière ou effectuer une autre action -->
            <div class="flex justify-between mt-6">
                <button onclick="window.history.back();" class="px-6 py-2 bg-blue-500 text-white font-medium rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400">Retour</button>
                <a href="index1.php" class="px-6 py-2 bg-gray-500 text-white font-medium rounded-md hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-gray-400">Formulaire</a>
            </div>
        </div>
    </div>

</body>
</html>
