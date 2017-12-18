<?php
session_start();
$_SESSION['prenom'] = 'Pauline';
$_SESSION['nom'] = 'Michalowski';
$_SESSION['age'] = 23;
?>
<!DOCTYPE>
<html>
    <head>
        <title>Exercice 2</title>
    </head>
    <body>
        <?php
        $_SESSION['prenom'] = 'Pauline';
        $_SESSION['nom'] = 'Michalowski';
        $_SESSION['age'] = 23;
        ?>
        <p>Salut <?php echo $_SESSION['prenom'] . ' ' . $_SESSION['nom'] . '. Tu as ' . $_SESSION['age'] . ' ans'; ?></p>
        <a href="Page2Ex2.php">Test</a>
    </body>
</html>
