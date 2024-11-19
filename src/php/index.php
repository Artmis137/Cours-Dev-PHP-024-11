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
   <form action="formulaire.php" class="contenair" method="post">
 
    <label for="first_name">Nom</label>
    <input type="text" id="first_name" name="first_name"><br>
    <label for="last_name">Prénom</label>
    <input type="text" id="last_name" name="last_name">
    <p>Selectionner votre niveau en php</p>
    <input type="checkbox" id="debutant" name="level[]">
    <label for="debutant">Débutant</label><br>
    <input type="checkbox" id="intermediaire" name="level[]">
    <label for="intermediaire">Intermediaire</label><br>
    <button type="submit" class="btn ">Valider</button>
    <button type="reset">reset</button>
   </form>
    <?php
    
    // echo "PHP infos :";
    
    // //Afficher la version du php installer;
    // echo PHP_VERSION;
   
    // // Le type du system php installer
    // echo "le system installer";
    // echo PHP_OS;
    
        // print_r( );
        ?>
        
    

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