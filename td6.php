<?php 
	$title="TD6";
	$description="exercices du tp6";
		$style = "style.css";
$lang = "fr";
if(isset($_GET["style"]) && !empty($_GET['style']) &&  ($_GET["style"] === "style_nuit.css")){
	$style = "style_nuit.css";
}
	require("./include/header.inc.php");
	require("./include/functions.inc.php");
?>	
		<main>
			<h1>TD6</h1>
			<nav>
				<ul>
					<li><a href="#exo1">Exercice 1</a></li>
					<li><a href="#exo2">Exercice 2</a></li>
					<li><a href="#exo3">Exercice 3</a></li>
					<li><a href="#exo4">Exercice 4</a></li>
				</ul>
		   </nav>
			<section id="exo1">
				<h2>Exercice 1</h2>
					<span>Table de multiplacation utilisant la valeur par defaut :</span>
					<?php
						echo tabMulti();
					?>
					<span>Table de multiplacation specifiant la dimension :</span>
					<?php
						echo tabMulti(7);
					?>
			</section>
			<section id="exo2">
				<h2>Exercice 2</h2>
				<span>Conversion de RGB à l'hexadécimal de la couleur (255,0,128) : <?php echo rgbConversion(255,0,128);?>.</span>
				<span>Conversion de l'hexadécimal à RGB de la couleur (#FF0080): <?php 
				$r = $g = $b = 0; $couleur = "#FF0080";
				if (hexConversion($couleur, $r, $g, $b)) {
					echo "($r, $g, $b)";
				} else {
					echo "Test échoué pour $couleur\n";
				}
				?>
				</span>	
			</section>
			<section id="exo3">
				<h2>Exercice 3</h2>
				<span>Conversion du nombre XXI en décimal : <?php echo decimal("XXI");?></span>
			</section>
			<section id="exo4">
				<h2>Exercice 4</h2>
				<?php
				echo TableAscii();
				?>
			</section>
<?php
	require"./include/footer.inc.php";
?>			