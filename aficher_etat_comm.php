<?php	include("menu.php");	require_once('comerceDAO.php');	$num=$_POST['num'];$res=comerceDAO::chercher_commande($num);echo'</br></br></br></br></br><table width="700"  border="1"bordercolor="black" align="center"><tr><th bgcolor="orange">Nom produit</th><th bgcolor="orange">date de commande</th><th bgcolor="orange">Etat</th>';	while($enr = $res->fetch()){			echo "<tr><td>".$enr[2]."</td><td>".$enr[3]."</td><td bgcolor='yellow'>".$enr[4]."</td>";		}			echo '</table>';			echo '</table>';?>