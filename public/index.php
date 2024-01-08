<?php

require __DIR__ . '/../vendor/autoload.php';

use App\Models\Livre;

// Instance de classe "Livre" par défaut
$livreDefaut = new Livre("Ikigai", "Hector Garcia", 2016);

echo "Livre par défaut : \n";
echo "Titre : " . $livreDefaut->getTitre() . "\n";
echo "Auteur : " . $livreDefaut->getAuteur() . "\n";
echo "Année de publication : " . $livreDefaut->getAnneePublication() . "\n";

// Modification des infos
$livreDefaut->setTitre("Livre abder");
$livreDefaut->setAuteur("Abder Marega");
$livreDefaut->setAnneePublication(2010);

echo "\nLivre par défaut après modification :\n";
echo "Titre: " . $livreDefaut->getTitre() . "\n";
echo "Auteur: " . $livreDefaut->getAuteur() . "\n";
echo "Année de publication: " . $livreDefaut->getAnneePublication() . "\n";

// Livre supplémentaire
$livreSup = new Livre("Livre abder 2", "Abdo Marego", 1994);

// Affichage des informations du nouveau livre
echo "\nLivre supplémentaire :\n";
echo "Titre: " . $livreSup->getTitre() . "\n";
echo "Auteur: " . $livreSup->getAuteur() . "\n";
echo "Année de publication: " . $livreSup->getAnneePublication() . "\n";
//Supprimer dossier .git et reinitialiser un projet github sur mon repo ou push sur le repo du prof