
<h1>Livres de Stephen KING</h1>

<?php


//require "Auteur.php
//require "Livre.php

spl_autoload_register(function ($class_name){
    require 'classes/'. $class_name. '.php';
});

$a1= new auteur("King","Stephen");

$l1 = new Livre("Exemple",500, 1999, 999, $a1);

echo $a1->getInfos();

var_dump($a1->getLivres());



