<?php
//déclaration de la fonction
function sentence($str, $str2){
  return $str . ' ' . $str2;
  //concaténation des chaines de caractères
}
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>PHP 4EX3</title>
</head>
<body>
  <?php
  //affiche le retour de la fonction
echo sentence('au revoir', 'ça va');
  ?>
</body>
</html>
