<?php
include "animalerieclass.php";
include "animalclass.php";
include "chienclass.php";
$test= new Menagerie;


$chat1 = new Animal("rlatant","Chat");
$chat2 = new Animal("kira","Chat");
$chien1= new Chien("yoran","bleu","Berdercolie",10);
$chien2= new Chien("vodkA","jaune","cocker",10);


$test->arriver($chat1);
$test->arriver($chat2);
$test->arriver($chien1);
$test->arriver($chien2);
$test ->presenter();

?>