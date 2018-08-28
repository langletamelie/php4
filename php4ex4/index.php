<?php
//déclaration de la fonction
function compareNumber($number, $number2){
  if ($number > $number2) { //condition si nbr1>nbr2
    $message = 'Le premier nombre est le plus grand';
  }elseif ($number < $number2){// si nbr<nbr2
    $message = 'Le premier nombre est plus petit';
  }else{
    $message = 'Les deux nombres sont identiques';
  }
  return $message;
}
//on return une seule fois dans une fonction, à la place on déclare des variables
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>PHP 4EX4</title>
</head>
<body>
  <?php
  //affiche le retour de la fonction
echo compareNumber(1,2) . ' ' . compareNumber(2,2) . ' ' . compareNumber(3,1);
  ?>
</body>
</html>
