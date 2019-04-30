<?PHP
include "../config.php";

class RelationclientC {
	/*public function_construct()
	{
		$this->db=new config();
		$this->db=$this->db->getConnexion();
	}*/
function Relationclientcc ($Relationclient){
		echo "Nom: ".$Relationclient->getId()."<br>";
		echo "Nom: ".$Relationclient->getNom()."<br>";
		echo "Prénom: ".$Relationclient->getPrenom()."<br>";
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
		$Nom=$Relationclient->getNom();
        $Prenom=$Relationclient->getPrenom();
        $Email=$Relationclient->getEmail();
        $Adresse=$Relationclient->getAdresse();
        $Gouvernorat=$Relationclient->getGouvernorat();
        $Ville=$Relationclient->getVille();
        $CodePostal=$Relationclient->getCodePostal();
        $Telephone=$Relationclient->getTelephone();
        $Password=$Relationclient->getPassword();

		$sql="insert into Relationclient (nom,prenom,email,adresse,gouvernorat,ville,codePostal,telephone,password) values (:nom,:prenom,:email,:adresse,:gouvernorat,:ville,:codePostal,:telephone,:Password)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        


		$req->bindValue('nom',$Nom);
		$req->bindValue(':prenom',$Prenom);
		$req->bindValue(':email',$Email);
		$req->bindValue(':adresse',$Adresse);
		$req->bindValue(':gouvernorat',$Gouvernorat);
		$req->bindValue(':ville',$Ville);
		$req->bindValue(':codePostal',$CodePostal);
		$req->bindValue(':telephone',$Telephone);
		$req->bindValue(':password',$Password);
		
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
	function modifierRelationclient($Relationclient,$email){
		$sql="UPDATE Relationclient SET nom=:nom,prenom=:prenom,email=:email,adresse=:adresse,gouvernorat=:gouvernorat,ville=:ville,codePostal=:codePostal,telephone=:telephone, password=:password WHERE email=:email";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
        $nom=$Relationclient->getNom();
        $prenom=$Relationclient->getPrenom();
		$email=$Relationclient->getEmail();
        $adresse=$Relationclient->getAdresse();
        $gouvernorat=$Relationclient->getGouvernorat();
        $ville=$Relationclient->getVille();
        $codePostal=$Relationclient->getCodePostal();
        $telephone=$Relationclient->getTelephone();
        $password=$Relationclient->getPassword();
		$datas = array(':nom'=>$nom,':prenom'=>$prenom,':email'=>$email, ':adresse'=>$adresse, ':ville'=>$ville,':codePostal'=>$codePostal,':telephone'=>$telephone,':password'=>$password);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		$req->bindValue(':email',$email);
		$req->bindValue(':adresse',$adresse);
		$req->bindValue(':ville',$ville);
		$req->bindValue(':gouvernorat',$gouvernorat);
		$req->bindValue(':codePostal',$codePostal);
		$req->bindValue(':telephone',$telephone);
		$req->bindValue(':password',$password);
		
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
	

	
}

?>