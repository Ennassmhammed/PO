 <?php

 //ordinateur.class.php
                Class Ordinateur{
                    private $_marque;
                    private $_cpuClock; //la fréquence du processeur (en GHz).



                    public function __construct($marque, $cpuClock){ //Le constructeur est une fonction spéciale exécutée automatiquement quand on crée un nouvel objet de cette classe.

                    }
                    public function getMarque(){
                        return $this->marque;

                    }
                    public function getCpuClock(){
                        return $this->_cpuClock;
                    }
                    public function setCpuClock($speed){
                        $this->_cpuClock= $speed;
                    }
                }

                //l'objet est instancié avec un processeur de 2.4GHz

                $poste = new Ordinateur("Samsung", 2.4);
                $poste->setCpuClock(3);

                echo $poste->getCpuClock()."GHz";//affichera "3GHz"