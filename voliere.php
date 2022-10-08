<?php
include "animalerieVoliere.php";
include "oiseauclass.php";


$voliere= new voliere;

$bird1 = new Oiseau("flappy",'Hong Kong',true);
$bird2= new Oiseau("Bird",'Paris',false);
$bird3= new Oiseau("Alain","Angleterre",true);
$bird4= new Oiseau("Terrieur","Belgique",false);



$voliere->arriver($bird1);
$voliere->arriver($bird2);
$voliere->arriver($bird3);
$voliere->arriver($bird4);
$voliere ->presenter();
echo "<BR/>"."La voliere comporte ".$voliere->count()." oiseaux"."<BR/>";


$voliere->partir($bird1);
$voliere->partir($bird2);
$voliere ->presenter();
echo "<BR/>"."La voliere comporte ".$voliere->count()." oiseaux"."<BR/>";


?>