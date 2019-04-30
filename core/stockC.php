<?PHP
include "../config.php";
class StockC {
function afficherStockcc ($Stock){
		echo "id: ".$Stock->getId()."<br>";
		echo "nom: ".$Stock->getNom()."<br>";
		echo "reference: ".$Stock->getReference()."<br>";
		echo "categorie: ".$Stock->getCategorie()."<br>";
		echo "prix: ".$Stock>getPrix()."<br>";
		echo "etat: ".$Stock->getEtat()."<br>";
		echo "quantite: ".$Stock->getQuantite()."<br>";
		//) values (:cin, :nom,:prenom,:nbH,:tarifH)";
	}
	
	function ajouterStock($Stock){
		$sql="insert into Stock (nom,reference,categorie,prix,etat,quantite) values (:nom,:reference,:categorie,:prix,:etat,:quantite)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        

        $nom=$Stock->getNom();
        $reference=$Stock->getReference();
        $categorie=$Stock->getCategorie();
        $prix=$Stock->getPrix();
        $etat=$Stock->getEtat();
        $quantite=$Stock->getQuantite();
        

		$req->bindValue(':nom',$nom);
		$req->bindValue(':reference',$reference);
		$req->bindValue(':categorie',$categorie);
		$req->bindValue(':prix',$prix);
		$req->bindValue(':etat',$etat);
		$req->bindValue(':quantite',$quantite);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherStock(){
		//$sql="SElECT * From ReclamationRendezvous e inner join formationphp.ReclamationRendezvous a on e.cin= a.cin";
		$sql="SElECT * From Stock";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerStock($id){
		$sql="DELETE FROM Stock where id=:id";
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
	function modifierStock($Stock,$id){
		$sql="UPDATE stock SET nom= :nom,reference= :reference,categorie= :categorie,prix=:prix,etat= :etat,quantite= :quantite WHERE id= :idstock";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
        $idstock=$Stock->getId();
        $nom=$Stock->getNom();
		$reference=$Stock->getReference();
        $categorie=$Stock->getCategorie();
        $prix=$Stock->getPrix();
        $etat=$Stock->getEtat();
        $quantite=$Stock->getQuantite();
   		
		$datas = array(':id'=>$id,':nom'=>$nom,':reference'=>$reference, ':categorie'=>$categorie, ':prix'=>$prix,':etat'=>$etat,':quantite'=>$quantite);
		$req->bindValue(':idstock',$id);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':reference',$reference);
		$req->bindValue(':categorie',$categorie);
		$req->bindValue(':prix',$prix);
		$req->bindValue(':etat',$etat);
		$req->bindValue(':quantite',$quantite);
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererStock($id){
		$sql="SELECT * from Stock where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
function Recherchestock($recherche){
		
		$sql="SELECT * FROM stock WHERE nom LIKE '%".$recherche."%' ORDER BY Nom ASC";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function afficherstocktrier()
	{
		$sql="select * from stock order by quantite";
		$db=config::getConnexion();
		try
		{
			$liste=$db->query($sql);
			return $liste;
		}
		catch(Exception $e)
		{
			echo 'Erreur' .$e->getMessage();
		}
	}

	
}

?>