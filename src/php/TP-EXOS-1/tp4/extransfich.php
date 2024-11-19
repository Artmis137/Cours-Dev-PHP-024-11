<?php
if(isset($_FILES['fich']))
{
echo "Taille maximale autorisée :".$_POST["MAX_FILE_SIZE"]," octets<br />";
echo "<b>Clés et valeurs du tableau \$_FILES</b><br/>";
foreach($_FILES["fich"] as $cle => $valeur)
{
echo "clé : $cle valeur : $valeur <br />";
} // Enregistrement et renommage du fichier
$result=move_uploaded_file($_FILES["fich"]["tmp_name"],"imagephp.gif");
if($result==TRUE)
{
echo "<hr /><big>Le transfert est effectué !</big>";
}
else
{
echo "<hr /> Erreur de transfert n°",$_FILES["fich"]["error"];
}
}
?>
