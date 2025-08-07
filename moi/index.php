<?php ob_start('ob_gzhandler');
// NAVIGATION
$RelBasePath = "../";
$title = "Divers [GEPApiR]";

require_once($RelBasePath . 'communs/header1.inc.php');
?>
<?php
require_once($RelBasePath . 'communs/header2.inc.php');
?>



<h1><a href="<?=$RelBasePath?>">
<img src="<?=$RelBasePath?>images/titres/rub1_moi.png" width="225" height="142"
 data-responsive-img alt="Moi"></a></h1>



<?=writeHR()?>



<h2>Photographie 📷</h2>

<ul>
	<li><a href="https://commons.wikimedia.org/wiki/Special:ListFiles?limit=250&user=PiRGoif&ilshowall=1">Mes contributions Wikimedia Commons</a></li>
	<li>Sélection de mes photos sur <a href="https://unsplash.com/fr/@pir">mon compte Unsplash</a></li>
	<li>L'ensemble de mes photos publiées sont disponibles sur <a href="http://www.flickr.com/photos/pirgoif/">mon compte Flickr</a>, compte qui contient <a href="https://www.flickr.com/photos/pirgoif/collections/72157640928109674/">une sélection de mes préférées</a> !</li>
</ul>



<?=writeHR()?>



<h2>Autre 😎</h2>

<ul>
	<li>Des vidéos aimées, des playlists et quelques vidéos personnelles sur <a href="https://www.youtube.com/user/pgoiffon">ma chaine Youtube</a></li>
</ul>



<hr class="sep sepfin">



</body>
</html>
<?php ob_end_flush(); ?>
