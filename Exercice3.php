<?php
if (isset($_POST['login']) && $_POST['password']) {
    $temps = 365 * 24 * 3600;
    setcookie('login', $_POST['login'], time() + $temps, null, false, true);
    setcookie('password', $_POST['password'], time() + $temps, null, false, true);
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exercice 3</title>
    </head>
    <body>
        <form action="index.php" method="post">
            <label>Login :</label> <input type="text" name="login"/>
            <label>Mot de passe :</label><input type="text" name="password"/>
            <input type="submit" value="Valider">
        </form>
        <?php
        echo $_COOKIE['name'] . ' ' . $_COOKIE['password'];
        ?>
    </body>
</html>