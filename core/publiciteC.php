<?PHP
include "../config.php";
class publiciteC {
function afficherpublicite ($publicite){
		echo "id: ".$publicite->getid()."<br>";
		echo "nom: ".$publicite->getnom()."<br>";
		echo "fichier: ".$publicite->getfichier()."<br>";
	}
	function ajouterpublicite($publicite){
		$sql="insert into publicite (id,nom,fichier) values (:id, :nom,:fichier)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $id=$publicite->getid();
        $nom=$publicite->getNom();
		$fichier=$publicite->getfichier();
		$req->bindValue(':id',$id);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':fichier',$fichier);			
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}

		
	function afficherprods(){
		//$sql="SElECT * From catalogue e inner join formationphp.catalogue a on e.id= a.id";
		$sql="SElECT * From publicite";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	
	function afficherpublicites(){
		//$sql="SElECT * From catalogue e inner join formationphp.catalogue a on e.id= a.id";
		$sql="SElECT * From publicite";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerpublicite($id){
		$sql="DELETE FROM publicite where id= :id";
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
	function modifierpublicite($publicite,$id){
		$sql="UPDATE publicite SET id=:idn, nom=:nom,fichier=:fichier WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$idn=$publicite->getid();
        $nom=$publicite->getnom();
		$fichier=$publicite->getfichier();
		$datas = array(':idn'=>$idn, ':id'=>$id, ':nom'=>$nom,':fichier'=>$fichier);
		$req->bindValue(':idn',$idn);
		$req->bindValue(':id',$id);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':fichier',$fichier);			
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererpublicite($id){
		$sql="SELECT * from publicite where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListepublicite($quantite){
		$sql="SELECT * from publicite where quantite=$quantite";
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