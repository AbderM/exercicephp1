<?php

namespace App\Models;

class Livre {
    private $titre;
    private $auteur;
    private $anneePublication;


    public function __construct($titre, $auteur, $anneePublication){
        $this->titre = $titre;
        $this->auteur= $auteur;
        $this->anneePublication = $anneePublication;
    }

// GETTERS

    public function getTitre(){
        return $this->titre;
    }

    public function getAuteur(){
        return $this->auteur;
    }

    public function getAnneePublication(){
        return $this->anneePublication;
    }


    // SETTERS

    public function setTitre($titre){
        return $this->titre = $titre;
    }

    public function setAuteur($auteur){
        return $this->auteur = $auteur;
    }

    public function setAnneePublication($anneePublication){
        return $this->anneePublication = $anneePublication;
    }



}



    