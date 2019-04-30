<?PHP
include "../core/publiciteC.php";
$publiciteC=new publiciteC();
if (isset($_POST["id"])){
	$publiciteC->supprimerpublicite($_POST["id"]);
	header('Location: pub.php');
}

?>