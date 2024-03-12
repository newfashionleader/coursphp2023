<?php
//Exercice POO Avion, Velo, Bateau, Moto...

//Ici nous avons l'importation des classes dont on a besoin
require "Moto.php";
require "Velo.php";
require "Bateau.php";
require "Avion.php";

//Ici nous avons l'instanciation de ces classes
$moto1 = new Moto("Honda Civic", "Honda", "Japon", 250.0, true);
$moto2 = new Moto("Kawasaki Ninja", "Kawasaki", "Japon", 300.0, true);
$moto3 = new Moto("Ducati Diavel", "Ducati", "Italie", 280.0, false);
$moto4 = new Moto("Harley-Davidson 5", "Harley-Davidson", "Etats-Unis", 250.0, false);

$velo1 = new Velo("Canyon vtt model 5", "Canyon", "Pays-Bas", 45, false);
$velo2 = new Velo("Vélo de tourisme rétro Capri Carolina ", "Torpedo", "Italie", 85, true);

$avion1 = new Avion("Avion de chasse", "Rafale F3-R", "France", 750.0, 250);
$avion2 = new Avion("Avion de transport", "Mini Guppy", "Etats-Unis", 400.0, 78);

$bateau1 = new Bateau("Bateau a moteur", "EM46", 575, 100);
$bateau2 = new Bateau("Voilier", "HANSE630E", 150, 20);

//Affichage des objets
// echo "<h4>Les Motos</h4>";
// echo $moto1;
// echo $moto2;
// echo $moto3;
// echo "<h4>Les Velos</h4>";
// echo $velo1;
// echo $velo2;
// echo "<h4>Les Avions</h4>";
// echo $avion1;
// echo $avion2;
// echo "<h4>Les Bateaux</h4>";
// echo $bateau1;
// echo $bateau2;

//Exo1
// $velo1->faireWheeling();
// $moto1->faireWheeling();

//Exo2
// $bateau1->demarrer();
// echo $bateau1->amarrer();
// $bateau1->arreter();

//Exo3
// $bateau2->arreter();
// $bateau2->demarrer();
// $bateau2->arreter();
// echo $bateau2->amarrer();

//Exo4
// echo "Velo 1<br>" .$velo1;
// echo "Velo 2<br>" .$velo2;
// if($velo1->getVitesseMax() > $velo2->getVitesseMax() ){
//     echo "Le velo 1 est plus rapide que le velo 2 et la difference est de ". ($velo1->getVitesseMax() - $velo2->getVitesseMax()). " Km/h";
// }else{
//     echo "Le velo 2 est plus rapide que le velo 1 et la difference est de ". ($velo2->getVitesseMax() - $velo1->getVitesseMax()). " Km/h";
// }

//Exo5
// $tabMoto = [$moto3, $moto2, $moto4, $moto1];
// afficherMotosDuMemePays($tabMoto);
// function afficherMotosDuMemePays(array $motos): void
// {
//     $tabPays = [];
//     for ($i = 0; $i < sizeof($motos); $i++) {
//         $tabPays[$i] = $motos[$i]->getPays();
//     }
//     $cpt = 0;
//     $cpt2 = 1;
//     $pays = Null;
//     while ($cpt2 < sizeof($motos) && $pays == Null) {
//         if ($tabPays[$cpt] == $tabPays[$cpt2]) {
//             $pays = $tabPays[$cpt];
//         }
//         $cpt2++;
//         if ($cpt2 == sizeof($motos)) {
//             $cpt++;
//             $cpt2 = $cpt + 1;
//         }
//     }
//     if ($pays != Null) {
//         echo "Les motos suivantes viennent du même pays " . $pays . " : <br>";
//         foreach ($motos as $moto) {
//             if ($moto->getPays() == $pays) {
//                 echo $moto->getNom() . " vient du pays : " . $moto->getPays() . "<br>";
//             }
//         }
//     } else {
//         echo "Il n'y a pas de moto de même pays";
//     }
// }

//Exo6
$tabMotoVelo = [$moto1,$moto2,$moto3,$moto4,$velo1,$velo2];
//$tab recoit le tableau qu'avec les motos et velos connecté
$tab = exo6($tabMotoVelo);
//affichage du tableau de moto et vélo connecté
foreach($tab as $vehicule){
    echo $vehicule;
}
//fonction qui recoit le tableau de moto et velo. Et qui retourne un tableau de moto et vélo qui sont connecté
function exo6(array $tab):array{
    $tabVehiculeCo = [];
    foreach($tab as $vehicule){
        if($vehicule->getConnecte()){
            $tabVehiculeCo[] = $vehicule;
        }
    }
    return $tabVehiculeCo;
}

