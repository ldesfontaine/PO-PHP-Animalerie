 <?php
 // Repr�sente une m�nagerie, laquelle peut "h�berger" un certain nombre d'animaux
 class Menagerie{
        private $animaux;
        private $num=0;
        public function __construct(){
            $this->animaux=array();
        }
        public function arriver($animal){
            $this->animaux[]=$animal;
        }
        public function get($indice=NULL){
            $i=is_null($indice) ? $this->num : $indice;
            if(isset($this->animaux[$i])){
                if(is_null($indice)){
                    $this->num++;
                }
                return $this->animaux[$i];
            }else{
                return false;
            }
        }
		public function getall() {  
			return $this->animaux;        
		} 
		public function presenter()
        {
            echo "*****  PRESENTATION DE LA MENAGERIE  *****"."<BR/>";
            if ($this->count() == 0)
                {echo "La m�nagerie ne poss�de aucun animal !";}
            else
            {
                foreach ($this->animaux as $curranimal)
                {
                    $curranimal->sePresenter();
                }
            }
        }

		public function count()
		{       
			$count=0;      
			foreach($this->animaux as $curranimal)
				{$count+=1;}
			return $count;        
		}
	// Enregistre le d�part d'un animal de la m�nagerie
        public function partir($animal)
		{
			unset($this->animaux[array_search($animal, $this->animaux)]);
		}
	}
	?>
