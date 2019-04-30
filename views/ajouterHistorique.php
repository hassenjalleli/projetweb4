<?PHP
include "../entities/historique.php";
include "../core/historiqueC.php";

if (isset($_GET['reference']) and isset($_GET['nom_produit']) and isset($_GET['marque'])and isset($_GET['prix'])){
$Historiques=new Historique(($_GET['reference']),($_GET['nom_produit']),($_GET['marque']),($_GET['prix']));
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$HistoriqueC=new HistoriqueC();
$HistoriqueC->ajouterHistorique($Historiques);
header('Location: ../back/historique.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>