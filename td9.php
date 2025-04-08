<?php 
	$title="TD9";
	$description="exercices du tp9";
	$style = "style.css";
$lang = "fr";
if(isset($_GET["style"]) && !empty($_GET['style']) &&  ($_GET["style"] === "style_nuit.css")){
	$style = "style_nuit.css";
}
	require("./include/header.inc.php");
	require("./include/functions.inc.php");
?>	
		<main>
			<h1>TD9 en cours !!</h1>
			<section>
			<h2>En construction...</h2>
				<img src="image/bob.gif" alt="bob the builder"/>
			</section>

<?php
	require"./include/footer.inc.php";
?>	
