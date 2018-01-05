<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>exercice 4 partie 8 php</title>
  </head>
  <body>
    <p>
        <?php
        // On affiche les cookies créés lors de l'exercice précedent.
        echo($_COOKIE['pseudo'] . ' ' . $_COOKIE['password']);
        ?>
    </p>
    <a href="../index.php">Retour</a>
  </body>
</html>