<?PHP
include "../entities/livraison.php";
include "../core/livraisonC.php";


if (isset($_GET['num_livraison']) and isset($_GET['nom_client']) and isset($_GET['prenom_client'])and isset($_GET['email']) and isset($_GET['adresse']) and isset($_GET['gouvernorat']) and isset($_GET['ville']) and isset($_GET['CodePostal']) and isset($_GET['telephone']) ){
$Livraison1=new Livraison(($_GET['num_livraison']),($_GET['nom_client']),($_GET['prenom_client']),($_GET['email']), ($_GET['adresse']),($_GET['gouvernorat']),($_GET['ville']), ($_GET['CodePostal']),($_GET['telephone']));
//Partie2
/*
var_dump($livraison1);
}
*/
//Partie3
$LivraisonC=new LivraisonC();
$LivraisonC->ajouterLivraison($Livraison1);
header('Location: ../views/afficherLivraison.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>