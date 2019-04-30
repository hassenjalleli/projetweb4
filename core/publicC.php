<?PHP
include "../config.php";
class PublicC {
function Publiccc ($Public){
		
		echo "Nom: ".$Public->getNom()."<br>";
		echo "Discri: ".$Public->getDiscri()."<br>";
	
		//) values (:cin, :nom,:prenom,:nbH,:tarifH)";
	}
	
	function ajouterPublic($Public){
		$sql="insert into Public (nom,discri) values (:nom,:discri)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        
        $Nom=$Public->getNom();
        $Discri=$Public->getDiscri();
        

		$req->bindValue('nom',$Nom);
		$req->bindValue(':discri',$Discri);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherPublic(){
		//$sql="SElECT * From ReclamationRendezvous e inner join formationphp.ReclamationRendezvous a on e.cin= a.cin";
		$sql="SElECT * From Public";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerPublic($id){
		$sql="DELETE FROM Public where id=:id";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierPublic($Public,$id){
		$sql="UPDATE Public SET nom=:nom,discri=:discri WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
        $nom=$Public->getNom();
        $discri=$Public->getDiscri();
		
		$datas = array(':nom'=>$nom,':discri'=>$discri);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':discri',$discri);

            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererPublic($id){
		$sql="SELECT * from Public where id=$id";
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