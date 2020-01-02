 <?php
    if(!empty($_POST['login']) && !empty($_POST['password'])){
        $loginLogs = [
            'login' => $_POST['login'],
            'password' => $_POST['password']
        ];
        setcookie('loginLogs', serialize($loginLogs));
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
            <h1 class="text-light">PHP | P8-ex3</h1>
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
            <h1>site-web random </h1>
            <div class="row justify-content-center">
                <form action="#" method="POST">
                    <div class="form-group">
                        <label for="email">Adresse mail</label>
                        <input type="email" class="form-control" id="email" name="login" aria-describedby="emailHelp" placeholder="noobi@outlook.fr">
                        <small id="emailHelp" class="form-text text-muted">Nous ne partagerons jamais votre e-mail avec quelqu'un d'autre.</br> c'est totalement faux, on va vous hacker</small>
                    </div>
                    <div class="form-group">
                        <label for="password">Mot de passe</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="1234 ¯\_(ツ)_/¯">
                    </div>
                    <button type="submit" class="btn btn-dark">Connexion</button>
                </form>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    </body>
</html>
