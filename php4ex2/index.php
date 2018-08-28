<?php
//déclaration de la fonction qui retourne une chaine de caractères passée en paramètre
function hello($str){
  return $str;
}
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>PHP 4EX2</title>
</head>
<body>
  <p>
  <?php
  //affiche le retour de la fonction en donnant une valeur à son paramètre
    echo hello('Bonjour');
  ?>
</p>
<p>
  <?= hello('bonjour'); ?>
</p>
</body>
</html>
