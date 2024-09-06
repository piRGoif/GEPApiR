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



<h2>Pro 👨‍💼</h2>

<ul>
	<li><a href="https://www.linkedin.com/in/pierregoiffon/">Compte LinkedIn</a></li>
	<li>Comptes <a href="https://sourceforge.net/u/pgoiffon/profile/">SourceForge</a>, <a href="https://github.com/piRGoif">GitHub</a></li>
	<li>Dépôt de <a href="https://github.com/Combodo/iTop">iTop</a>, application web ITSM/CMDB open source sur laquelle j'ai été employé de 2017 à 2024</li>
</ul>



<?=writeHR()?>



<h2>Photographie 📷</h2>

<ul>
	<li>Sélection de mes photos sur <a href="https://unsplash.com/fr/@pir">mon compte Unsplash</a></li>
	<li><a href="https://commons.wikimedia.org/wiki/Special:ListFiles?limit=250&user=PiRGoif&ilshowall=1">Mes contributions Wikimedia Commons</a></li>
	<li>L'ensemble de mes photos publiées sont disponibles sur <a href="http://www.flickr.com/photos/pirgoif/">mon compte Flickr</a>, compte qui contient <a href="https://www.flickr.com/photos/pirgoif/collections/72157640928109674/">une sélection de mes préférées</a> !</li>
</ul>



<?=writeHR()?>



<h2>Autre 😎</h2>

<ul>
	<li>Des enregistrement sur <a href="https://soundcloud.com/pir-3">mon compte Soundcloud</a></li>
	<li>Des vidéos aimées, des playlists et quelques vidéos personnelles sur <a href="https://www.youtube.com/user/pgoiffon">ma chaine Youtube</a></li>
	<li>Des films vus et aimés sur <a href="http://www.imdb.com/user/ur10917353/watchlist">ma watchlist IMDB</a></li>
</ul>



<hr class="sep sepfin">



</body>
</html>
<?php ob_end_flush(); ?>
