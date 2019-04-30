<?PHP
include "../entities/livraison.php";
include "../core/livraisonC.php";
if (isset($_GET['id_livraison'])){
	$LivraisonC=new LivraisonC();
    $result=$LivraisonC->recupererLivraison($_GET['id_livraison']);
	foreach($result as $row){



		$num_livraison=$row['id_livraison'];
		$nom_client=$row['nom'];
		$prenom_client=$row['prenom'];
		
		$adresse=$row['adresse'];
		$gouvernorat=$row['gouvernorat'];
        $ville=$row['ville'];
        $CodePostal=$row['code_postal'];
        $telephone=$row['telephone'];
        $email=$row['email'];

?>
<HTML>
<head>
</head>
<body>
<form method="_GET">
<table>
<caption>Modifier Livraison</caption>

<tr>
<td>id_livraison</td>
<td><input type="number" name="id_livraison" value="<?PHP echo $id_livraison ?>"></td>
</tr>
<tr>
<td>nom</td>
<td><input type="text" name="nom" value="<?PHP echo $nom ?>"></td>
</tr>
<tr>
<td>prenom</td>
<td><input type="text" name="prenom" value="<?PHP echo $prenom ?>"></td>
</tr>
<tr>

<td>adresse</td>
<td><input type="text" name="adresse" value="<?PHP echo $adresse ?>"></td>
</tr>
<tr>
<td>gouvernorat</td>
<td><input type="text" name="gouvernorat" value="<?PHP echo $gouvernorat ?>"></td>
</tr>
<tr>
<td></td>
<td>ville</td>
<td><input type="text" name="ville" value="<?PHP echo $ville ?>"></td>
</tr>
<tr>
<td></td>
<td>CodePostal</td>
<td><input type="text" name="code_postal" value="<?PHP echo $code_postal ?>"></td>
</tr>
<td>telephone</td>
<td><input type="text" name="telephone" value="<?PHP echo $telephone ?>"></td>
</tr>
<tr>
<td>email</td>
<td><input type="text" name="email" value="<?PHP echo $email ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="modifier" value="modifier"></td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="id_livraison" value="<?PHP echo $_GET['id_livraison'];?>"></td>
</tr>
</table>
</form>
<?PHP
	}
}
if (isset($_POST['modifier'])){
	$Livraison=new Livraison($_POST['id_livraison'],$_POST['nom'],$_POST['prenom'],$_POST['adresse'],$_POST['gouvernorat'],$_POST['ville'],$_POST['code_postal'],$_POST['telephone'],$_POST['email']);

	$LivraisonC->modifierLivraison($Livraison,$_POST['id_livraison']);
	echo $_POST['id_livraison'];
	header('Location: afficherLivraison.php');
}
?>
</body>
</HTMl>