<?php 
	$title="TD7";
	$description="exercices du tp7";
		$style = "style.css";
$lang = "fr";
if(isset($_GET["style"]) && !empty($_GET['style']) &&  ($_GET["style"] === "style_nuit.css")){
	$style = "style_nuit.css";
}
	require("./include/header.inc.php");
	require("./include/functions.inc.php");
?>	
		<main>
			<h1>TD7</h1>
			<nav>
				<ul>
					<li><a href="#exo1">Exercice 1</a></li>
					<li><a href="#exo2">Exercice 2</a></li>
				</ul>
		   </nav>
			<section id="exo1">
				<h2>Exercice 1</h2>
					<span>Liste des régions de la France :</span>
					<?php
						echo listeRegion();
					?>
					<span>Liste des régions de la France numérotée :</span>
					<?php
						echo listeRegion(2);
					?>
			</section>
			<section id="exo2">
				<h2>Exercice 2</h2>
				<span>Origine étymologique du jour : <?php echo $origines['jour']; ?></span>
				<span>Origine étymologique du mois : <?php echo $origines['mois']; ?></span>
				

   		</section>
<?php
	require"./include/footer.inc.php";
?>			