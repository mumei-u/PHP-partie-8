<?php
$login = '';
$password = '';
if (isset($_COOKIE['login']) && isset($_COOKIE['password'])) {
    //Fonction filter_var pour nettoyer le cookie qui prend en paramétre filter_sanitize_string pour indiquer que ces une chaine de caractéres
    $login = filter_var($_COOKIE['login'], FILTER_SANITIZE_STRING);
    $password = filter_var($_COOKIE['password'], FILTER_SANITIZE_STRING);
}
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="http://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="../style.css">
        <title>PHP | Partie 8</title>
    </head>
    <body>
        <div class="container text-center bg-secondary">
            <h1 class="text-light">PHP | P8-ex4</h1>
            <nav>
                <a class="link" href="http://pt5ex1/">Partie 7</a>
                <a class="link" href="http://php-partie8/exercice1/index.php">ex1</a>
                <a class="link" href="http://php-partie8/exercice2/index.php">ex2</a>
                <a class="link" href="http://php-partie8/exercice3/index.php">ex3</a>
                <a class="link" href="http://php-partie8/exercice4/index.php">ex4</a>
                <a class="link" href="http://php-partie8/exercice5/index.php">ex5</a>
                <a class="link" href="http://php-partie9/exercice1/index.php">Partie 9</a>
            </nav>
        </div>
        <div class="container text-center">
            <h1>Récupération des cookies</h1>
            <p>Identifiant: <?php echo $login; ?> <br> Mot de passe : <?php echo $password; ?> </p>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>
