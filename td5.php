<?php 
	$title="TD5";
	$description="exercices du tp5";
require("./include/functions.inc.php");  
	$style = "style.css";
$lang = "fr";
if(isset($_GET["style"]) && !empty($_GET['style']) &&  ($_GET["style"] === "style_nuit.css")){
	$style = "style_nuit.css";
}

require("./include/header.inc.php");
?>
	<main>
		<h1>TD5</h1>
		<nav>
			<ul>
				<li><a href="#exo1">Exercice 1</a></li>
				<li><a href="#exo2">Exercice 2</a></li>
				<li><a href="#exo3">Exercice 3</a></li>
				<li><a href="#exo4">Exercice 4</a></li>
				<li><a href="#exo5">Exercice 5</a></li>
			</ul>
		</nav>
		<section id="exo1">
			<h2>Exercice 1</h2>
			<?php
				echo date("H:i:s");
			?>
		</section>
		<section id="exo2">
			<h2>Exercice 2</h2>
			<ul>
			<?php
				echo hello();
			?>
			</ul>
		</section>
		<section id="exo3">
			<h2>Exercice 3</h2>
			<?php
				echo "<p> La conversion de 0x41 : ".conversionASCII1("0x41")."</p>";
				echo "<p> La conversion de 'A' : ".conversionASCII2("A")."</p>";
				echo "<p> La conversion de 0x2B : ".conversionASCII1("0x2B")."</p>";
				echo "<p> La conversion de '+' : ".conversionASCII2("+")."</p>";
			?>
		</section>		
		<section id="exo4">
			<h2>Exercice 4</h2>
			<ul class="po">
			<?php
				echo liste();
			?>
			</ul>
		</section>
		<section id="exo5">
			<h2>Exercice 5</h2>
			<?php
				echo tab();
			?>
		</section>
<?php
	require"./include/footer.inc.php";
?>