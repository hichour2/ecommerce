
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Bienvenu au !|E-commerce</title>
</head>

<body>
<?php  
include("menu.php");
if(!isset($_SESSION['admin'])){
		die("Connecter vous ... pour Afficher la liste  des Commande enregistreé... !!!!!!!!!!");
	}
?>
<?php
	
	
	//require_once("connexion.php");
	require_once('connect2.php');
	echo '<table width="800" border="0" align="center"><tr><td>';
	
	$res=$bdd->query("select * from commande");
	
	if(!$res){
		echo "ERREUR : req SQL incorrecte ........";
	}
	else{
		echo '<table width="700" ><tr><td align = "center"><font color="#0033CC"><em><strong><h2>Les produits Commandeés :</h2></strong></em></font></td></tr></table>';
		echo'<table width="700"  border="1"bordercolor="black" align="center"><tr><th bgcolor="orange">Numero de commande</th><th bgcolor="orange">numero du produit</th><th bgcolor="orange">Nom du produit</th><th bgcolor="orange">date de commande</th><th bgcolor="orange">Etat</th>';
	while($enr = $res->fetch()){
			echo "<tr><td bgcolor='green'><font color='white'>".$enr[0]."</td><td>".$enr[1]."</td><td>".$enr[2]."</td><td bgcolor='yellow'>".$enr[3]."</td><td bgcolor='gray'><font color='blue'>".$enr[4]."</td>";
		}
	}
	
	echo '</table>';
?>

 </td></tr>
</table>
</body>
</html>
