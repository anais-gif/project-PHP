<?php 

try {
  $db = new PDO('mysql:host=localhost;dbname=voiture', 'root', '');

  }
catch (PDOException $e) {
  print "Erreur !: " . $e->getMessage(). "<br/>";
  die();
}
$pdoStat =$db->prepare('SELECT * FROM vehicule');
$executeIsOk=$pdoStat->execute();
$vehicule=$pdoStat->fetchAll();

?>

<?php if(isset($_GET['action']) && !empty($_GET['modele'])  && !empty($_GET['prix'])  && !empty($_GET['annee'])){
      
      $ajouter = $db->prepare('INSERT INTO vehicule (modele_voiture,prix_voiture,annee_voiture) VALUES (:modele, :prix, :annee)');
      $ajouter->bindParam(':modele', $_GET['modele'], 
      PDO::PARAM_STR);
      $ajouter->bindParam(':prix', $_GET['prix'], 
      PDO::PARAM_INT);
      $ajouter->bindParam(':annee', $_GET['annee'], 
      PDO::PARAM_INT);
      $plus= $ajouter->execute();
  
          if($plus){
              echo 'votre enregistrement a été ajouté';
          } else {
              echo 'Une erreur est survenue';
          }
      }
    
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


                <!--Fin PopUp-->

            </div>
        </div>
    </header>

    <nav>
        <ul class="nav navbar-expand justify-content-start">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    location de voitures
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Réservez une voiture </a>
                    <a class="dropdown-item" href="#">Nos destinations les plus populaires</a>
                    <a class="dropdown-item" href="#">Nos voitures de location</a>
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
                <a class="nav-link" href="#">Espace pro</a>
            </li>
        </ul>
        </div>
    </nav>

    <hr>

    <section class="tableau">
        <p> Ajouter un nouveau vehicule <p>

                <form method='GET'>
                    <input type="text" name="modele" placeholder='modele'>
                    <input type="text" name="prix" placeholder='prix'>
                    <input type="text" name="annee" placeholder='annee'>
                    <button type="submit" value="ajouter" name="action">Ajouter</button>
                </form>


                <table class="table col-5 ">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">voiture</th>
                            <th scope="col">année</th>
                            <th scope="col">prix</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                        </tr>
                    </tbody>
                </table>
                </div>
                </div>
    </section>

    <hr class='zouper'>





    <section class="disponibilite">
    <p class=" d-flex justify-content-center  ">Voitures disponibles</p>
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <form method='GET'>
                        <input type="text" name="id" placeholder="Id du vehicule à modifier">
                        <input type="text" name="modele" placeholder="Modele du vehicule">
                        <input type="text" name="prix" placeholder="Prix du vehicule">
                        <input type="text" name="annee" placeholder="Annee du vehicule">
                        <button type="submit" value="modifier" name="action">Modifier</button>
                    </form>
                </div>
                <div class="col-6">
                <form method='GET'>
        <input type="text" name="id" placeholder="Id du vehicule à supprimer">
        <button type="submit" value="supprimer" name="action">Supprimer</button>
    </form>

    <?php 
    if(isset($_GET['action']) && $_GET['action']=="supprimer" && !empty($_GET['id'])){
        
        $supprimer = $db->prepare('DELETE FROM vehicule WHERE id_voiture = :id');
        $supprimer->bindParam(':id', $_GET['id'],PDO::PARAM_STR);


        $supprimer = $supprimer->execute();
            if($supprimer){
                echo 'votre enregistrement a bien été supprimé';
                
            
            } else {
                echo 'Veuillez recommencer svp, une erreur est survenue';
            }
        }
    ?>
                </div>
            </div>
        </div>
        <?php 
    if(isset($_GET['action']) && $_GET['action']=="modifier"  && !empty($_GET['id'])  && !empty($_GET['modele']) && !empty($_GET['prix'])  && !empty($_GET['annee'])){
       
        $modifier = $db->prepare('UPDATE vehicule SET modele_voiture = :modele,prix_voiture=:prix,annee_voiture=:annee WHERE id_voiture =:id');
        $modifier->bindParam(':id', $_GET['id'], PDO::PARAM_STR);
        $modifier->bindParam(':modele', $_GET['modele'], PDO::PARAM_STR);
        $modifier->bindParam(':prix', $_GET['prix'], PDO::PARAM_STR);        
        $modifier->bindParam(':annee', $_GET['annee'], PDO::PARAM_STR);      


        
        $modifier = $modifier->execute();
      
            if($modifier){
                echo 'votre enregistrement a bien été modifié';
                
            
            } else {
                echo 'Veuillez recommencer svp, une erreur est survenue';
            }
        }
    
?>
        
        <table class=' table '>
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID </th>
                    <th scope="col">MODELE </th>
                    <th scope="col">PRIX </th>
                    <th scope="col">ANNEE </th>
                </tr>
            </thead>
            <?php foreach($vehicule as $vehicule): ?>
            <tbody class='table'>
                <tr class="thead-light">
                    <th scope="col"><?= $vehicule['id_voiture']?></th>
                    <th scope="col"><?= $vehicule['modele_voiture']?></th>
                    <th scope="col"><?= $vehicule['prix_voiture']?></th>
                    <th scope="col"><?= $vehicule['annee_voiture']?></th>
                </tr>
            </tbody>
            <?php endforeach; ?>
        </table>
    </section>
</body>

</html>