<?PHP
class publicite{
	private $id;
	private $nom;
    private $fichier;
    function __construct($id,$nom,$fichier){
		$this->id=$id;
		$this->nom=$nom;
        $this->fichier=$fichier;
    }
        function getid(){
            return $this->id;
        }
        function getnom(){
            return $this->nom;
        }
        function getfichier(){
            return $this->fichier;
        }

        function setnom($nom){
            $this->nom=$nom;
        }
        function setfichier($fichier){
            $this->fichier;
        }
    }
    ?>