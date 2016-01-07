<?php session_start(); ?>
<link rel="stylesheet" type="text/css" media="all" href="css/960.css" />
<link rel="stylesheet" type="text/css" media="all" href="css/style.css" />
<!-- Start menu css and js files here -->
<link rel="stylesheet" type="text/css" href="css/superfish.css"
	media="screen" />
	<link rel="stylesheet" type="text/css" media="all" href="css/featuredslider.css" />


<!-- End menu css and js files here -->
<!-- Begin featured slider css & js files -->
<link rel="stylesheet" type="text/css" media="all" href="css/featuredslider.css" />

<!-- End featured slider css & js files -->
<!--[if IE 6]>
<script type='text/javascript' src='js/dd_belated_png.js'></script>
<script>DD_belatedPNG.fix('.pngfix');</script>
<![endif]-->





	<div class="header">
		<div class="bg">
			<!--start:header -->
			<div class="container_16">
				<!--start:header container -->
				<!--start:logo -->
				<br/><br/><br/><br/>
				<h4 align="right">
					<?php
					include_once("fonctions-panier.php");
					 
					   echo "<a href=panier.php?page='panier'><font color='blue' size='2'>".compterArticles()."&nbsp;:Produit(s)</font></br>";
					    echo "<font color='yellow' size='2'>Total : ".MontantGlobal()."dh</font></a></br>";
					
if (!isset($_SESSION['clientLogin']))
{
echo'<a href="formAuthentificationclient.php"><font color="orange">se connecter</font></a>'; }
else			{	echo"<font color='orange' size='3'>Bienvenu&nbsp;:&nbsp;</font><font color='black' size='3'>".$_SESSION['clientLogin']."</font>";}
?></h4>
				<div class="grid_5">
					<img src="images/loho.jpg" alt="DesignPlus" class="pngfix logo"/>
				</div>
				
				<!--end:logo -->
				<div class="grid_11">
					<!--start:menu grid -->
					
					<div class="top-menu pngfix">
						<!--start:menu top-menu -->
						
						<ul class="sf-menu">
							<!--start:sf-menu -->
							<li><a href="index.php">Accueil</a>
							</li>
						
						<li><a href="">Espace Client</a>
						    <ul>
                			<li><a href="formAuthentificationclient.php"> <?php if(isset($_SESSION['clientLogin']) and isset($_SESSION['clientMotPasse'])) echo "Se Deconnecter"; else echo " Se Connecter"; ?> </a></li>

								<li><a href="clientInscription.php"> S'inscrir </a></li>
                				<li><a href="panier.php?page='panier'"> Voir Panier </a></li>
								<li><a href="commande.php"> Suivre les Commandes </a></li>
								<li><a href="points.php"> Consulter mes Points </a></li>
							</ul>
						
              </li>
							<li><a href="#">Catégories</a>
								<ul>
									<!--start:dropdown -->
									<li><a href="#">Catalogue</a>
										<ul>
											<li><a href="#">Imprimante</a><ul>
																				</li>
									<li><a href="imprimante_hp.php">HP</a></li>
									<li><a href="imprimante_canon.php">CANON</a></li>
									<li><a href="autre.php">Autres</a></li>
										</ul></li>
											<li><a href="#">PC</a><ul>
											<li><a href="affiche_pc.php?pc=acer">ACER</a></li>
											<li><a href="affiche_pc.php?pc=dell">DELL</a></li>
											<li><a href="affiche_pc.php?pc=hp">HP</a></li>
											<li><a href="affiche_pc.php?pc=toshiba">TOSHIBA</a></li>
											<li><a href="affiche_pc.php?pc=samsung">SAMSUNG</a></li>
										</ul></li>

											<li><a href="#">TV</a><ul>
											<li><a href="affiche_tv.php?tv=samsung">SAMSUNG</a></li>
											<li><a href="affiche_tv.php?tv=lg">LG</a></li>
											<li><a href="affiche_tv.php?tv=sony">SONY</a></li>
										</ul></li>
										</ul>
									</li>
									<li><a href="list_podruit_auto.php">Nos Produits</a></li>
									<li><a href="affiche_produit_promotion.php">Produit Promotions</a></li>
									<li><a href="#">Autres</a></li>
								</ul> <!--end:dropdown -->
							</li>
							
							<li><a href="">Administration</a>
						    <ul>
                            <li><a href="formidentification.php"> <?php if(isset($_SESSION['admin'])) echo "Se Deconnecter"; else echo " Se Connecter"; ?> </a></li>
                				<li><a href="form_inserer_produit.php"> Ajouter un Produit </a></li>
                				<li><a href="list_produit.php"> Aficher les Produits </a></li>
								<li><a href="form_modif_produit.php"> Modifier un Produit </a></li>
								<li><a href="form_suivie_commande.php"> Modifier Etat d'une Commande </a></li>
								<li><a href="All_commande.php"> Afficher les Commandes </a></li>
							</ul>
						
              </li>
			  
	<li><form method="post" action="chercher_produit.php"><input type="text" name="chercher" placeholder="Chercher un produit"><input type="submit" value="" class="ch"></form>
						</ul>
						<!--end:sf-menu -->
						<span class="rightcorner pngfix"></span>
					</div>
					<!--end:menu top-menu -->
				</div>
				<!--end:menu grid -->
									<br/><br/><br/><br/>
				