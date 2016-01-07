
<?php
include("menu.php");
try
{
	//On se connecte à MySQL
	$bdd = new PDO('mysql:host=localhost;dbname=commerce', 'root', '');
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

	
											
$query ="UPDATE produit SET categorie='".$_POST['cate']."',nom='".$_POST['nom']."'
,marque='".$_POST['marque']."', carac='".$_POST['carac']."', nbr='".$_POST['nbrexemp']."',
prix='".$_POST['prix']."', promotion='".$_POST['promo']."' WHERE id_produit=".$_GET['num'];
if($bdd->query($query)){

						
						
	echo"Produit modifier avec Succés..<a href='list_produit.php'> Retour </a>";
 
 }
 else {echo'erreur';}
 
?>
