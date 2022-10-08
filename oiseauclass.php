<?php

include "animalerieclass.php";
include "animalclass.php";


class Oiseau extends Animal
    {    
        protected $sonPays,$peutVoler;

        // Constructeur
        public function __construct($sonNom, $sonPays, $peutVoler)
        {
            $this->peutVoler=$peutVoler;
            $this->pays=$sonPays;
            $this->espece="Oiseau";
            $this->nom=$sonNom;
        }

        public function getPays()
        {
            return $this->$sonPays;
        }
        public function setPays($value)
        {
            $this->pays=$value;
        }
        public function getPeutVoler()
        {
            return $this->peutVoler;
        }
        public function setPeutVoler($value)
        {
            $this->peutVoler=$value;
        }

    
        public function peutVoler()
        {
            if($this->peutVoler)
             {
             echo "Je suis capable de voler"."<BR/>";
            }
            else
            {
            echo "Je suis incapable de voler"."<BR/>";   // code...
            }
        }

        
        // Méthodes
       public function sePresenter()
        {
        
        echo "Je me presente : ".$this->espece." ".$this->nom." ","je viens de"," ".$this->pays. "<BR/>";
        $this->peutVoler();
        }
    }
?>