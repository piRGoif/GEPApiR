<?php ob_start('ob_gzhandler');
$date_creation = "23/08/2014";
$date_maj = "26/08/2014";

// NAVIGATION
$RelBasePath = "../";
$title = "Finale - Musiques [GEPApiR]";

require_once($RelBasePath . 'communs/header1.inc.php');
require_once($RelBasePath . 'communs/highlight.inc.php');
require_once($RelBasePath . 'communs/header2.inc.php');
?>



<h1>
<?
require_once('zicmue_h1.inc');
?>
<br>
Finale</h1>

<p>Quelques petites infos pour les utilisateurs du logiciel <a href="http://www.finalemusic.com/">Finale</a> !</p>



<?=writeHR()?>



<h2>Liens utiles</h2>

<dl>
	<dt><a href="http://www.finalemusic.com/support/learning-center/user-manuals/">Documentation officielle</a></dt>
	<dd>Des liens vers les dernières versions, suivant les plateformes.</dd>

	<dt><a href="http://downloads2.makemusic.com/finale/2012/Finale2012WinQRG.pdf">Quick reference guide Finale 2012 Windows</a></dt>
	<dd>Un excellent document synthétique !<br>
	Auparavant il y avait une page sur le site officiel qui les listait pour chaque
	version, mais ça n'existe visiblement plus (août 2014)</dd>

	<dt><a href="http://www.finaleforum.com/">Finale Forum</a></dt>
	<dd>Un forum très dynamique sur le logiciel... Quoi que vous cherchiez, il y a
	de très fortes que chance que la réponse s'y trouve !</dd>

	<dt><a href="http://www.finaletips.nu/index.php/tips-a-tricks">
The Finale Productivity Tips Site
</a></dt>
	<dd>Des conseils, des scripts...</dd>
</dl>



<?=writeHR()?>



<h2 id="fnscripts">Finale Scripts</h2>


<h3>Référence</h3>

<p>Les Finale Scripts sont un moyen d'automatiser les taches répétitives. Malheureusement,
à cette heure le logiciel ne dispose pas d'un mode "enregistrement" et donc il faut
écrire à la main chaque script, et c'est assez rébarbatif. Mais celà peut sauver
la mise !</p>

<p>Le logiciel est livré avec plusieurs scripts, et on peut écrire les siens dans l'éditeur.
Pour celà ouvrir :<br>
Plug-ins / Finale Script / Palette FinaleScript.</p>

<p>Plus d'informations  sur l'écriture des Finale Scripts dans la documentation
Finale 2012 : <a href="http://www.finalemusic.com/UserManuals/Finale2012Win/Content/Finale/FinaleScript_plug_in.htm">FinaleScript™ plug-in</a>.<br>
Idem dans le manuel Finale 2014 : <a href="http://www.finalemusic.com/UserManuals/Finale2014Win/Content/Finale/FinaleScript_plug_in.htm">FinaleScript™ plug-in</a>.</p>


<h3>A défaut à l'octave</h3>

<p>Ce script va :</p>

<ul>
	<li>copier la zone sélectionnée de la couche 1 vers la couche 2</li>
	<li>transposer les notes collées</li>
	<li>diminuer leur taille à 75%</li>
</ul>

<p>Exemple de résultat :<br>
<img src="<?=$RelBasePath?>images/zicmue/fnscript1.png" width="331" height="113"></p>

<pre><code class="TypeScript">
// Copie
menu item "Déplacer/Copier des couches"
check "Copier"
check "Contenu de la couche 1 vers :"
dropdown "Couche 2" near "Contenu de la couche 1 vers :"
hit ok

menu item "Couche 2" // passe sur la couche 2
menu item "Ne travailler que sur la couche active"

// Transpose
menu item "Transposer..."
check "Bas"
check "Chromatiquement"
dropdown "Octave juste"
hit ok

// taille
menu item "Taille de note..."
type 75 near "%"
hit ok

menu item "Ne travailler que sur la couche active"
</code></pre>

<p><strong>Attention</strong> : les silences et pause apparaitront en double...
Pour les faire disparaitre, appliquer l'une des 2 méthodes ci-dessous (bien les
appliquer sur la bonne couche, cad la couche 2) :</p>

<ul>
	<li>Modifier les éléments un à un, avec la touche H (correspond à l'option
	Entrée simple / Commandes entrée simple / Modification / Afficher/Masquer)</li>
	<li>Utiliser le plugin "JW Conceal Rests" disponible sur <a href="http://www.finaletips.nu/index.php/download/category/9-plug-ins-for-windows">FinaleTips</a></li>
</ul>



<?=writeHR()?>



<?
require_once($RelBasePath . 'communs/dates-maj-footer.inc.php');
?>



<hr class="sep sepfin">



<?
require_once($RelBasePath . 'communs/menu.inc.php');
?>



</body>
</html>
<?php ob_end_flush(); ?>