<?PHP
class Livreur{
	private $id;
	private $nom;
	private $prenom;
	private $email;
	private $datedenaissance;
	private $etat;
	private $nbjtravail;	
	private $telephone;

	function __construct($id,$nom,$prenom,$email,$datedenaissance,$etat,$nbjtravail,$telephone){
		$this->id=$id;
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->email=$email;
		$this->datedenaissance=$datedenaissance;
		$this->etat=$etat;
		$this->nbjtravail=$nbjtravail;
        $this->telephone=$telephone;

	}
	
	function getId(){
		return $this->id;
	}
	function getNom(){
		return $this->nom;
	}
	function getPrenom(){
		return $this->prenom;
	}
	function getEmail(){
		return $this->email;
	}
	function getDatedenaissance(){
		return $this->datedenaissance;
	}
	function getEtat(){
		return $this->etat;
	}function getNbjtravail(){
		return $this->nbjtravail;
	}
	function getTelephone(){
		return $this->telephone;
	}


	function setId($id){
		$this->id=$id;
	}
	function setNom($nom){
		$this->nom=$nom;
	}
	function setPrenom($Prenom){
		$this->prenom=$prenom;
	}
	function setEmail($email){
		$this->email=$email;
	}
	function setDatedenaissance($datedenaissance){
		$this->datedenaissance=$datedenaissance;
	}
	function setEtat($etat){
		$this->etat=$etat;
	}
	function setNbjtravail($nbjtravail){
		$this->nbjtravail=$nbjtravail;
	}
	function setTelephone($Telephone){
		$this->Telephone=$Telephone;
	}
	
}

?>
