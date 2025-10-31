<?php

// Définition de la classe Personne
class Personne {
   
    private $_nom;
    private $_prenom;
    private $_age;
    private $_dateNaissance;
    private $_ville;


    public function __construct($nom, $prenom, $age, $dateNaissance, $ville){
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_age = $age;
        $this->_dateNaissance = $dateNaissance;
        $this->_ville = $ville;
    }


}