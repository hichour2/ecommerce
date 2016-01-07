<?php
	include("menu.php");
	require_once('comerceDAO.php');
$res=comerceDAO::affiche_cate_autre("imprimante");
echo'<table width="700"  border="1"bordercolor="black" align="center"><tr><th bgcolor="orange">Categorie</th><th bgcolor="orange">Nom</th><th bgcolor="orange">Marque</th><th bgcolor="orange">Caracteriqtique</th><th bgcolor="orange">Nombre d\'exemplaires</th><th bgcolor="orange">Prix</th><th bgcolor="orange">Promotion</th><th bgcolor="orange">image</th><th bgcolor="magenta">Ajouter Au Panier</th></tr>';
	while($enr = $res->fetch()){
			echo "<tr><td>".$enr[1]."</td><td>".$enr[2]."</td><td bgcolor='yellow'>".$enr[3]."</td><td>".$enr[4]."</td><td>".$enr[5]."</td><td>".$enr[6]."</td><td>".$enr[7]."</td><td><img alt='img' src=".$enr[8]." width='100' height='100'/></td><td bgcolor='magenta'></a><input type='button' value='Ajouter au Panier' bgcolor='green'></a></td></tr>";
		}
	
	
	echo '</table>';


?>
