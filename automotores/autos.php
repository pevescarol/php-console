<?php
    namespace automotores;

    class Auto {
        public $modelo;
        public $puertas;
        public $ruedas;

        function __construct($modelo, $puertas, $ruedas){
            $this->modelo = $modelo;
            $this->puertas = $puertas;
            $this->ruedas = $ruedas;
        }

        function getAuto(){
            return "El modelo es " . $this->modelo . " tiene " . $this->puertas . " puertas y tiene " . $this->ruedas . " ruedas.";
        }
    }
?>