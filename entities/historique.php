<?PHP
class Historique{
	private $reference;
	private $nom_produit;
	private $marque;
	private $prix;

	function __construct($reference,$nom_produit,$marque,$prix){
		$this->reference=$reference;
		$this->nom_produit=$nom_produit;
		$this->marque=$marque;
		$this->prix=$prix;


	}
	
	function getreference(){
		return $this->reference;
	}
	function getnomproduit(){
		return $this->nom_produit;
	}
	function getmarque(){
		return $this->marque;
	}
	function getprix(){
		return $this->prix;
	}

	function setreference($reference){
		$this->reference=$reference;
	}
	function setnomproduit($nom_produit){
		$this->nom_produit=$nom_produit;
	}
	function setmarque($marque){
		$this->marque=$marque;
	}
function setprix($prix){
		$this->prix=$prix;
	}
	
}

?>