<!DOCTYPE html>
<html lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Transfert de fichiers</title>
    <script src="https://cdn.tailwindcss.com"></script> <!-- Ajout de Tailwind CSS -->
</head>
<body class="bg-gray-100 font-sans text-gray-800">

<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Transfert de fichiers</h1>

    <pre class="bg-white p-4 rounded shadow">
        <?php
        print_r($_FILES['fich']);
        $fileinfos = pathinfo($_FILES['fich']['name']);
        print_r($fileinfos);
        $ext = $fileinfos['extension'];
        print_r($ext);
        ?>
    </pre>

    <?php
    if (isset($_FILES['fich'])) {
        // Vérifier les erreurs de téléchargement
        if ($_FILES['fich']['error'] !== UPLOAD_ERR_OK) {
            switch ($_FILES['fich']['error']) {
                case UPLOAD_ERR_INI_SIZE:
                case UPLOAD_ERR_FORM_SIZE:
                    echo "<div class='mt-6 text-red-600 font-semibold'>Le fichier dépasse la taille maximale autorisée.</div>";
                    break;
                case UPLOAD_ERR_PARTIAL:
                    echo "<div class='mt-6 text-red-600 font-semibold'>Le fichier n'a été que partiellement téléchargé.</div>";
                    break;
                case UPLOAD_ERR_NO_FILE:
                    echo "<div class='mt-6 text-red-600 font-semibold'>Aucun fichier n'a été téléchargé.</div>";
                    break;
                case UPLOAD_ERR_NO_TMP_DIR:
                    echo "<div class='mt-6 text-red-600 font-semibold'>Le dossier temporaire est manquant.</div>";
                    break;
                case UPLOAD_ERR_CANT_WRITE:
                    echo "<div class='mt-6 text-red-600 font-semibold'>Échec de l'écriture du fichier sur le disque.</div>";
                    break;
                case UPLOAD_ERR_EXTENSION:
                    echo "<div class='mt-6 text-red-600 font-semibold'>Une extension PHP a arrêté le téléchargement du fichier.</div>";
                    break;
                default:
                    echo "<div class='mt-6 text-red-600 font-semibold'>Erreur inconnue lors du téléchargement du fichier.</div>";
                    break;
            }
        } else {
            // Validation du type de fichier
            $allowedTypes = ['image/gif'];
            $fileType = mime_content_type($_FILES['fich']['tmp_name']);
            if (!in_array($fileType, $allowedTypes)) {
                echo "<div class='mt-6 text-red-600 font-semibold'>Le type de fichier n'est pas autorisé. Seul le format GIF est accepté.</div>";
            } else {
                // Enregistrement du fichier
                $fileName = basename($_FILES['fich']['name']);
                $uploadDir = "uploads/"; // Dossier de destination

                // Créer le dossier s'il n'existe pas
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0777, true);
                }

                $uploadFile = $uploadDir . $fileName;
                $result = move_uploaded_file($_FILES['fich']['tmp_name'], $uploadFile);

                if ($result === TRUE) {
                    echo "<div class='mt-6 text-green-600 font-semibold'>Le transfert est effectué !<br />Le fichier a été enregistré sous : " . $uploadFile . "</div>";
                } else {
                    echo "<div class='mt-6 text-red-600 font-semibold'>Erreur de transfert n°" . $_FILES['fich']['error'] . "</div>";
                }
            }
        }
    }
    ?>
</div>

</body>
</html>
