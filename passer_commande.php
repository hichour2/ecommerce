<?php
include("menu.php");
require_once('comerceDAO.php');
require_once('connect2.php');
if(!isset($_SESSION['clientLogin'])){
		die("Connecter vous ... pour Confirmer le Commande... !!!!!!!!!!");
	}
$action=$_GET['action'];
$qte=$_GET['qte'];
$date = date("Y-m-d");
$res=comerceDAO::chercher_produit($action);
while($enr = $res->fetch()){
$q="insert into commande VALUES('','".$enr[0]."','".$enr[2]."','$date','Encour')";
if($bdd->query($q)){
print'votre Numero de commande est :'.$bdd->lastInsertId().'<br>';

$req_up = "update produit set nbr = nbr-$qte where nom like '".$enr[2]."'";
$req_upp = "update client set nbr_point =nbr_point+100 where login like '".$_SESSION['clientLogin']."'";
			$bdd->query($req_up);		
			$bdd->query($req_upp);		
			
			
			
	echo"Commande passé avec Succés..<td>
	         <a href='panier.php?action=suppression&l=".rawurlencode($action)."&&page='panier'\"'> Retour</a>";
	}
	else{
	
	echo'erreur d\'insertion';
	}
	}
?>