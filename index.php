

<?php


//require "Auteur.php
//require "Livre.php

spl_autoload_register(function ($class_name){
    require 'classes/'. $class_name. '.php';
});

$a1= new auteur("King","Stephen");
$a2= new auteur("Mathieu","Quentin");

$l1 = new Livre("Ca ", 1138 , 1986 , 20 , $a1);
$l2 = new Livre("Simetierre ", 374 , 1983, 15 , $a1);
$l3 = new Livre("Le Fléau ", 823 , 1978 , 14 , $a1);
$l4 = new Livre("Shining ", 447 , 1977, 16 , $a1 );

$l5 = new Livre("Fiesta ", 447 , 1977, 16 , $a2 );


// echo $a1->getInfos();
// echo $l1->getInfos();

/*$l1 = new Livre("Ca", "1138", 1986, 20, "auteur");

echo $l1->getInfos();*/

echo $a1->afficherLivres();
echo $a2->afficherLivres();

