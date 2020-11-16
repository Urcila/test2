<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recruteur-profil</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="view/css/style.css">
</head>

<body class="col-one">

    <!-- DEBUT NAVBAR -->
    <header>    
        <nav class="navbar col-reverse py-3 navbar-expand-lg navbar-light">
            <a class="col-reverse" href="#">LOGO</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse mean-menu" id="navbarNavDropdown">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="recruteur-candidature.php">CANDIDATURE</a>
                    </li>


                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="recruteur-profil.php" id="navbarDropdownMenu" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> PROFIL
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="recruteur-ajout-offre.php">Ajouter une offre</a>
                            <a class="dropdown-item" href="recruteur-profil.php">Voir mes offres</a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">MESSAGERIE</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">DECONNEXION</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    

    <!-- FIN NAVBAR -->