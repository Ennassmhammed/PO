<?php

    class Ordinateur{
        private $_marque;

                    


        public function __construct($marque){

            $this->_marque = $marque;


        }



    }





    $poste = new Ordinateur("samsung");// crééra un objet Ordinateur de marque Samsung 
                