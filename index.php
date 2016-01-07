<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Bienvenu au !|E-commerce</title>

<link rel="stylesheet" type="text/css" media="all" href="css/style.css" />
<link href="css_pirobox/style_5/style.css" rel="stylesheet" type="text/css" />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>

</head>
<body>

<?php 
include("menu.php");

include("aceuil.php");
include("visiteurcenligne.php"); 
		require_once('connect2.php');
$sql = 'SELECT count(*) FROM conecte';  
 
$req = $bdd->query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());  
 $data = $req->fetch();   
 @mysql_free_result($req);  
 
echo '<font color="blue">Il y a actuellement '.$data[0].' personne(s) surfant sur ce site.</font><img src="images/online.jpg">';  
	echo '<table width="800" border="0" align="center"><tr><td>';
	
	$res=$bdd->query("select * from produit");
	$n=0;
	if(!$res){
		echo "ERREUR : req SQL incorrecte ........";
	}
	else{
	
					
 
		echo '<table width="700" ><tr><td align = "center"><font color="#0033CC"><em><strong><h2>Les produits Disponibles :</h2></strong></em></font></td></tr></table>';
		echo'<table width="700"  border="1"bordercolor="black" align="center"><tr>';
	while($enr = $res->fetch()){
	$n++;
	
			echo "<td bgcolor=''><a href=".$enr[8]." rel='gallery' class='pirobox_gall'><img alt='img' src=".$enr[8]." width='100' height='150'/></a></td><td bgcolor='orange'> <font color='green'>&nbsp;Marque :".$enr[3]."</font><br/>".$enr[2]."<br/>prix:&nbsp;&nbsp;".$enr[6]."<br/>Caracteristique:&nbsp;&nbsp;".$enr[4].
			"<br/><font color='blue'>Pomotion:&nbsp;&nbsp;</font><font color='magenta'>".$enr[7]."</font><h2 align='right'>
			<a href='panier.php?action=ajout&&l=".$enr[2]."&&p=".$enr[6]."&&q=1&&page=index'>
			<img src='images/ajou_panier.jpg'></a></td>";
			if($n>2){echo'</tr><tr>';$n=0;} 
			
		}
	}
	
	echo '</table>';
	?>
<script type="text/javascript" src="js/pirobox_extended_feb_2011.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$.piroBox_ext({
	piro_speed :700,
	bg_alpha : 0.5,
	piro_scroll : true,
	piro_drag :false,
	piro_nav_pos: 'bottom'
});
});
</script>
</div>			
			<!--end:header container -->
		</div>
	
	<!--end:header -->
	<div class="clear"></div>
	<!-- End middle content -->
	</br>
	<div class="footer">
		<!--start:footer -->
		<div class="container_16">
			<!--start:footer container -->
			
			<div c>
				<!--start:footer left part-->
				<h1 align="center"><p>&copy; Copyright 2013 - Droits Réservés - AMINE HICHOUR</p></h1>
			</div>
			<!--start:footer left part-->
		</div>
		<!--end:footer container -->
	</div></div>
	<!--end:footer -->
</body>
</html>