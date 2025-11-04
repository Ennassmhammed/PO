<?php

Class Voiture {
    private string $_marque;
    private string $_modele;
    private int $_nbPortes;
    private int $_vitesseActuelle;
    private bool $_statut; 


    public function __construct($marque, $modele, $nbPortes, int $vitesseActuelle){
        $this->_marque = $marque;
        $this->_modele = $modele; 
        $this->_nbPortes = $nbPortes;
        $this->_vitesseActuelle= $vitesseActuelle;
        $this->_statut = 0 ;


}
public function __toString() {
    {
        return $this->_marque.' '.$this->_modele.' '.$this->_nbPortes.' '.$this->_vitesseActuelle;
    }
}      
public function getMarque(){                                     
    return $this->_marque;
}

public function getModele(){
    return $this->_modele;
}

public function getNbPortes(){
    return $this->_nbPortes;
}

public function getVitesseActuelle(){
    return $this->_vitesseActuelle;
}
public function setMarque($marque){      
    $this->_marque = $marque;
}

public function setModele($modele){
    $this->_modele = $modele;
}


public function setNbPortes($nbPortes){
    $this->_nbPortes = $nbPortes;
}

public function setVitesseActuelle($vitesseActuelle){
    $this->_vitesseActuelle = $vitesseActuelle;
}
public function setVitesseAccelerer($vitesseActuelle){
    $this->_vitesseActuelle =$vitesseAccelerer;
}

// faire une fonction qui à l'appelle sur un objet voiture va juste changer le statut

public function demarrer(){
// si le statut est false alors je demmarre la voiture et met son statut à true
if ($this->_statut == 0){
    // si le statut de la voiture est zro ça signigfie qu'elle est à l'arrêt
    $this->_statut = 1;
    return "la voiture  démarrée  ";

} else 
return "la voiture n'est pas demarrée";
   
// sinon retourner que la voiture est déjà démarré

}
public function stopper(){
    if ($this->_statut == 1){
        $this->_statut = 0;
        return "La voiture est stopper ";
    }else return "la voiture esr demarrée";
}

public function accelerer($vitesse){
    if($this->_statut == 1){

    $this->_vitesseActuelle == $this->_vitesseActuelle + $vitesse;

    return "Le vehicule $this->_marque $this->_modele veut accelerer de $this->_vitesseActuelle";
}else return "Pour accelerer il faut que  le vehicule $this->_marque $this->_modele sois demarrer";
}
public function decelerer($vitesse){
    if ($this->_statut== 1 && $vitesse <= $vitesseActuelle){
        $this->_vitesseActuelle == $this->_vitesseActuelle-$vitesse;
        return "le vehicule $this->_marque $this->_modele veut decelerer appartir de la vitesse atteinte au moment de l'acceleration de $this->_vitesseActuelle + $vitesse";
    } else  return "le vehicule $this->_marque $this->_modele une fois decelerer il sera a vitesse intial avant l'acceleration qui est 50";
}
    
    


}




$voiture1 = new Voiture("Peugeot", "408", 5,50,); // instentiation pour crée un objet de personne dans la classe 
$voiture2 = new Voiture("citröen", "C4", 3,0); // instentiation pour crée un objet de personne dans la classe 
// echo $voiture1 ;
// echo $voiture2;

var_dump($voiture1);

echo $voiture1->demarrer();
echo $voiture1->accelerer(100);

echo $voiture1->stopper();

echo $voiture1->accelerer(100);

echo $voiture1->decelerer(50);




// var_dump($voiture1);
    