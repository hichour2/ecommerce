<html>
<head>
<link rel="stylesheet" type="text/css" media="all" href="css/style.css" />
<link href="css_pirobox/style_5/style.css" rel="stylesheet" type="text/css" />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
<title>Bienvenu au !|E-commerce</title>
</head>
<body>

<?php 
include("menu.php");
	require_once('connect2.php');
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
			"<br/><font color='blue'>Pomotion:&nbsp;&nbsp;</font><font color='magenta'>".$enr[7].
			"</font><h2 align='right'><a href='panier.php?id=".$enr[0]."'><h2 align='right'><a href='panier.php?action=ajout&&l=".$enr[2]."&&p=".$enr[6]."&&q=1&&page=liste'>
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
</body>
</html>