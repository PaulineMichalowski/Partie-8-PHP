<?php
session_start()
?>
<!DOCTYPE>
<html>
    <head>
        <title>Exercice 2</title>
    </head>
    <body>
        <p>Salut <?php echo $_SESSION['prenom'] . ' ' . $_SESSION['nom'] . '. Tu as ' . $_SESSION['age'] . ' ans'; ?></p>
    </body>
</html>