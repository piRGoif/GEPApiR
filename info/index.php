<?php ob_start('ob_gzhandler');
// Version 20140830

// NAVIGATION
$RelBasePath = "../";
$title = "Informatique [GEPApiR]";

require_once($RelBasePath . 'communs/header1.inc');
?>
<style type="text/css"><!--
--></style>
<?php
require_once($RelBasePath . 'communs/header2.inc');
?>



<h1>
<?
require_once('info_h1.inc');
?>
</h1>

<p>Informaticien de métier, consacré au développement depuis plusieurs années... 
et autour des technologies de l'Internet, voici différents petits trucs, 
notamment des documents de synthèse sur quelques points particuliers (souvent
suite à discussion sur Usenet)</p>



<?=writeHR()?>



<h2 id="GepapiR">La GepapiR côté technique</h2>

<p>Quelques détails sur les techniques utilisées sur ce site... Pour la plupart des
bonnes pratiques de développement web, et aussi quelques petites mini fonctionnalitées
développéees pour l'occasion. Ces articles sont un moyen d'apprendre ces techniques
à travers des cas très concrets !</p>

<ul>
	<li><a href="GepapiR/css.php">Mises en forme diverses</a></li>
	<li><a href="GepapiR/performances.php">Performances</a></li>
	<li><a href="GepapiR/menu_nav.php">Menu de navigation</a></li>
	<li><a href="GepapiR/responsive.php">Responsive design</a></li>
	<li><a href="GepapiR/toc_gen.php">Table des matières (TOC) dynamique</a></li>
	<li><a href="GepapiR/link_target.php">Liens : option "ouverture dans une nouvelle fenêtre"</a></li>
</ul>



<?=writeHR()?>



<h2>Internet</h2>

<ul>
	<li><a href="inet/outils.php">Outils pour le concepteur de site personnel (et plus)</a></li>
	<li>Que choisir : <a href="inet/html_ou_xhtml.php"><abbr title="HyperText Markup Language">HTML</abbr> ou <abbr title="eXtensible HyperText Markup Language">XHTML ?</abbr></a></li>
	<li><a href="inet/css_grp.php">CSS : application de la même mise en forme sur plusieurs éléments (groupement, pré-processeurs, variables)</a></li>
	<li><a href="inet/ND_doctype.php">Développement Notes / Domino et Doctype HTML</a></li>
</ul>



<!-- <?=writeHR()?>



<h2 id="dev">Développement</h2>

<ul>
	<li>Raccourcis des IDE</li>
	<li>RegExp : cheat sheet, http://www.regular-expressions.info/, regulator, online (http://regex101.com/)</li>
	<li>Projet de fin d'année d'IUT (1997... oui oui) : <a href="dev/projet.pdf">Communication série entre 2 PC par câble NULL-Modem</a></li>
</ul>-->



<?=writeHR()?>



<h2><abbr title="Internationalisation">i18n</abbr></h2>

<ul>
<!-- 	<li>Petit <a href="i18n/glossaire.php">glossaire autour de l'internationalisation</a></li>
	<li>Web & charset : <a href="i18n/web-charset_intro.php">notions fondamentales</a></li> -->
	<li>Web & charset : <a href="i18n/web-charset_html.php">internationalisation pour le concepteur Web</a></li>
<!--	<li>Web & charset : <a href="i18n/web-charset_codages_latin.php">principaux codages utilisés en Europe de l'Ouest</a></li>
 	<li>Web & charset : <a href="i18n/web-charset_sites_dyna.php">notions particulières au développement de sites dynamiques</a></li>
	<li><a href="i18n/outils.php">Outils & docs</a></li>
	<li>Web : les informations de langage (entête HTTP, attributs (x)HTML)</li> -->
</ul>



<!-- <?=writeHR()?>



<h2>Divers</h2>

<ul>
	<li>Logiciels Windows</li>
	<li>Logiciels Androïd</li>
	<li>Mes bureaux</li>
</ul> -->



<hr class="sep sepfin">



<?
require_once($RelBasePath . 'communs/menu.inc');
?>



</body>
</html>
<?php ob_end_flush(); ?>