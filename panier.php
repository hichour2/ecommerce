<?php

include("menu.php");
include_once("fonctions-panier.php");

$erreur = false;

$page=$_GET['page'];
$action = (isset($_POST['action'])? $_POST['action']:  (isset($_GET['action'])? $_GET['action']:null )) ;
if($action !== null)
{
   if(!in_array($action,array('ajout', 'suppression', 'refresh')))
   $erreur=true;

   //récuperation des variables en POST ou GET
   $l = (isset($_POST['l'])? $_POST['l']:  (isset($_GET['l'])? $_GET['l']:null )) ;
   $p = (isset($_POST['p'])? $_POST['p']:  (isset($_GET['p'])? $_GET['p']:null )) ;
   $q = (isset($_POST['q'])? $_POST['q']:  (isset($_GET['q'])? $_GET['q']:null )) ;

   //Suppression des espaces verticaux
   $l = preg_replace('#\v#', '',$l);
   //On verifie que $p soit un float
   $p = floatval($p);

   //On traite $q qui peut etre un entier simple ou un tableau d'entier
    
   if (is_array($q)){
      $QteArticle = array();
      $i=0;
      foreach ($q as $contenu){
         $QteArticle[$i++] = intval($contenu);
      }
   }
   else
   $q = intval($q);
    
}

if (!$erreur){
   switch($action){
      Case "ajout":
         ajouterArticle($l,$q,$p);
         break;

      Case "suppression":
         supprimerArticle($l);
         break;

      Case "refresh" :
         for ($i = 0 ; $i < count($QteArticle) ; $i++)
         {
            modifierQTeArticle($_SESSION['panier']['libelleProduit'][$i],round($QteArticle[$i]));
         }
         break;

      Default:
         break;
   }
}

echo '<?xml version="1.0" encoding="utf-8"?>';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
<head>
<title>E--commerce</title>
</head>
<body>

<form method="post" action="panier.php?page='panier'">
<table style="width: 400px" border="1" align="center">
	<tr>
		<td colspan="5" bgcolor="#00ABE9"><font color="black" size="2">Votre panier</td>
	</tr>
	<tr>
		<td bgcolor="#78F000"><font color="red" size="2">Libellé</td>
		<td bgcolor="#78F000"><font color="red" size="2">Quantité</td>
		<td bgcolor="#78F000"><font color="red" size="2">Prix Unitaire</td>
		<td bgcolor="#78F000"><font color="red" size="2">Anuler</td>
		<td bgcolor="#78F000"><font color="red" size="2">Passer La Commande</td>
	</tr>


	<?php
	
	if (creationPanier())
	{
	   $nbArticles=count($_SESSION['panier']['libelleProduit']);
	   if ($nbArticles <= 0)
	   echo "<tr><td bgcolor='#49DAE5'>Votre panier est vide </ td></tr>";
	   else
	   {
	      for ($i=0 ;$i < $nbArticles ; $i++)
	      {
	         echo "<tr>";
	         echo "<td bgcolor='#49DAE5'>".htmlspecialchars($_SESSION['panier']['libelleProduit'][$i])."</ td>";
	         echo "<td bgcolor='#B9F3AB'><input type=\"text\" size=\"4\"  name=\"q[]\" value=\"".htmlspecialchars($_SESSION['panier']['qteProduit'][$i])."\"/></td>";
	         echo "<td bgcolor='#B9F3AB'>".htmlspecialchars($_SESSION['panier']['prixProduit'][$i])."dh</td>";
	         echo "<td bgcolor='#B9F3AB'><a href=\"".htmlspecialchars("panier.php?action=suppression&l=".rawurlencode($_SESSION['panier']['libelleProduit'][$i]))."&&page=panier'\"><img src='images/sup.jpg'/></a></td>";
	          echo "<td bgcolor='#B9F3AB'><a href=passer_commande.php?action=".$_SESSION['panier']['libelleProduit'][$i]."&&qte=".$_SESSION['panier']['qteProduit'][$i]."><img src='images/save.png'/></a></td>";
			echo "</tr>";
			 
	      }

	      echo "<tr><td  bgcolor='magenta'colspan=\"2\">  <input type=\"submit\" value=\"Rafraichir\"/>
	      <input type=\"hidden\" name=\"action\" value=\"refresh\"/></td>";
		  
	      echo "<td bgcolor='yellow' colspan=\"2\">";
		  
	      echo "Total : ".MontantGlobal()."dh";
	      echo "</td></tr>";

	      echo "<tr><td colspan=\"4\">";
	     

	      echo "</td></tr>";
	   }
	   switch($page){
      Case "index":
         header("location:index.php");
         break;

      Case "liste":
         header("location:list_podruit_auto.php");
         break;
		  Case "panier":
         header("location:panier.php");
         break;

      
      Default:
         break;
   }
	  
	}
	?>
</table>
</form>
</body>
</html>
