<?php ob_start('ob_gzhandler');
$date_creation = "26/10/2025";
$date_maj = "13/02/2026";

// NAVIGATION
$RelBasePath = "../../";
$title = "Gnome : ma configuration - Linux - Informatique [GEPApiR]";

require_once($RelBasePath . 'communs/header1.inc.php');
require_once($RelBasePath . 'communs/highlight.inc.php');
require_once($RelBasePath . 'communs/toc/toc-js.inc.html');
require_once($RelBasePath . 'communs/header2.inc.php');
?>

<h1>
    <?
    require_once('../info_h1.inc');
    ?><br>
    Linux - Gnome : ma configuration
</h1>



<?
require_once($RelBasePath . 'communs/toc/toc-html.inc.html');
?>



<?= writeHR() ?>



<h2>Introduction</h2>

<p>
    Arrivant dans la société <a href="https://www.algoo.fr/">Algoo</a> en juillet 2025, j'ai été équipé d'un poste Debian 13 avec un gestionnaire de fenêtres Gnome. Et... habitué à KDE, mes débuts ont été difficiles ! Effectivement les possibilités de configuration sont limitées et pas forcément évidentes à trouver, et il faut ajouter de nombreuses extentions...
</p>

<p>Voici donc les leçons que j'ai tirées de l'expérience, et les réglages et extensions que j'utilise avec bonheur au quotidien !</p>

<figure>
    <a href="gnome_screenshot_piR_2026-01.webp"><img src="gnome_screenshot_piR_2026-01.webp" alt="Capture d'écran de mon bureau Gnome sous Debian 13" class="pretty-img screenshot-img"></a>
    <figcaption>Capture d'écran de mon bureau Gnome sous Debian 13</figcaption>
</figure>



<?= writeHR() ?>



<h2>Applications utiles</h2>

<h3>Applis "Ajustements" (Gnome Tweaks)</h3>

<p>Cette application est présente de base, mais il faut le savoir... Donc, n'hésitez pas à la lancer !</p>

<p>De mon côté, je l'ai utilisée pour configurer en particulier :</p>

<ul>
    <li><strong>Polices</strong> : permet de spécifier un facteur de mise à l'échelle &lt; 1, ce qui n'est pas possible dans l'application paramètres systèmes (...)</li>
    <li><strong>Fenêtres</strong> : on peut y configurer les actions sur la barre de titre des fenêtres. Pour ma part, la maximisation verticale m'est fort utile !</li>
    <li><strong>Applications au démarrage</strong> : permet de se retrouver prêt à travailler !</li>
</ul>


<h3>Gestionnaire d'extensions</h3>

<p>Indispensable pour la suite : permet de parcourir les extensions disponibles sur <a href="https://extensions.gnome.org/">https://extensions.gnome.org/</a>, de les installer / désactiver / supprimer en un clic !</p>

<figure>
    <a href="gnome_gestionnaire_extensions.webp"><img src="gnome_gestionnaire_extensions.webp" alt="Ecran principal du logiciel, avec une liste d'extensions" class="pretty-img screenshot-img"></a>
    <figcaption>Ecran principal du logiciel, avec une liste d'extensions</figcaption>
</figure>

<p class="callout" data-variant="info">A récupérer directement dans le magasin d'applications de l'OS, ou sur <a href="https://flathub.org/fr/apps/com.mattjakeman.ExtensionManager">https://flathub.org/fr/apps/com.mattjakeman.ExtensionManager</a></p>


<h3>Gnome Save desktop</h3>

<p>Permet de sauvegarder et restaurer sa configuration Gnome, incluant les extensions. Indispensable !</p>

<p class="callout" data-variant="info">A récupérer sur <a href="https://github.com/vikdevelop/SaveDesktop">https://github.com/vikdevelop/SaveDesktop</a></p>



<?= writeHR() ?>



<h2>Applications supplémentaires</h2>

<dl>
    <dd>Doplhin</dd>
    Emote
    Kate
</dl>



<?= writeHR() ?>



<h2>Extensions Gnome</h2>



<h3>Navigation fenêtres</h3>

<dl>
    <dt>AATWS (Advanced Alt-Tab Window Switcher)</dt>
    <dd>complète personnalisation du alt-tab (et windows-tab pour appli), modification du bandeau affiché avec liste et miniatures des applications (plus grand, show window titles, sort), surlignage de l'application qui va récupérer le focus, minimized windows last</dd>
    <dt>Another Window Session Manager</dt>
    <dd>enregistre le positionnement des fenêtres par profil, peut réouvrir la liste des appli et les positionner directement, possible restore at startup, icone dans la top bar</dd>
    <dt>Dash in panel</dt>
    <dd>dash dans la top bar avec surlignage apps en cours, masquage du bouton activites, 1 clic focus app et 2ème réduit ou cycle si plusieurs fenêtres</dd>
</dl>



<h3>Esthétique</h3>

<dl>
    <dt>Bing Wallpaper</dt>
    <dd>Image du jour, avec sauvegarde en local et corbeille, favoris, random, changement périodique</dd>
    <dt>Dim Background Windows</dt>
    <dd>sur les fenêtres en arrière plan permet de modifier brightness et saturation, désactivable sur raccourci</dd>
    <dt>Just perfection</dt>
    <dd>personnalisation du contenu de la top bar et des menu, suppr notif "la fenêtre est prête", tapez pour rechercher, double appui sur super donne grille apps, état de démarrage, position de l'horloge'</dd>
    <dt>Open Bar</dt>
    <dd>top bar personnalisée (mode Trilands, height, margins), window max-bar, foreground, background (gradient, alpha, palette), bar border</dd>
</dl>



<h3>Top bar informations supplémentaires</h3>

<dl>
    <dt>Asta Monitor</dt>
    <dd>Ajoute dans la top bar une zone avec des moniteurs personnalisables, que l'on peut avoir repliés par défaut</dd>
    <dt>Autohide battery</dt>
    <dd>Masque sur seuil</dd>
    <dt>Battery indicator icon</dt>
    <dd>pour afficher une icone plus sympa que celle par défaut, avec pas mal de possibilités</dd>
    <dt>Battery time (Percentage) Compact</dt>
    <dd>Temps restant pour décharge ou charge, à côté de l'icone'</dd>
    <dt>Bluetooth Battery Meter</dt>
    <dd>Bring Out Submenu Of Power Off Button</dd>
</dl>



<h3>Notifications</h3>

<dl>
    <dt>Notification Banner Reloaded</dt>
    <dd>Personnalisation des animations de notifications : horiz/vert pos/padding, animation direction/time</dd>
    <dt>Notification Configurator</dt>
    <dd>rate limiting, timeout, filtering, themes</dd>
    <dt>Top Panel Notification Icons /w Count</dt>
    <dd>Si notif alors ajoute icone avec compte</dd>
</dl>



<h3>Fonctionnalités supplémentaires</h3>

<dl>
    <dt>Clipboard indicator</dt>
    <dd>Historique du presse papier, accessible sur raccourci clavier</dd>
    <dt>Pomodoro</dt>
    <dd>Inclus de base, pas besoin d'installer. Durée pomodoro, durée pause et pause longue, nb avant pause longue</dd>
    <dt>Removable Drive Menu</dt>
    <dd>Ajoute une icone quand on a un media amovible connecté</dd>
    <dt>Top Bar Organizer</dt>
    <dd>reorg top bar (zone gauche, centre, droite)</dd>
    <dt>Unblanck lock screen</dt>
    <dd>TODO désactivé pour vérifier utilité</dd>
    <dt>Wifi QR Code</dt>
    <dd>Permet d'afficher un QR code du Wifi actif, dans le drop down système de la top bar</dd>
    <dt>Wiggle</dt>
    <dd>retrouver son curseur (agrandissement après avoir agité pendant un temps donné, sinon voir options accessibilités : ctrl génère un highlight)</dd>
</dl>



<h3>Inutile et donc indispensable</h3>

<dl>
    <dt><a href="https://github.com/brndnmtthws/Eye-on-cursor">Eye on cursor</a></dt>
    <dd>En 1997 je découvrais XWindow et son génial <a href="https://fr.wikipedia.org/wiki/Xeyes">Xeyes</a>, et depuis j'ai toujours eu l'équivalent sur mes machines de travail ! Hé bien, voici un équivalent pour ajouter dans la barre supérieure les yeux qui suivent le curseur de souris !</dd>
    <dt><a href="https://github.com/brndnmtthws/Burn-My-Windows">Burn My Windows</a></dt>
    <dd>Ajout des effets à l'ouverture et fermeture de fenêtres, avec tout ce qu'il faut pour personnaliser (effet autorisé, exclusions, ...).<br>
    Le nombre d'effets est dingue (à voir sur <a href="https://github.com/brndnmtthws/Burn-My-Windows">le Github du projet</a> !) et très éclectique !</dd>
</dl>



<?= writeHR() ?>



<?
require_once($RelBasePath . 'communs/dates-maj-footer.inc.php');
?>



<hr class="sep sepfin">



</body>
</html>
<?php ob_end_flush(); ?>
