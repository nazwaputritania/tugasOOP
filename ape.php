<?php
    require_once "animal.php";

    class Ape extends Animal{
        public function __construct($name){
            parent::__construct($name);
        }
            public function getApeName(){
                echo "Name: " . $this->get_name() . "<br/>";
            }
            public function getApeLegs(){
                echo "Legs: " . $this->get_legs() . "<br/>";
            }
            public function getApeBlooded(){
                echo "Cold blooded: " . $this->get_cold_blooded() . "<br/>";
            }
            

        public function getApeYell(){
        echo "Yell : Auooo";
        }
}
?>