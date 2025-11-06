<?php

Class Voiture {
    private string $_marque;
    private string $_modele;
  


    public function __construct($marque, $modele){
        $this->_marque = $marque;
        $this->_modele = $modele; 
      

}
public function __toString() {
    {
        return $this->_marque.' '.$this->_modele;
    }
}      
public function getMarque(){                                     
    return $this->_marque;
}


public function setMarque($marque){      
    $this->_marque = $marque;
}

public function setModele($modele){
    $this->_modele = $modele;

}
public function getInfos() {
        return "Voiture : " . $this->_marque . " " . $this->_modele;
    }

}











Class Voiture elec {
    private string $_marque;
    private string $_modele;
    private string $_autonomie;
  


    public function __construct($marque, $modele,){
        $this->_marque = $marque;
        $this->_modele = $modele; 
        $this->_modele = $modele;
      

}
public function __toString() {
    {
        return $this->_marque.' '.$this->_modele.' '.$this->autonomie;
    }
}      
public function getMarque(){                                     
    return $this->_marque;
}
public function getAutonomie(){                                     
    return $this->_autonomie;
}


public function setMarque($marque){      
    $this->_marque = $marque;
}

public function setModele($modele){
    $this->_modele = $modele;

}
public function setAutonomie($autonomie){
    $this->_autonomie = $autonomie;

}
}
$v1 = new Voiture("Peugeot", "408");
$ve1 = new VoitureElec("BMW", "i3", 150); 

echo $v1->getInfos() . "<br/>";
echo $ve1->getInfos() . "<br/>";





















 