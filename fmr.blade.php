<html>
<body>

activite : <?php echo $_POST["activite"]; ?><br>
date : <?php echo $_POST["date"]; ?><br>
heure: <?php echo $_POST["heure"]; ?><br>
duree: <?php echo $_POST["duree"]; ?>
<?php
// recuperation du contenu du formulaire
$contenu = stripslashes(nl2br(htmlentities($_POST["activite"])));
$conten = stripslashes(nl2br(htmlentities($_POST["date"])));
$conte = stripslashes(nl2br(htmlentities($_POST["heure"])));
$cont = stripslashes(nl2br(htmlentities($_POST["duree"])));
//Ouverture du répertoire de destination
$myfile = fopen("testfile3.txt", "w") or die("Unable to open file!");//creation d'un fichier texte
//C:\Users\sebgl\OneDrive\Desktop\cour IUT moodle\projet\premice\PHPpython\
//Copie du contenue sur le fichier txt
if ( !fwrite($myfile, $contenu)) {
  echo "Impossible d'écrire dans le fichier ($filename)";
  exit;
}
if ( !fwrite($myfile, $conten)) {
  echo "Impossible d'écrire dans le fichier ($filename)";
  exit;
}
if ( !fwrite($myfile, $conte)) {
  echo "Impossible d'écrire dans le fichier ($filename)";
  exit;
}
if ( !fwrite($myfile, $cont)) {
  echo "Impossible d'écrire dans le fichier ($filename)";
  exit;
}



//Fermeture du fichier
fclose($myfile);

?>
</body>
</html>
