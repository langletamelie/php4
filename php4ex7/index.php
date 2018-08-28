<?php
//déclaration de la fontion
function AgeGender($age, $gender){
  if ($age >0){
    if ($age <18 && $gender == 'homme'){  //si homme mineur
      $message = 'Vous êtes un homme et vous êtes mineur.';
    }elseif ($age >= 18 && $gender == 'homme'){  //si homme majeur
      $message = 'Vous êtes un homme et vous êtes majeur.';
    }elseif ($age <18 && $gender == 'femme'){  //si femme mineure
      $message = 'Vous êtes une femme et vous êtes mineure.';
    }elseif ($age >= 18 && $gender == 'femme'){  //si femme majeure
      $message = 'Vous êtes une femme et vous êtes majeure.';
    }else{
      $message = 'Votre âge est incorrect'; // si age est incorrect
    }
    return $message;
  }
}
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>PHP 4EX7</title>
</head>
<body>
  <?php
  //affichage du retour de la fonction
  echo AgeGender(-2,'femme');
  ?>
</body>
</html>
