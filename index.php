<?php
    require_once "frog.php";
    require_once "ape.php";

    $sheep= new Animal("shaun");
    echo "Name : " .$sheep->get_name();
    echo "<br/> Legs : " .$sheep->get_legs();
    echo "<br/> Cold blooded : " .$sheep->get_cold_blooded();
    echo "<br><br>";
    $kodok = new Frog("besar");
    $kodok->getFrogName();
    $kodok->getFrogLegs();
    $kodok->getFrogBlooded();
    $kodok->getFrogJump();
    echo "<br><br>";
    $ape = new Ape("kera sakti");
    $ape->getApeName();
    $ape->getApeLegs();
    $ape->getApeBlooded();
    $ape->getApeYell();
?>