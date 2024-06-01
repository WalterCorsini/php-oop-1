<?php 
    class Genre{
        public string $name;
        public string $adult_only;

        public function __construct(string $name, string $adult_only) {

            $this->name         = $name;
            $this->adult_only   = $adult_only;
        }
    }
?>