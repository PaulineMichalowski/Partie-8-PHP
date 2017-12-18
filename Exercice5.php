<?php
if (isset($_POST['login']) && $_POST['password']) {
    $temps = 365 * 24 * 3600;
    setcookie('login', $_POST['login'], time() + $temps, null, false, true);
    setcookie('password', $_POST['password'], time() + $temps, null, false, true);
}
?>
<!DOCTYPE>
<html>
    <head>
        <meta charset="utf-8">
        <title>Partie 8 Exercice 4</title>
    </head>
    <body>
        <form action="index.php" method="post">
            <label>Name :</label> <input type="text" name="login">
            <label>Password :</label><input type="password" name="password">
            <input type="submit" value="Valider">
        </form>
        <?php
        echo $_COOKIE['login'] . ' ' . $_COOKIE['password'];
        ?>
    </body>
</html>