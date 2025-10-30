<?php
//ordinateur.class.php
      class Ordinateur{
        private $_marque;


        public function __construct($marque){
                     $this->_marque = $marque;

        }
        public function getMarque(){
                      return $this->_marque;
        }
      }
      $poste = new Ordinateur("Samsung");
      echo $poste->getMarque(); //affiche Samnsung 