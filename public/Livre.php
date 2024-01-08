<?php


// EXEMPLE DU PROF
require __DIR__ . '/../vendor/autoload.php';

use App\Models\Livre;

$livreDefaut = new Livre("Le Petit Prince","Antoine", 2000);


// Affichage des infos

echo "Livre par défaut : \n";
echo "Titre : " . $livreDefaut->getTitre() . "\n";
echo "Auteur : " . $livreDefaut->getAuteur() . "\n";
echo "Annee de publi : " . $livreDefaut->getAnneePublication() . "\n";


//Modification du titre du livre par défaut

$livreDefaut->setTitre("Test");

//Affichage des nouvelles infos
echo "\nLivre par défaut après modification :\n";
echo "Titre : " . $livreDefaut->getTitre() . "\n";
