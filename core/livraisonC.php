<?PHP
include "../config.php";
class LivraisonC {
function afficherLivraisoncc ($Livraison){
		echo "num_livraison: ".$Livraison->getnum_livraison()."<br>";
		echo "nom_client: ".$Livraison->getnom_client()."<br>";
		echo "prenom_client: ".$Livraison->getprenom_client()."<br>";
		echo "email: ".$Livraison->getemail()."<br>";
		echo "adresse: ".$Livraison>getadresse()."<br>";
		echo "gouvernorat: ".$Livraison->getgouvernorat()."<br>";
		echo "ville: ".$Livraison->getville()."<br>";
		echo "CodePostal: ".$Livraison->getCodePostal()."<br>";		
		echo "telephone: ".$Livraison->gettelephone()."<br>";
		
	}
	
	function ajouterLivraison($Livraison){
		$sql="insert into livraison (num_livraison,nom_client,prenom_client,email,adresse,gouvernorat,ville,CodePostal,telephone) values (:num_livraison,:nom_client,:prenom_client,:email,:adresse,:gouvernorat,:ville,:CodePostal,:telephone)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        
        $num_livraison=$Livraison->getnum_livraison();
        $nom_client=$Livraison->getnom_client();
        $prenom_client=$Livraison->getprenom_client();
        $email=$Livraison->getemail();
        $adresse=$Livraison->getadresse();
        $gouvernorat=$Livraison->getgouvernorat();
        $ville=$Livraison->getville();
        $CodePostal=$Livraison->getCodePostal();
        $telephone=$Livraison->gettelephone();
        

		$req->bindValue(':num_livraison',$num_livraison);
		$req->bindValue(':nom_client',$nom_client);
		$req->bindValue(':prenom_client',$prenom_client);
		$req->bindValue(':email',$email);
		$req->bindValue(':adresse',$adresse);
		$req->bindValue(':gouvernorat',$gouvernorat);
		$req->bindValue(':ville',$ville);
		$req->bindValue(':CodePostal',$CodePostal);
		$req->bindValue(':telephone',$telephone);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherLivraison(){
		//$sql="SElECT * From ReclamationRendezvous e inner join formationphp.ReclamationRendezvous a on e.cin= a.cin";
		$sql="SElECT * From Livraison";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerLivraison($num_livraison){
		$sql="DELETE FROM Livraison where num_livraison=:num_livraison";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':num_livraison',$num_livraison);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierLivraison($Livraison,$num_livraison){
		$sql="UPDATE Livraison SET num_livraison=:num_livraison,nom_client=:nom_client,prenom_client=:prenom_client,email=:email,adresse=:adresse,gouvernorat=:gouvernorat,ville=:ville,CodePostal=:CodePostal,telephone=:telephone, WHERE num_livraison=:num_livraison1";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
        $num_livraison=$Livraison->getnum_livraison();
        $nom_client=$Livraison->getnom_client();
		$prenom_client=$Livraison->getprenom_client();
        $email=$Livraison->getemail();
        $adresse=$Livraison->getadresse();
        $gouvernorat=$Livraison->getgouvernorat();
        $ville=$Livraison->getville();
        $CodePostal=$Livraison->getCodePostal();
        $telephone=$Livraison->gettelephone();

		$datas = array(':num_livraison'=>$num_livraison,':nom_client'=>$nom_client,':prenom_client'=>$prenom_client, ':email'=>$email, ':adresse'=>$adresse,':gouvernorat'=>$gouvernorat,':ville'=>$ville,':CodePostal'=>$CodePostal, ':telephone'=>$telephone);


		$req->bindValue(':num_livraison',$num_livraison);
		$req->bindValue(':nom_client',$nom_client);
		$req->bindValue(':prenom_client',$prenom_client);
		$req->bindValue(':email',$email);
		$req->bindValue(':adresse',$adresse);
		$req->bindValue(':gouvernorat',$gouvernorat);
		$req->bindValue(':ville',$ville);
		$req->bindValue(':CodePostal',$CodePostal);
		$req->bindValue(':telephone',$telephone);
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}
	function recupererLivraison($num_livraison)
	{
		$sql="SELECT * from Livraison where num_livraison=$num_livraison";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }


	}

	function rechercherLivraison($recherche){
		
		$sql="SELECT * FROM livraison WHERE nom_client LIKE '%".$recherche."%' ORDER BY nom_client ASC";
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