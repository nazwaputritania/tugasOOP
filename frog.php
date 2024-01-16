<?php
    require_once "animal.php";

    class Frog extends Animal {
        public function __construct($name){
            parent::__construct($name);
        }

        public function getFrogName(){
            echo "Name: " . $this->get_name() . "<br/>";
        }

        public function getFrogLegs(){
            echo "Legs: " . $this->get_legs() . "<br/>";
        }

        public function getFrogBlooded(){
            echo "Cold blooded: " . $this->get_cold_blooded() . "<br/>";
        }

        public function getFrogJump(){
            echo "Jump: hop hop";
        }
    }
?>
