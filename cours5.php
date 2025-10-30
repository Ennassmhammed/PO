<?php
//ordinateur.class.php
          Class Ordinateur{ //mettre en place la valeur des attributs soit en assignant directement des valeurs //spécifiques, soit en appelant diverses méthodes qui ont cette fonction.
            private $_marque; //un élément privé est uniquement accessible depuis la classe où il est declaré 
            private $_cpuClock;
            private $_hdd;
            const HDD_SMALL = "250Go"; //mettre en place la valeur des attributs soit en assignant directement des valeurs spécifiques, soit en appelant diverses méthodes qui ont cette fonction.
            const HDD_MEDIUM = "500Go";
            const HDD_BIG = "1To";
            public function __construct($marque, $cpuClock){   // un élément public sera accessible depuis n’importe où dans l’application
                $this->_marque = $marque;
                $this->_cpuClock = $cpuClock;
            }
            public function getHdd (){
                return $this->_hdd;
            }
            public function setHdd($capacite){ 
                    // On vérifie qu'on nous donne bien une des trois capacités prédéfinies plus haut.
                    if (in_array($capacite, [self::HDD_SMALL, self::HDD_MEDIUM, self::HDD_BIG])){
                                $this->_hdd = $capacite;
                    }
            }
        }
        //l'objet est instancié avec un processeur de 2.4 GHz et on y installe un petit disque dur
        $poste = new Ordinateur("Samsung", 2.4);
        $poste->setHdd(Ordinateur::HDD_SMALL);
        echo "Le disque dur est d’une capacité de ".$poste->getHdd() ; //affiche 250Go