<!DOCTYPE html>
<html lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listes à choix multiples</title>
    <!-- Lien vers Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    <!-- Conteneur principal -->
    <div class="min-h-screen flex items-center justify-center py-12 px-6">
        <div class="w-full max-w-lg bg-white p-8 rounded-lg shadow-lg">

            <h2 class="text-2xl font-bold text-center mb-6 text-gray-800">Recherche d’emploi : complétez la fiche</h2>

            <form method="post" action="evalmul1.php" class="space-y-6">

                <div class="space-y-4">
                    <div class="flex flex-col">
                        <label for="nom" class="text-gray-700 font-medium">Nom</label>
                        <input type="text" name="ident[]" id="nom" class="p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" />
                    </div>

                    <div class="flex flex-col">
                        <label for="prenom" class="text-gray-700 font-medium">Prénom</label>
                        <input type="text" name="ident[]" id="prenom" class="p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" />
                    </div>

                    <div class="flex flex-col">
                        <label for="age" class="text-gray-700 font-medium">Âge</label>
                        <input type="number" step="1" name="ident[]" id="age" class="p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" />
                    </div>
                </div>

                <!-- Langues pratiquées -->
                <div class="space-y-2">
                    <label for="lang" class="text-gray-700 font-medium">Langues pratiquées</label>
                    <select name="lang[]" id="lang" multiple="multiple" class="p-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent w-full">
                        <option value="français">français</option>
                        <option value="anglais">anglais</option>
                        <option value="allemand">allemand</option>
                        <option value="espagnol">espagnol</option>
                    </select>
                </div>

                <!-- Compétences informatiques -->
                <div class="space-y-2">
                    <span class="text-gray-700 font-medium">Compétences informatiques</span>
                    <div class="flex flex-col space-y-2">
                        <label class="flex items-center">
                            <input type="checkbox" name="competent[]" value="HTML 5" class="mr-2">
                            HTML 5
                        </label>
                        <label class="flex items-center">
                            <input type="checkbox" name="competent[]" value="CSS 3" class="mr-2">
                            CSS 3
                        </label>
                        <label class="flex items-center">
                            <input type="checkbox" name="competent[]" value="PHP" class="mr-2">
                            PHP
                        </label>
                        <label class="flex items-center">
                            <input type="checkbox" name="competent[]" value="MySQL" class="mr-2">
                            MySQL
                        </label>
                    </div>
                </div>

                <div class="flex justify-between">
                    <input type="reset" value="EFFACER" class="px-6 py-2 bg-red-500 text-white font-medium rounded-md shadow-sm hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-400" />
                    <input type="submit" value="ENVOI" class="px-6 py-2 bg-blue-500 text-white font-medium rounded-md shadow-sm hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400" />
                </div>
            </form>
        </div>
    </div>

</body>
</html>
