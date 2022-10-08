<?php
include "animalerieclass.php";
include "animalclass.php";
include "chienclass.php";

$unanimal = new Animal("Babar","elephant");
$nemo = new Animal("Nemo","Poisson");
$felix = new Animal("Felix","Chat");
$pistache= new Animal("Pistache","Perruche");
//la vie de Nemo se résume ainsi
$nemo->sePresenter();
$nemo->parler("Gloup");
$nemo->manger();
$nemo->dormir();
echo "<BR/>";
//la vie de Felix se résume ainsi
$felix->sePresenter();
$felix->parler("Miaou");
$felix->manger();
$felix->dormir();
echo "<BR/>";
//la vie de Pistache se résume ainsi
$pistache->sePresenter();
$pistache->parler("Hi");
$pistache->manger();
$pistache->dormir();

$nemo = new Animal("Nemo","Poisson");
$felix = new Animal("Felix","Chat");
$pistache= new Animal("Pistache","Perruche");
//Création d'une ménagerie
$zoo= new Menagerie;
//enregistrement des animaux qui arrivent dans la ménagerie
$zoo->arriver($nemo);
$zoo->arriver($felix);
$zoo->arriver($pistache);
//Présentation de la ménagerie ainsi constituée
echo "<BR/>"."Le zoo comporte ".$zoo->count()." animaux"."<BR/>";
$zoo->presenter();
//Enregistrement du départ de Félix
echo "<BR/>"."Felix s'en va"."<BR/>";
$zoo->partir($felix);
//Re-Présentation de la ménagerie
echo "<BR/>"."Le zoo comporte maintenant ".$zoo->count()." animaux"."<BR/>";
$zoo->presenter();
//Changement de nom du poisson
$nemo->setNom("Maurice");
//Re-Présentation de la ménagerie
echo "<BR/>"."Le zoo comporte maintenant ".$zoo->count()." animaux"."<BR/>";
$zoo -> presenter();


//les chiens prennent vie
$medor = new Chien("Médor","noir","batard",19);
$saucisse = new Chien("Saucisse","roux","teckel",9);
$pongo = new Chien("Pongo","pie","dalmatien",70);
$perdita = new Chien("Perdita","pie","dalmatien",50);
//Les chiens aboient quand
echo "<BR/>"." La caravane passe .."."<BR/>";
$medor->aboyer($medor); $saucisse->aboyer($saucisse);


echo "<BR/>"."Quelle est la taille de Saucisse ? ".$saucisse->getTaille()." cm"."<BR/>";
$pongo->aboyer($pongo);
$perdita->aboyer($perdita);
//Les chiens sont en pension au chenil
$LeChenil = new Menagerie;
$LeChenil->arriver($medor);
$LeChenil->arriver($saucisse);
$LeChenil->arriver($pongo);
$LeChenil->arriver($perdita);
//Le chenil présente ses pensionnaires
$LeChenil->presenter();


$felix->sePresenter();
$saucisse->dormir();
$saucisse->Manger();
$saucisse->parler('-------------');
$saucisse->sePresenter();






#-------------------------------------------------------------------------
