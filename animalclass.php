<?php
// Repr�sente un animal
class Animal
    {
        // Propri�t�s priv�es
    protected $nom;
    private $espece;

        // Obtient ou d�finit le nom d'un animal 
    public function getNom()
        {return $this->nom; }
	
    public function setNom($value)
            {$this->nom = $value; }
       
       // Obtient ou d�finit l'esp�ce d'un animal
    public function getEspece()
        {return $this->espece; }
	
    public function setEspece($value)
            {$this->espece = $value; }

  // Constructeur
// Initialise une nouvelle instance de la classe Animal

    public function Animal($sonNom, $sonEspece)
        {
            $this->nom = $sonNom;
            $this->espece = $sonEspece;
	    }

// M�thodes
// Fait se pr�senter l'animal
    public function sePresenter()
        {
            echo "Je me presente : ".$this->espece." ".$this->nom."<BR/>";
            if ($this->nom == "Maurice")
                {echo "... Il parait que je pousse le bouchon un peu trop loin ...!!! ;-)<br />";}
        }
// Fait dormir l'animal
        public function dormir()
        {
            echo "     Zzz Zzz Zzz.... (".$this->nom." s'est endormi(e))"."<BR/>";
		}
// Fait parler l'animal
		public function parler($leCri)
        {
            for ($i = 0; $i < 4; $i++)
            {
                echo($leCri." !! ");
            }
            echo "<BR/>";
        }
// Fait manger l'animal
        public function Manger()
        {
            echo "     J ai si faim... Donne-moi un biscuit !"."<BR/>";
        }   
    }
?>
