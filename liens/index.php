<?php ob_start('ob_gzhandler');

// NAVIGATION
$RelBasePath = "../";
$title = "Liens [GEPApiR]";

require_once($RelBasePath . 'communs/header1.inc.php');
?><?php
require_once($RelBasePath . 'communs/header2.inc.php');
?>



<h1>
<a href="<?=$RelBasePath?>">
<img src="<?=$RelBasePath?>images/titres/rub1_liens.png" width="364" height="138"
 data-responsive-img alt="Liens">
</a>
</h1>



<?=writeHR()?>



<ul>
	<li><a href="sites_rss.php">RSS</a> : de quoi ne pas rater de mises à jour !</li>
	<li>🔗 <a href="sites_web.php">Une sélection de sites Web</a> à aller visiter d'urgence !</li>
	<li>🎥 <a href="youtube.php">Sélection de chaînes Youtube</a> pour apprendre autant que s'amuser O:)</li>
</ul>



<hr class="sep sepfin">



</body>
</html>
<?php ob_end_flush(); ?>
