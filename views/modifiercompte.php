<HTML xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Modifier un livraison</title>
    <link href="../assets/css/bootstrap.css" rel="stylesheet" />
    <link href="../assets/css/font-awesome.css" rel="stylesheet" />
    <link href="../assets/css/style.css" rel="stylesheet" />

</head>
<body>
<?PHP

include "../entites/compte.php";
include "../core/compteC.php";

if (isset($_GET['idclient'])){
    $compteC=new compteC();
    $id=$_GET['idclient'];
   


    $result=$compteC->recuperercompte($id);
    
	foreach($result as $row){
        $id=$row['id'];
        $username=$row['username'];
        $nom=$row['nom'];
        $prenom=$row['prenom'];
        $pasword=$row['pasword'];
        $numero=$row['numero'];
		$email=$row['email'];
?>
<form method="POST">
<div class="col-md-6">
    <div class="panel panel-default">
    <div class="panel-heading">
       Modifier votre compte
    </div>
    <div class="panel-body">
        <form role="form">
        <div class="form-group has-success ">
                        <label class="control-label" for="success">Saisir le idclient</label>
                        <input type="text" value="<?php echo $id?>" class="form-control" id="success" name="id_client"/>
                    </div>
                    <div class="form-group has-warning">
                        <label class="control-label" for="warning">username</label>
                        <input type="text"value="<?php echo $username?>" class="form-control" id="warning" name="username"/>
                    </div>
                    <div class="form-group has-error">
                        <label class="control-label" for="error">saisir le nom</label>
                        <input type="text"value="<?php echo $nom?>" class="form-control" id="error" name="nom"/>
                    </div>
                    <div class="form-group has-success">
                        <label class="control-label" for="success">Saisir le prenom</label>
                        <input type="text" value="<?php echo $prenom?>" class="form-control" id="success" name="prenom"/>
                    </div>
                    <div class="form-group has-success">
                        <label class="control-label" for="success">Saisir le pasword</label>
                        <input type="text" value="<?php echo $pasword?>" class="form-control" id="success" name="pasword"/>
                    </div>
                    <div class="form-group has-success">
                        <label class="control-label" for="success">Saisir le numero du telephone</label>
                        <input type="number" value="<?php echo $numero?>" class="form-control" id="success" name="numero"/>
                    </div>
					<div class="form-group has-success">
                        <label class="control-label" for="success">Saisir l'email </label>
                        <input type="text" value="<?php echo $email?>" class="form-control" id="success" name="email"/>
                    </div>
                    <div class="form-group has-success">
                        <label class="control-label" for="success">ajouter photo </label>
                        <input type="file" class="form-control" id="success" name="img"/>
                    </div>
					
                </form>

<input type="submit" name="modifier" value="modifier">



</form>
<?PHP
    }   
}
if (isset($_POST['modifier'])){
	$compte=new compte($_POST['id_client'],$_POST['username'],$_POST['nom'],$_POST['prenom'],$_POST['pasword'],$_POST['numero'],$_POST['email'],$_POST['img']);
	$compteC->modifiercompte($compte,$_POST['id_client']);
	header('Location: index2.php');
}
?>
</body>
</HTMl>