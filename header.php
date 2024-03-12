
<?php
require_once "functions/authentification.php";
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title><?php
            // if (isset($title)) {
            //     echo $title;
            // } else {
            //     echo "Mon Beau Gosse de Site";
            // }
            if (isset($title)) :
                echo $title;
            else :
                echo "Mon Beau Gosse de Site";
            endif;
            ?></title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/starter-template/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
        <a class="navbar-brand" href="/coursphp3/index.php">Mon Site</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item <?php if ($nav === "index") : ?>active <?php endif; ?>">
                    <a class="nav-link" href="/coursphp3/index.php">Accueil <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item <?php if ($nav === "contact") : ?>active <?php endif; ?>">
                    <a class="nav-link" href="/coursphp3/contact.php">Contact</a>
                </li>
                <li class="nav-item <?php if ($nav === "apropos") : ?>active <?php endif; ?>">
                    <a class="nav-link" href="/coursphp3/aPropos.php">A Propos</a>
                </li>
                <li class="nav-item <?php if ($nav === "jeuDuHasard") : ?>active <?php endif; ?>">
                    <a class="nav-link" href="/coursphp3/jeuDuHasard.php">Jeu du Hasard</a>
                </li>
                <li class="nav-item <?php if ($nav === "dashboard") : ?>active <?php endif; ?>">
                    <a class="nav-link" href="/coursphp3/dashboard.php">Dashboard</a>
                </li>
                <li class="nav-item <?php if ($nav === "bd") : ?>active <?php endif; ?>">
                    <a class="nav-link" href="/coursphp3/baseDeDonnees.php">Base de Données</a>
                </li>

            </ul>
            <ul class="navbar-nav">
                <?php if (!is_connected()) : ?>
                    <li class="nav-item <?php if ($nav === "login") : ?>active <?php endif; ?>">
                        <a class="nav-link" href="/coursphp3/login.php">Login</a>
                    </li>
                <?php else : ?>
                    <li class="nav-item ">
                        <a class="nav-link" href="/coursphp3/logout.php">Logout</a>
                    </li>
                <?php endif; ?>
            </ul>

        </div>
    </nav>