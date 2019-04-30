<?PHP
class Catalogue{
	private $id_article;
	private $type;
	private $image;

	function __construct($id_article,$type,$image){
		$this->id_article=$id_article;
		$this->type=$type;
		$this->image=$image;
	}
	
	function getId_article(){
		return $this->id_article;
	}
	function getType(){
		return $this->type;
	}
	function getImage(){
		return $this->image;
	}

	function setId_article($id_article){
		$this->id_article=$id_article;
	}
	function setNom($type){
		$this->type=$type;
	}
	function setImage($image){
		$this->image=$image;
	}
	
}

?>