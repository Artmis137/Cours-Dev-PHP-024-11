<?php
$myTam = ["service1" => "S1", "service 2" => "S2", "service3" => "S3", "service4" =>"S4", "service5" => "S5"];

?>
<!DOCTYPE html>
<html>

<head>
    <title>Notre première instruction : echo</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../../public/css/styles.css">

    <!-- TaiwlindCSS 
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
 -->
</head>

<body>
    
    <h1 class="text-3xl m-4 text-white font-bold bg-black underline">
        Hello world!
    </h1>

    <h2>Affichage de texte avec PHP</h2>
    <?php foreach ($myTam as $val) :?>
        <p><?= $val ?></p>
    <?php endforeach;?>
    <p>
        Cette ligne a été écrite entièrement en HTML.<br />
        <?php echo ("Celle-ci a été écrite entièrement en PHP."); ?>
    </p>
    <p>
        Cette ligne a été écrite entièrement en HTML.<br />
        <?php echo ("Celle-ci a été écrite entièrement en PHP."); ?>
    </p>
    <p>
        Cette ligne a été écrite entièrement en HTML.<br />
        <?php echo ("Celle-ci a été écrite entièrement en PHP."); ?>
    </p>
    <p>
        Cette ligne a été écrite entièrement en HTML.<br />
        <?php echo ("Celle-ci a été écrite entièrement en PHP."); ?>
    </p>

    <script src="./assets/js/main.js"></script>
</body>

</html>