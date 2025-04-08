<?php
require "./include/functions.inc.php";
$style = "style.css";
$logo = "./images/logocyu.png";
if (isset($_GET['style']) && $_GET['style'] == "jour") {
    $style = "jour.css";
    $logo = "./images/logocyujour.png";
}

$title = "Météo";
$h1 = "Météo";
$region=null;
if(isset ($_GET['departement'])){
    $departement=convertDep($_GET['departement']);
}


require "./include/header.inc.php";
?>

<h1><?= $h1 ?></h1>
<section>
    <h2>Carte de France</h2>
    <img src="images/map.png" alt="Carte" usemap="#francemap">
    <map name="francemap">
            <area shape="poly" coords="50,237,131,234,198,254,220,308,160,327,104,288" alt="Bretagne" href="?region=53"/>
            <area shape="poly" coords="209,173,233,169,238,198,306,206,321,162,361,161,370,217,332,246,323,281,218,255" alt="normandie" href="?region=28"/>
            <area shape="poly" coords="378,97,422,79,433,110,504,170,462,233,385,210" alt="hdf" href="?region=32"/>
            <area shape="poly" coords="378,221,447,233,460,270,436,294,377,269" alt="IDF" href="?region=11"/>
            <area shape="poly" coords="518,168,702,243,676,350,596,308,580,337,463,283" alt="GE" href="?region=44"/>
            <area shape="poly" coords="453,299,559,348,617,331,655,359,597,435,451,406" alt="BFC" href="?region=27"/>
            <area shape="poly" coords="240,264,318,288,307,329,245,370,236,418,196,421,161,338,231,310" alt="pdll" href="?region=52"/>
            <area shape="poly" coords="175,647,229,432,260,419,251,380,307,393,343,435,402,444,377,536,334,529,311,599,252,604,235,687,173,651" alt="NA" href="?region=75"/>
            <area shape="poly" coords="245,698,266,619,320,606,349,541,377,547,385,567,473,570,512,637,428,682,428,735,365,729,308,691,244,699" alt="occitanie" href="?region=76"/>
            <area shape="poly" coords="522,665,543,607,577,619,623,546,651,567,683,637,633,688" alt="paca" href="?region=93"/>
            <area shape="poly" coords="298,378,337,294,329,254,365,254,366,269,437,316,442,400,339,425" alt="cvdl" href="?region=24"/>
            <area shape="poly" coords="413,432,442,416,486,445,533,453,545,436,572,441,600,460,632,443,647,522,572,570,569,609,546,584,496,589,464,543,383,542,418,505" alt="ARP" href="?region=84"/>
            <area shape="poly" coords="671,667,713,638,705,754,677,737" alt="corse" href="?region=94"/>		
    </map> 
    <?if (isset($_GET['region'])){
        echo getListRegions($_GET['region']);
    }?>
    <?php 
        if (isset($_GET["departement"])) {
            getListVilles(convertDep($_GET["departement"]));
        }
    ?>
    <?php 
        if (isset($_GET["ville"])) {
            afficherMeteoVille($_GET["ville"]);
        }
    ?>
</section>

<?php
require "./include/footer.inc.php";
?>
