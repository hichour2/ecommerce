<?php
class comerceDAO {
		
		public  static function affiche_cate_marque($cat,$marq){
			require_once('connect2.php');
			
            $res = $bdd->query("select * from produit where categorie like '$cat' and marque like '$marq'");			
			//$res = ;
			return $res;
		}
		public  static function affiche_cate_autre($cat){
			require_once('connect2.php');
			
            $re= $bdd->query("select * from produit where categorie='$cat'");			
	
			return $re;
		}
	
	public  static function chercher_produit($nom){
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
			
            $re=$bdd->query("select * from produit where nom='$nom'");			
	
			return $re;
		}
		public  static function produit_promotion(){
			require_once('connect2.php');
			
            $re= $bdd->query("select * from produit where promotion='oui'");			
	
			return $re;
		}
		public  static function chercher_commande($num){
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
			
            $re=$bdd->query("select * from commande where id_commande='$num'");			
	
			return $re;
		}
	}
	/*

	class comerceDAO {
		
		public  static function affiche_cate_marque($cat,$marq){
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
			
            $res = $bdd->query("select * from produit where categorie like '$cat' and marque like '$marq'");			
			//$res = ;
			return $res;
		}
		public  static function affiche_cate_autre($cat){
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
			
            $re= $bdd->query("select * from produit where categorie='$cat'");			
	
			return $re;
		}
	
	public  static function chercher_produit($nom){
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
			
            $re= $bdd->query("select * from produit where nom='$nom'");			
	
			return $re;
		}
		public  static function produit_promotion(){
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
			
            $re= $bdd->query("select * from produit where promotion='oui'");			
	
			return $re;
		}
	}
	*/
?>