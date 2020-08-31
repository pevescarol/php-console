<?php
    namespace automatizacion;

    class Auto {
        public $description;
        public $intents;
        public $date;

        function __construct($description, $intents, $date){
            $this->description = $description;
            $this->intents = $intents;
            $this->date = $date;
        }

        function getAuto(){
            return "La descripción es " . $this->description . " con " . $this->intents . " intentos y se ejecutará el día " . $this->date;
        }
    }
?>