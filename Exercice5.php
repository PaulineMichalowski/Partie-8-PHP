<?php
// On vérifie que les données soient bien rentrées.
if (isset($_POST['pseudo']) && ($_POST['password'])) {
    // On écrase les cookies créés lors des précedents exercices.
    setcookie('pseudo', $_POST['pseudo'], time() + 365 * 24 * 3600, '/', null, false, true);
    setcookie('password', $_POST['password'], time() + 365 * 24 * 3600, '/', null, false, true);
}
?><!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>exercice 5 partie 8 php</title>
  </head>
  <body>
    <form class="form" action="index.php" method="POST">
      <label for="pseudo">Pseudo : </label>
      <input type="text" name="pseudo" placeholder="pseudo" />
      <label for="password">Mot de passe : </label>
      <input type="password" name="password" placeholder="mot de passe" />
      <button type="submit" name="validate">Valider</button>
    </form>
    <p>
        <?php
        echo 'Bonjour ' . htmlspecialchars($_COOKIE['pseudo']) . htmlspecialchars($_COOKIE['password']);
        ?>
    </p>
    <a href="../index.php">Retour</a>
  </body>
</html>