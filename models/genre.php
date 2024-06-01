<?php 
    class Genre{
        private string $name;
        private string $adult_only;

        // costruttore con genre e riservato agli adulti 
        public function __construct(string $name, string $adult_only) {

            $this->name         = $name;
            $this->adult_only   = $adult_only;
        }

        
        // stampa senza controllo
        function getGenre(){
            return "<strong>genere: </strong>" . $this->name; 
        }

        function getAdultOnly(){
            return "<strong>riservato agli adulti: </strong>" . $this->adult_only; 
        }
    }
?>