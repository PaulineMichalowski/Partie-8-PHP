<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>exercice1</title>
    </head>
    <body>
        <h1>Partie 8 PHP</h1>
        <h2>Exercice1</h2>
        <!-- User Agent du serveur -->
        <p><?php echo 'Votre User Agent est : ' . $_SERVER['HTTP_USER_AGENT']; ?></p>
        <!-- Adresse IP du client -->
        <p><?php echo 'Votre Adresse IP est : ' . $_SERVER['REMOTE_ADDR']; ?></p>
        <!-- nom du serveur (nom du vhost en local) -->
        <p><?php echo 'Le nom du serveur est : ' . $_SERVER["SERVER_NAME"]; ?></p>
        <a href="../index.php" alt="Accueil"><input type="button" value="Accueil" name="Accueil"></a>
    </body>
</html>