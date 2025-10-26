<?php ob_start('ob_gzhandler');
$date_creation = "26/10/2025";
$date_maj = "26/10/2025";

// NAVIGATION
$RelBasePath = "../../";
$title = "Gnome : ma configuration - Linux - Informatique [GEPApiR]";

require_once($RelBasePath . 'communs/header1.inc.php');
require_once($RelBasePath . 'communs/highlight.inc.php');
require_once($RelBasePath . 'communs/header2.inc.php');
?>

<h1>
    <?
    require_once('../info_h1.inc');
    ?><br>
    Linux - Gnome : ma configuration
</h1>



<?= writeHR() ?>



<h2>Introduction</h2>

<p>
    Qu'assurer comme compatibilité navigateur ? Vaste question...
</p>



<?= writeHR() ?>



Applis "Ajustements" (Gnome Tweaks)
- Polices : facteur de mise à l'échelle < 1
- Fenêtres : actions de la barre de titre
- Applications au démarrage


Gestionnaire d'extensions


https://extensions.gnome.org/




<h2>Navigation fenêtres</h2>

<ul>
    <li>AATWS (Advanced Alt-Tab Window Switcher) : complète personnalisation du alt-tab, bandeau affiché et liste des applications, surlignage de l'application qui va récupérer le focus</li>
    <li>Another Window Session Manager : enregistre le positionnement des fenêtres, peut ré-ouvrir des configurations</li>
</ul>




<h2>Esthétique</h2>

<ul>
    <li>Bon Wallpaper</li>
</ul>



<h2>Informations supplémentaires</h2>

<ul>
    <li>Asta Monitor</li>
    <li>Autohide battery</li>
    <li>Battery indicator icon : pour afficher une icone plus sympa que celle par défaut, avec pas mal de possibilités</li>
    <li>Battery time (Percentage) Compact</li>
    <li>Bluetooth Battery Meter</li>
    <li>Bring Out Submenu Of Power Off Button</li>
</ul>



<h2>Inutile et donc indispensable</h2>

<ul>
    <li>Eye on cursor : équivalent xeyes, avec clignotement des yeux !!</li>
    <li>Burn My Windows</li>
</ul>



<?
require_once($RelBasePath . 'communs/dates-maj-footer.inc.php');
?>



<hr class="sep sepfin">



</body>
</html>
<?php ob_end_flush(); ?>
