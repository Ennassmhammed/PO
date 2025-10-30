 <?php

 //ordinateur.class.php
                Class Ordinateur{
                    private $_marque;
                    private $_cpuClock;



                    public function __construct($marque, $cpuClock){

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