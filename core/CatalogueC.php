<?PHP
include "../config.php";
class CatalogueC {
function afficherCatalogueC ($Catalogue){
		echo "id_article: ".$Catalogue->getId_article()."<br>";
		echo "type: ".$Catalogue->getType()."<br>";
		echo "image: ".$Catalogue->getImage()."<br>";
		//) values (:cin, :nom,:prenom,:nbH,:tarifH)";
	}
	
	function ajouterCatalogueC($Catalogue){
		$sql="insert into Catalogue (id_article,type,image) values (:id_article,:type,:image)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        
        $id_article=$Catalogue->getId_article();
        $type=$Catalogue->getType();
        $image=$Catalogue->getImage();

		$req->bindValue('id_article',$id_article);
		$req->bindValue(':type',$type);
		$req->bindValue(':image',$image);
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherCatalogue(){
		//$sql="SElECT * From ReclamationRendezvous e inner join formationphp.ReclamationRendezvous a on e.cin= a.cin";
		$sql="SElECT * From catalogue";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerCatalogueC($id_article){
		$sql="DELETE FROM catalogue where id_article=:id_article";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_article',$id_article);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierCatalogue($Catalogue,$id_article){
		$sql="UPDATE catalogue SET id_article=:id_article,type=:type WHERE id_article=:idarticle";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
        $idarticle=$Catalogue->getId_article();
        $type=$Catalogue->getType();
   
		$datas = array(':id_article'=>$id_article,':type'=>$type);
		$req->bindValue(':id_article',$id_article);
		$req->bindValue(':type',$type);
		$req->bindValue(':image',$image);

		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererCatalogue($id_article){
		$sql="SELECT * from Catalogue where id_article=$id_article";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	

	
}

?>