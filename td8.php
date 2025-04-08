<?php 
	$title="TD8";
	$description="exercices du tp8";
		$style = "style.css";
$lang = "fr";
if(isset($_GET["style"]) && !empty($_GET['style']) &&  ($_GET["style"] === "style_nuit.css")){
	$style = "style_nuit.css";
}

	require("./include/header.inc.php");
	require("./include/functions.inc.php");
?>	
		<main>
			<h1>TD8</h1>
			<nav>
				<ul>
					<li><a href="#exo1">Exercice 1</a></li>
					<li><a href="#exo2">Exercice 2</a></li>
					<li><a href="#exo3">Exercice 3</a></li>
				</ul>
		   </nav>
			<section id="exo1">
			<h2>Exercice 1</h2>
				<span>protocol : <?php echo extraire("https://www.cyu.fr")['protocol'] ?></span>
				<span>host : <?php echo extraire("https://www.cyu.fr")["host"] ?></span>
				<span>domain : <?php echo extraire("https://www.cyu.fr")["domain"] ?></span>
				<span>tld : <?php echo extraire("https://www.cyu.fr")["tld"] ?></span>
			</section>
			<section id="exo2">
			<h2>Exercice 2</h2>
				<span>400 => "<?php echo droit("400");?>"</span>
				<span>640 => "<?php echo droit("640");?>"</span>
				<span>755 => "<?php echo droit("755");?>"</span>
			</section>
			<section id="exo3">
			<h2>Exercice 3</h2>
				<?php
					$size=isset($_GET["size"]) ? intval($_GET["size"]) : 12;
					echo tabMulti($size);
					?>
			</section>


<?php
	require"./include/footer.inc.php";
?>	