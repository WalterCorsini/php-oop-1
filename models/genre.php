<?php 
    class Genre{
        private string $name;
        private string $adult_only;

        // costruttore con genre e riservato agli adulti 
        public function __construct(string $name, string $adult_only) {

            //  elimino gli spazi e controllo che nella stringa siano presenti solo lettere e che abbia almeno 5 caratteri all'interno.
            $name1 = str_replace(" ","",$name);
            if(ctype_alpha($name1) && strlen($name1)>=5){
                $this->name         = $name;
            } else {
                throw new Exception("solo lettere A - Z e lunghezza minima 5 caratteri");
            }

            //  controllo se il valore inserito e si o no
            if(strtolower($adult_only) === "si" || strtolower($adult_only) === "no"){
                $this->adult_only   = $adult_only;
            } else {
                throw new Exception("inserisci solo Si o No");
            }
        }

        
        // stampa genere
        function getGenre(){
            return "<strong>genere: </strong>" . $this->name; 
        }

        // stampa riservato agli adulti
        function getAdultOnly(){
            return "<strong> riservato agli adulti: </strong>" . $this->adult_only; 
        }
    }
?>