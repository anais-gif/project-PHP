<?php 

include ('fonction.php');
  
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <link rel="icon" type="image/png" href="images/1200px-Hertz-Logo.svg.png" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hertz - Lons-le-saunier</title>
</head>

<body>

    <header>
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-12 col-md-4 ">
                    <p class="ale">Hertz</p>
                </div>
                <div class="col-12 col-md-3">
                    <p class="fr"><img src="images/Sans titre-1.jpg"> FR/fr</p>
                </div>
                <div class="col-12 col-md-3">
                    <a href="#" class="btnPopup" id="btnPopup">Se connecter/S'inscrire</a>


<?php if(isset($_GET['action']) &&!empty($_GET['nom']) && !empty($_GET['prenom'])&& !empty($_GET['adresse']) && !empty($_GET['ville'])&& !empty($_GET['cp']) && !empty($_GET['pseudo']) &&!empty($_GET['mdp']))
    {ajouter_client();
    }

  ?>
                    <!--PopUp-->
                    <div id="overlay" class="overlay">
                        <div id="popup" class="popup">


                            <div class="parent">
                                <div class="colonne">
                                    <div class="bloc1">
                                        Inscrit-toi !
                                    </div>
                                    <div class="bloc2">
                                        <form method='GET'>
                                            <input class="pretent" type="text" name="nom"  placeholder='nom'required>
                                            <input class="pretent" type="text"  name="prenom"  placeholder='prenom' required>
                                            <input class="pretent" type="text"  name="adresse"  placeholder='adresse' required>
                                            <input class="pretent" type="text"  name="ville"  placeholder='ville' required>
                                            <input class="pretent" type="text"  name="cp"  placeholder='cp' required>
                                            <input class="pretent" type="text"  name="pseudo"  placeholder='pseudo' required>
                                            <input class="pretent" type="password" " name="mdp"  placeholder='mot de passe' required>
                                            <br>
                                            <button class="boubou" type="submit" value="ajouter"
                                                name="action">Ajouter</button>
                                        </form>
                                    </div>
                                </div>
                                <div class="colonne">
                                    <div class="bloc3"><span id="btnclose" class="btnclose">&times;</span>
                                        <div class="zztop"><input class="jaune" type="text" name="pseudo"
                                                placeholder="pseudo">
                                            <input class="jaune" type="text" name="pseudo" placeholder="mot de passe">
                                            <button <a href="admin.html">Connexion</a></button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Fin PopUp-->

            </div>
        </div>
    </header>

    <nav class="nav navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    location de voitures
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="index.php">Réservez une voiture </a>
                    <a class="dropdown-item" href="#">Nos destinations les plus populaires</a>
                    <a class="dropdown-item" href="pagetest.html">Nos voitures de location</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Location d'utilitaires
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Offres
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Ma réservation
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Fidélité
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="admin.php">Espace pro</a>
            </li>
            </ul>
        </div>
        </div>
    </nav>

    <hr>

    <?php 

$pdoStat =bdd()->prepare('SELECT * FROM vehicule  ');
$executeIsOk=$pdoStat->execute();
$vehicule=$pdoStat->fetchAll();

?>


    <section class="beau">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-12 col-xl-12">
                    <p><img class="img-fluid position-relative"
                            src="images/2017-Citroen-C4-Cactus-petrol-auto-vs-Renault-Captur-Intens-133.jpg" /></p>
                </div>
                <div class="col-sm-12 col-lg-4 col-xl-3 colori position-absolute">
                    <p>Evadez vous avec Lons-le-saunier Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque,
                        aliquam. Illo est provident modi eligendi, dolorem neque tempore voluptatum commodi tempora
                        fugiat soluta quam id officiis odio excepturi, molestiae ipsa.</p>
                </div>
            </div>
        </div>
        <div class="locationvoiture position-absolute ">
            <a class="btn b1" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false"
                aria-controls="collapseExample">
                Voitures
            </a>
            <a class="btn b2" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false"
                aria-controls="collapseExample">
                Véhicules utilitaires
            </a>
            <div class="collapse" id="collapseExample">
                <hr class="hlol position-relative">
                <div class="container magic position-relative">


                    
                        <table class="table tablemagic">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">MODELE </th>
                                    <th scope="col">PRIX </th>
                                    <th scope="col">DISPONIBLE</th>
                                </tr>
                            </thead>
                            <?php foreach($vehicule as $vehicule):
                                 if ($vehicule['Disponible'] =='0'){$dispo='disponible';} else{$dispo='indisponible';}  ?>
                            <tbody class='table'>
                                <tr class="thead-light">
                                    <th scope="col"><?= $vehicule['modele_voiture']?></th>
                                    <th scope="col"><?= $vehicule['prix_voiture']?></th>
                                    <th scope="col" ><?= $dispo ?></th>
                                </tr>
                            </tbody>
                            <?php endforeach; ?>
                            </table>
                    

                </div>
            </div>

        </div>
        </div>
        </div>
        <div class="container">
            <div class="col-sm-12 col-lg-4 col-xl-3 allelujah backeuh">
                <p>Evadez vous avec Lons-le-saunier Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque,
                    aliquam. Illo est provident modi eligendi, dolorem neque tempore voluptatum commodi tempora
                    fugiat soluta quam id officiis odio excepturi, molestiae ipsa.</p>
            </div>
        </div>

        <?php 

$pdoStat =bdd()->prepare('SELECT * FROM vehicule  ');
$executeIsOk=$pdoStat->execute();
$vehicule=$pdoStat->fetchAll();

?>

        <div class="container pecore allelujah">  <table class="table tablemagic">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">MODELE </th>
                                    <th scope="col">PRIX </th>
                                    <th scope="col">DISPONIBLE</th>
                                </tr>
                            </thead>
                            <?php foreach($vehicule as $vehicule): 
                                 if ($vehicule['Disponible'] =='0'){$dispo='Disponible';} else{$dispo='indisponible';}?>
                            <tbody class='table'>
                                <tr class="thead-light">
                                    <th scope="col"><?= $vehicule['modele_voiture']?></th>
                                    <th scope="col"><?= $vehicule['prix_voiture']?></th>
                                    <th scope="col" ><?= $dispo ?></th>
                                </tr>
                            </tbody>
                            <?php endforeach; ?>
                            </table></div>
        </div>



    </section>

    <hr class="her" />

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <h2 class="uppercase">Hertz.com</h2>
                    <p class="tfi">Réserver</p>
                    <p class="tfi">Nos offres spéciales</p>
                    <p class="tfi">Notre flotte</p>
                </div>
                <div class="col-4">
                    <h2>A propos de Hertz</h2>
                    <p class="tfi">Réserver</p>
                    <p class="tfi">Nos offres spéciales</p>
                    <p class="tfi">Notre flotte</p>
                </div>
                <div class="col-4">
                    <h2>Assistance</h2>
                    <p class="tfi">Réserver</p>
                    <p class="tfi">Nos offres spéciales</p>
                    <p class="tfi">Notre flotte</p>
                </div>
            </div>
        </div>
    </footer>

    <!--<script>

onclick="chacgementCouleur()"

function chacgementCouleur() {
  var element = document.getElementById("voitures");
  element.classList.toggle("ita");
}

        </script>

    -->


    <script src="script.js"></script>
</body>

</html>