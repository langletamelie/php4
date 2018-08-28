<?php
//déclaration de la fonction avec des paramètres par défauts
function calculate ($number1 = 5, $number2 = 6, $number3 = 4){
  return $number1 + $number2 + $number3; // addition des 3nbrs
}
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>PHP 4EX8</title>
</head>
<body>
  <p>
  <?php
  //affichage du retour de la fonction
echo calculate();
  ?>
</p>
</body>
</html>
