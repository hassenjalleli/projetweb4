<?PHP
include "../config.php";
class RelationclientC {
function Relationclientcc ($Relationclient){
		
		echo "Nom: ".$Relationclient->getNom()."<br>";
		echo "Prenom: ".$Relationclient->getPrenom()."<br>";
		echo "Email: ".$Relationclient->getEmail()."<br>";
		echo "Adresse: ".$Relationclient->getAdresse()."<br>";
		echo "Gouvernorat: ".$Relationclient->getGouvernorat()."<br>";
		echo "Ville: ".$Relationclient->getVille()."<br>";
		echo "CodePostal: ".$Relationclient->getCodePostal()."<br>";
		echo "Telephone: ".$Relationclient->getTelephone()."<br>";
		echo "Password: ".$Relationclient->getPassword()."<br>";

	
		//) values (:cin, :nom,:prenom,:nbH,:tarifH)";
	}
	
	function ajouterRelationclient($Relationclient){
		$sql="insert into relationclient (Nom,Prenom,Email,Adresse,Gouvernorat,Ville,CodePostal,Telephone,Password) values (:Nom,:Prenom,:Email,:Adresse,:Gouvernorat,:Ville,:CodePostal,:Telephone,:Password)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        
        $Nom=$Relationclient->getNom();
        $Prenom=$Relationclient->getPrenom();
        $Email=$Relationclient->getEmail();
        $Adresse=$Relationclient->getAdresse();
		$Gouvernorat=$Relationclient->getGouvernorat();
		$Ville=$Relationclient->getVille();
		$CodePostal=$Relationclient->getCodePostal(); 
		$Telephone=$Relationclient->getTelephone();
		$Password=$Relationclient->getPassword();       
        

		$req->bindValue(':Nom',$Nom);
		$req->bindValue(':Prenom',$Prenom);
		$req->bindValue(':Email',$Email);
		$req->bindValue(':Adresse',$Adresse);
		$req->bindValue(':Gouvernorat',$Gouvernorat);
		$req->bindValue(':Ville',$Ville);
		$req->bindValue(':CodePostal',$CodePostal);
		$req->bindValue(':Telephone',$Telephone);
		$req->bindValue(':Password',$Password);
		

		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherRelationclient(){
		//$sql="SElECT * From ReclamationRendezvous e inner join formationphp.ReclamationRendezvous a on e.cin= a.cin";
		$sql="SElECT * From Relationclient";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerRelationclient($id){
		$sql="DELETE FROM Relationclient where id=:id";
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
	function modifierRelationclient($Relationclient,$id){
		$sql="UPDATE Relationclient SET Nom=:Nom,Prenom=:Prenom,Email=:Email,Adresse=:Adresse,Gouvernorat=:Gouvernorat,Ville=:Ville,CodePostal=:CodePostal,Telephone=:Telephone,Password=:Password WHERE id=:id";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
        
		$Nom=$Public->getNom();
        $Prenom=$Public->getPrenom();
        $Email=$Public->getEmail();
        $Adresse=$Public->getAdresse();
		$Gouvernorat=$Public->getGouvernorat();
		$Ville=$Public->getVille();
		$CodePostal=$Public->getCodePostal(); 
		$Telephone=$Public->getTelephone();
		$Password=$Public->getPassword();       
        
		$datas = array(':Nom'=>$Nom,':Prenom'=>$Prenom,':Email'=>$Email,':Adresse'=>$Adresse,':Gouvernorat'=>$Gouvernorat,':Ville'=>$Ville,':CodePostal'=>$CodePostal,':Telephone'=>$Telephone,':Password'=>$Password);
		
		$req->bindValue('Nom',$Nom);
		$req->bindValue(':Prenom',$Prenom);
		$req->bindValue(':Email',$Email);
		$req->bindValue(':Adresse',$Adresse);
		$req->bindValue(':Gouvernorat',$Gouvernorat);
		$req->bindValue(':Ville',$Ville);
		$req->bindValue(':CodePostal',$CodePostal);
		$req->bindValue(':Telephone',$Telephone);
		$req->bindValue(':Password',$Password);

            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererRelationclient($id){
		$sql="SELECT * from Relationclient where id=$id";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	

	

function rechercheRelationclient($recherche){
		
		$sql="SELECT * FROM relationclient WHERE Email LIKE '%".$recherche."%' ORDER BY Nom ASC";
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