<?php
//déclaration de la fonction
function Start(){
  return true;
}
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>PHP 4EX1</title>
</head>
<body>
  <p>
    <?php
    /*affiche le retour de la fonction
ne pas mettre fonction dans le nom de la fonction
    */
    echo Start();
    ?>
  </p>
  <p>
    <?= Start(); ?>
  </p>
</body>
</html>
