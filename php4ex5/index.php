<?php
//déclaration de la fonction avec pour paramètre un chiffre et une chaine de caractères
function numberSentence($number, $sentence){
  return $number . ' ' . $sentence; //concaténation du nbr et de la chaine de caractère
}
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>PHP 4EX5</title>
</head>
<body>
  <?php
  echo numberSentence(3, 'petits chats');
  // affiche le retour de la fonction
  ?>
</body>
</html>
