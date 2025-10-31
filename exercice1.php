<?php

// Définition de la classe Personne
class Personne {
   
    private $_nom;
    private $_prenom;
    private $_dateNaissance;
    private $_ville;


    public function __construct($nom, $prenom, $age, $dateNaissance, $ville){
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_dateNaissance = $dateNaissance;
        $this->_ville = $ville;
    }


}

public function getNom(){
        return $this->_nom;
    }

    public function getPrenom(){
        return $this->_prenom;
    }

    public function getDateNaissance(){
        return $this->_dateNaissance;
    }

    public function getVille(){
        return $this->_ville;
    }

    
    public function setNom($nom){
        $this->_nom = $nom;
    }

    public function setPrenom($prenom){
        $this->_prenom = $prenom;
    }


    public function setDateNaissance($dateNaissance){
        $this->_dateNaissance = $dateNaissance;
    }

    public function setVille($ville){
        $this->_ville = $ville;
    }