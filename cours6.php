<?php
        Class Ordinateur{
        private $_marque;
        private $_cpuClock;
        private static $_nbPostes = 0;//attribut statique
        public function __construct($data){
                    $this->_marque = $data[0];
                    $this->_cpuClock = $ data[1];
                    self::$_nbPostes++;//le compteur est incrémenté
            }       
public function setMarque($marque){
 $this->_marque = $marque;
}
public function setCpuClock($speed){
$this->_cpuClock = $speed;
}
public static function combien(){//méthode statique
echo self::$_nbPostes."<br/>";
}
}
Ordinateur::combien();//affiche 0
$poste = new Ordinateur(array("Samsung", 2.4));
$poste2 = new Ordinateur(array("Hitachi", 1.6));
Ordinateur::combien();//affiche 2