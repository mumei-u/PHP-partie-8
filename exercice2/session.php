<?php
session_start();
if (isset($_SESSION['lastname'], $_SESSION['firstname'], $_SESSION['age'])) {
    $lastname = $_SESSION['lastname'];
    $firstname = $_SESSION['firstname'];
    $age = $_SESSION['age'];
}
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="http://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../style.css">
        <title>PHP | Partie 8</title>
    </head>
    <body>
        <div class="container text-center bg-secondary">
            <h1 class="text-light">PHP | P8-ex1</h1>
            <nav>
                <a class="link" href="http://php-partie7/exercice1/index.php">Partie 7</a>
                <a class="link" href="http://php-partie8/exercice1/index.php">ex1</a>
                <a class="link" href="http://php-partie8/exercice2/index.php">ex2</a>
                <a class="link" href="http://php-partie8/exercice3/index.php">ex3</a>
                <a class="link" href="http://php-partie8/exercice4/index.php">ex4</a>
                <a class="link" href="http://php-partie8/exercice5/index.php">ex5</a>
                <a class="link" href="http://php-partie9/exercice1/index.php">Partie 9</a>
            </nav>
        </div>
        <div class="container text-center">
            <h2>Test de la session</h2>
            <p>Heyy, si mes souvenirs sont bons, tu es <?= $firstname  . '  ' .  $lastname ?> non?</p>
            <p>Celui qui à atteint ces <?= $age ?> de vie en ce bas monde<br>↓↓↓↓↓↓↓↓↓↓↓↓↓</p>
            <a class="text-dark" href="http://php-partie8/exercice2/index.php"><strong>changer de page</strong></a>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    </body>
</html>
