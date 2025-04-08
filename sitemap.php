<?php 
	$title="plan du site";
	$description="lien des différentes pages du site";
	$style = "style.css";
$lang = "fr";
if(isset($_GET["style"]) && !empty($_GET['style']) &&  ($_GET["style"] === "style_nuit.css")){
	$style = "style_nuit.css";
}
	require("./include/header.inc.php");
	require("./include/functions.inc.php");
?>	
		<main>
			<h1>PLAN DU SITE</h1>
			<section>
				<h2>Liens des pages de mon site</h2>
				<ul id="pi">
					<li><img src="image/barbie.jpg" alt="barbie"/></li>
					<li><a href="./index.php">Accueil</a></li>
					<li><a href="./td5.php">td5</a></li>
					<li><a href="./td6.php">td6</a></li>
					<li><a href="./td7.php">td7</a></li>
					<li><a href="./td8.php">td8</a></li>
					<li><a href="./td9.php">td9</a></li>
					
				</ul>
			</section>
			
<?php
	require"./include/footer.inc.php";
?>	