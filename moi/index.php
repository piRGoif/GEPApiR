<?php ob_start('ob_gzhandler');
// NAVIGATION
$RelBasePath = "../";
$title = "Divers [GEPApiR]";

require_once($RelBasePath . 'communs/header1.inc');
?>
<?php
require_once($RelBasePath . 'communs/header2.inc');
?>



<h1><a href="<?=$RelBasePath?>">
<img src="<?=$RelBasePath?>images/titres/rub1_moi.png" width="225" height="142"
 data-responsive-img alt="Moi"></a></h1>



<?=writeHR()?>



<h2>Moi/Pro 🏢</h2>

<ul>
	<li>Comptes <a href="http://www.viadeo.com/fr/profile/pierre.goiffon">Viadeo</a>,
  <a href="https://www.linkedin.com/in/pierregoiffon/">LinkedIn</a></li>
  <li>Compte <a href="https://www.openhub.net/accounts/piRGoif">Open Hub</a></li>
  <li>Comptes <a href="https://sourceforge.net/u/pgoiffon/profile/">SourceForge</a>, <a href="https://github.com/piRGoif">GitHub</a></li>
  <li>Comptes <a href="https://jsfiddle.net/user/pgoiffon/">JSFiddle</a>, <a href="https://codepen.io/pgoiffon/#">CodePen</a></li>
</ul>



<?=writeHR()?>



<h2>Moi/Perso 🏡</h2>

<ul>
	<li>Quelques photos sont disponibles sur <a href="http://www.flickr.com/photos/pirgoif/">mon compte Flickr</a>, en particulier <a href="https://www.flickr.com/photos/pirgoif/collections/72157640928109674/">des sélections des moins pires</a> !</li>
	<li>Des enregistrement sur <a href="https://soundcloud.com/pir-3">mon compte Soundcloud</a></li>
	<li>Des vidéos sur <a href="http://www.dailymotion.com/pgoiffon">mon compte Dailymotion</a></li>
	<li>Des vidéos aimées et des playlists sur <a href="https://www.youtube.com/user/pgoiffon">ma chaine Youtube</a></li>
	<li>Des films vus et aimés sur <a href="http://www.imdb.com/user/ur10917353/watchlist">ma watchlist IMDB</a></li>
</ul>



<hr class="sep sepfin">



<?
require_once($RelBasePath . 'communs/menu.inc');
?>



</body>
</html>
<?php ob_end_flush(); ?>
