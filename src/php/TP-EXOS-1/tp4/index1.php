<!DOCTYPE html>
<html lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfert de fichiers</title>
    <!-- Lien vers Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    <div class="min-h-screen flex items-center justify-center py-12 px-6">
        <div class="w-full max-w-md bg-white p-8 rounded-lg shadow-lg">

            <h2 class="text-2xl font-bold text-center mb-6 text-gray-800">Transfert de fichiers</h2>

            <form action="extransfich1.php" method="post" enctype="multipart/form-data">
                <fieldset class="mb-6">
                    <input type="hidden" name="MAX_FILE_SIZE" value="100000000000000000000000000000000" />

                    <table class="w-full">
                        <tbody>
                            <tr>
                                <th class="text-left text-gray-700 py-2">Fichier :</th>
                                <td>
                                    <input type="file" name="fich" accept="image/gif" class="w-full p-2 border border-gray-300 rounded-md" />
                                </td>
                            </tr>
                            <tr>
                                <th></th>
                                <td class="text-right">
                                    <input type="submit" value="Envoi" class="mt-4 px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none" />
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </fieldset>
            </form>

        </div>
    </div>

</body>
</html>
