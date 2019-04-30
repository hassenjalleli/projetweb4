<?PHP

class ReclamationC {
function afficherReclamationC($Reclamation){
		echo "Id: ".$Reclamation->getId()."<br>";
		echo "Nom: ".$Reclamation->getNom()."<br>";
		echo "Prénom: ".$Reclamation->getPrenom()."<br>";
		echo "Email: ".$Reclamation->getEmail()."<br>";
		echo "Adresse: ".$Reclamation>getAdresse()."<br>";
		echo "Gouvernorat: ".$Reclamation->getGouvernorat()."<br>";
		echo "Ville: ".$Reclamation->getVille()."<br>";
		echo "CodePostal: ".$Reclamation->getCodePostal()."<br>";
		echo "Telephone: ".$Reclamation->getTelephone()."<br>";
		//) values (:cin, :nom,:prenom,:nbH,:tarifH)";
	}
	
	function ajouterReclamation($Reclamation){
		$sql="insert into Reclamation (Nom,Prenom,Email,Adresse,Gouvernorat,Ville,CodePostal,Telephone) values (:nom,:prenom,:email,:adresse,:gouvernorat,:ville,:codePostal,:telephone)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        
        $Nom=$Reclamation->getNom();
        $Prenom=$Reclamation->getPrenom();
        $Email=$Reclamation->getEmail();
        $Adresse=$Reclamation->getAdresse();
        $Gouvernorat=$Reclamation->getGouvernorat();
        $Ville=$Reclamation->getVille();
        $CodePostal=$Reclamation->getCodePostal();
        $Telephone=$Reclamation->getTelephone();

		$req->bindValue('nom',$Nom);
		$req->bindValue(':prenom',$Prenom);
		$req->bindValue(':email',$Email);
		$req->bindValue(':adresse',$Adresse);
		$req->bindValue(':gouvernorat',$Gouvernorat);
		$req->bindValue(':ville',$Ville);
		$req->bindValue(':codePostal',$CodePostal);
		$req->bindValue(':telephone',$Telephone);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}

	function rechercheReclamation($recherche){
		
		$sql="SELECT * FROM `reclamation` WHERE `Email` LIKE '%".$recherche."%' ORDER BY `Nom` ASC";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	
	function afficherReclamation(){
		//$sql="SElECT * From Reclamation e inner join formationphp.Reclamation a on e.cin= a.cin";
		$sql="SElECT * From Reclamation";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerReclamation($id){
		$sql="DELETE FROM Reclamation where id=:id";
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
	function modifierReclamation($Reclamation,$id){
		$sql="UPDATE Reclamation SET Nom=:Nom,Prenom=:Prenom,Email=:Email,Adresse=:Adresse,Gouvernorat=:Gouvernorat,Ville=:Ville,CodePostal=:CodePostal,Telephone=:Telephone WHERE Id=:Id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
        $Nom=$Reclamation->getNom();
        $Prenom=$Reclamation->getPrenom();
		$Email=$Reclamation->getEmail();
        $Adresse=$Reclamation->getAdresse();
        $Gouvernorat=$Reclamation->getGouvernorat();
        $Ville=$Reclamation->getVille();
        $CodePostal=$Reclamation->getCodePostal();
        $Telephone=$Reclamation->getTelephone();


		$req->bindValue(':Nom',$Nom);
		$req->bindValue(':Prenom',$Prenom);
		$req->bindValue(':Email',$Email);
		$req->bindValue(':Adresse',$Adresse);
		$req->bindValue(':Ville',$Ville);
		$req->bindValue(':CodePostal',$CodePostal);
		$req->bindValue(':Gouvernorat',$Gouvernorat);
		$req->bindValue(':Telephone',$Telephone);
		$req->bindValue(':Id',$id);
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererReclamation($id){
		$sql="SELECT * from Reclamation where id=$id";
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