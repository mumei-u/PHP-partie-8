<?php
$exerciseNb = 1;
$result1 = $_SERVER['HTTP_USER_AGENT'];
$result2 = $_SERVER['REMOTE_ADDR'];
$result3 = $_SERVER['SERVER_NAME'];
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="http://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="../style.css">
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
            <table class="table table-bordered table-hover">
                <thead>
                    <tr class="font-weight-bolder text-uppercase">
                        <th>Votre IP</th>
                        <th>Nom du serveur</th>
                        <th>Votre User Agent</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?= $result2 ?></td>
                        <td><?= $result3 ?></td>
                        <td><?= $result1 ?></td>
                    </tr>
                    </tbldy>
            </table>    
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    </body>
</html>
