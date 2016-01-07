

<?php
include("menu.php");
/*
$hote = 'localhost';
	$base = 'commerce';
	$user = 'root';
	$pass = '';
	
	$cnx = mysql_connect($hote, $user, $pass) or die (mysql_error ());
	$ret = mysql_select_db($base) or die (mysql_error ());
     $nom=$_POST['nom'];
	 
	     if(!is_uploaded_file($_FILES['image']['tmp_name'])){
      echo'Erreur de telechargment ...<a href="formimage.php"> retour</a>';
	  }
else{
                
				// Testons la taille 2Mo 
			 if ($_FILES['image']['size'] <=  2200000){
				// Testons le Type
				
				
					// inscription directe Sinon modification
					
						// insertion dans la base
						$url = "photos/".$_POST['nom'].'.jpeg';
			$query="INSERT INTO produit (id_produit,nom,marque,carac,nbr,prix,image) VALUES('','".$_POST['nom']."','".$_POST['marque']."','".$_POST['carac']."','".$_POST['nbrexemp']."','".$_POST['prix']."','".$url."')";

						if(mysql_query($query)){
							// Retourne la derniere valeur de type auto increment
							
							$id= mysql_insert_id();
							echo $id;
							/*Creation d'une nouvelle session lors de l'inscription
								connexion automatique aprés inscription
						
									
							$query = "Update produit SET image = 'photos/".$_POST['nom'].".jpeg' WHERE id = ".$id;
							mysql_query($query);
							
							move_uploaded_file($_FILES['image']['tmp_name'], 'photos/'.$_POST['nom'].'.jpeg');
							
							
							echo"inserrer";
							
						}
						else{
							echo 'problem d\'insertion';
						}
					}
					
						
			
		
						else{
				echo 'verifie que la taille d\'image et moin de 2Mo';
				
			}
		
		
			
	}
	
						*/

require_once('connect2.php');
 
	$url = "materiel/".$_POST['nom'].'.jpeg';
											
$q="INSERT INTO produit (id_produit,categorie,nom,marque,carac,nbr,prix,promotion,image) VALUES('','".$_POST['cate']."','".$_POST['nom']."','".$_POST['marque']."','".$_POST['carac']."','".$_POST['nbrexemp']."','".$_POST['prix']."','".$_POST['promo']."','".$url."')";
$bdd->query($q);

						
							move_uploaded_file($_FILES['image']['tmp_name'], 'materiel/'.$_POST['nom'].'.jpeg');
	echo"Produit Inserer avec Succés..<a href='form_inserer_produit.php'> Retour</a>";
 
 
 
?>
