<head>
<link rel="stylesheet" type="text/css" media="all" href="css/style.css" />
<link href="css_pirobox/style_5/style.css" rel="stylesheet" type="text/css" />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
<title>Bienvenu au !|E-commerce</title>
</head>
<body>
<?php
	include("menu.php");
	require_once('comerceDAO.php');
$res=comerceDAO::affiche_cate_marque("imprimante","hp");
echo'<table width="700"  border="1"bordercolor="black" align="center"><tr><th bgcolor="orange">Categorie</th><th bgcolor="orange">Nom</th><th bgcolor="orange">Marque</th><th bgcolor="orange">Caracteriqtique</th><th bgcolor="orange">Nombre d\'exemplaires</th><th bgcolor="orange">Prix</th><th bgcolor="orange">Promotion</th><th bgcolor="orange">image</th><th bgcolor="magenta">Ajouter Au Panier</th></tr>';
	while($enr = $res->fetch()){
			echo "<tr><td>".$enr[1]."</td><td>".$enr[2]."</td><td bgcolor='yellow'>".$enr[3]."</td><td>".$enr[4]."</td><td>".$enr[5]."</td><td>".$enr[6]."</td><td>".$enr[7]."</td><td><a href=".$enr[8]." rel='gallery' class='pirobox_gall'><img alt='img' src=".$enr[8]." width='100' height='150'/></a></td><td bgcolor='magenta'>
<a href='panier.php?action=ajout&&l=".$enr[2]."&&p=".$enr[6]."&&q=1&&page='panier''>
			<img src='images/ajou_panier.jpg'></a></td>";
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
</html