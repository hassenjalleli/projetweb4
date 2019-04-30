<?PHP
class Stock{
	private $id;
	private $nom;
	private $reference;
	private $categorie;
	private $prix;
	private $etat;
	private $quantite;

	function __construct($nom,$reference,$categorie,$prix,$etat,$quantite){
	
		$this->nom=$nom;
		$this->reference=$reference;
		$this->categorie=$categorie;
		$this->prix=$prix;
		$this->etat=$etat;
		$this->quantite=$quantite;


	}
	
	function getId(){
		return $this->id;
	}
	function getNom(){
		return $this->nom;
	}
	function getReference(){
		return $this->reference;
	}
	function getCategorie(){
		return $this->categorie;
	}
	function getPrix(){
		return $this->prix;
	}
	function getEtat(){
		return $this->etat;
	}function getQuantite(){
		return $this->quantite;
	}


	function setId($id){
		$this->id=$id;
	}
	function setNom($nom){
		$this->nom=$nom;
	}
	function setReference($reference){
		$this->reference=$reference;
	}
	function setCategorie($categorie){
		$this->categorie=$categorie;
	}
	function setPrix($prix){
		$this->prix=$prix;
	}
	function setEtat($etat){
		$this->etat=$etat;
	}
	function setQuantite($quantite){
		$this->quantite=$quantite;
	}
	function setTelephone($Telephone){
		$this->Telephone=$Telephone;
	}
	
}

?>