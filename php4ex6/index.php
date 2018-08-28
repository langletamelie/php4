<?php
// déclaration de la fonction qui a pour parametre age, nom, prénom
function nameAge($firstname, $lastname, $age){
  return 'Bonjour ' . $lastname . ' ' . $firstname . ', tu as ' . $age . 'ans.';
}
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>PHP 4EX6</title>
</head>
<body>
  <?php
  //affichage du retour de la fonction
  echo nameAge('Lucien', 'Lechat', 15);
  ?>
</body>
</html>
