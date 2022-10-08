<?php
// Repr�sente un Chien de race (h�rite de la classe Animal
class Chien extends Animal
	{
        protected $race;
        protected $taille;     // en cm, 10cm minimum

        // Constructeur
        // Initialise une nouvelle instance de la classe Chien
        public function Chien($sonNom, $saCouleur, $saRace, $saTaille)
        {
            $this->race = $saRace;
	    $this->espece="Chien";
            $this->taille = $saTaille;
	    $this->setTaille($this->taille);
	    $this->nom=$sonNom;
        }
        // Obtient la race du chien
        public function getRace()
		{
			return $this->race;
		}
        
        // Obtient ou modifie la taille du chien
        public function getTaille()
		{
			return $this->taille;
		}
        
		public function setTaille($value)
        {
            if ($value > 10)
                {
				$this->taille = $value;
				}
                else
                {
				$this->taille = 10;
				}
        }
        
        // M�thodes
        // Fait aboyer le chien (en fonction de sa taille)
        public function aboyer()
        {
            echo $this->nom." aboie : ";
            if ($this->taille > 60)
                {$this->parler("Grrr");}
            else 
		{
		if ($this->taille > 20)
                {$this->parler("Wouaf");}
		else
                {$this->parler("Kaii");}
		}
        }
        // M�thodes
        // Fait se pr�senter le chien
       public function sePresenter()
        {
            echo "Je me presente : ".$this->espece." ".$this->nom."<BR/>";
            echo "Comme je suis CHIEN, je montre que je peux etre mechant"."<BR/>";
            echo "Attention je suis un ".$this->race." et je mesure ".$this->taille." cms"."<BR/>";
        }
    }
?>
