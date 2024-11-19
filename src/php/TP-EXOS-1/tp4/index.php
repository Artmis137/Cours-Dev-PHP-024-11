<!DOCTYPE html>
<html lang="fr">
<head>
<meta http-equiv="Content-Type"="text/html; charset=UTF-8" />
<title>Transfert de fichiers</title>
</head>
<body>
<form action="extransfich.php" method="post" enctype="multipart/form-data">
<fieldset>
<input type="hidden" name="MAX_FILE_SIZE" value="100000" />
<legend><b>Transfert de fichiers</b></legend>
<table>
<tbody>
<tr>
<th>Fichier</th>
<td><input type="file" name="fich" accept="image/gif" size="50"/></td>
</tr>
<tr>
<th>Clic !</th>
<td><input type="submit" value="Envoi" /></td>
</tr>
</tbody>
</table>
</fieldset>
</form>
</body>
</html>
