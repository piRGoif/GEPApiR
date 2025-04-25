<?php ob_start('ob_gzhandler');
// NAVIGATION
$RelBasePath = "../";
$title = "Informatique [GEPApiR]";

require_once($RelBasePath . 'communs/header1.inc.php');
require_once($RelBasePath . 'communs/header2.inc.php');
?>



<h1>
<?
require_once('info_h1.inc');
?>
</h1>

<?= writeHR() ?>



<h2 id="pro">👨‍💼 Pro</h2>

<p>Développeur d'applications Web depuis 1997, voici quelques liens sur mes comptes professionnels :</p>

<ul>
	<li><a href="https://www.linkedin.com/in/pierregoiffon/">Compte LinkedIn</a></li>
	<li>Comptes <a href="https://github.com/piRGoif">GitHub</a> et <a
			href="https://sourceforge.net/u/pgoiffon/profile/">SourceForge</a></li>
	<li>Dépôt de <a href="https://github.com/Combodo/iTop">iTop</a>, application web ITSM/CMDB open source sur laquelle
		j'ai été employé de 2017 à 2024</li>
</ul>



<?=writeHR()?>



<h2 id="GepapiR">La GepapiR côté technique</h2>

<p>Quelques détails sur les techniques utilisées sur ce site... Pour la plupart des
bonnes pratiques de développement web, et aussi quelques petites mini fonctionnalitées
développéees pour l'occasion. Ces articles sont un moyen d'apprendre ces techniques
à travers des cas très concrets !</p>

<ul>
	<li><a href="GEPApiR/vcs.php">Suivi de version et publication</a></li>
	<li><a href="GEPApiR/css.php">CSS : mises en forme diverses</a></li>
	<li><a href="GEPApiR/performances.php">Performances</a></li>
	<li><a href="GEPApiR/menu_nav.php">Menu de navigation</a></li>
	<li><a href="GEPApiR/responsive.php">Responsive design</a></li>
	<li><a href="GEPApiR/toc_gen.php">Table des matières (TOC) dynamique</a></li>
	<li><a href="GEPApiR/link_target.php">Liens : option "ouverture dans une nouvelle fenêtre"</a></li>
</ul>



<?=writeHR()?>



<h2 id="inet">Internet</h2>

<ul>
	<li><a href="inet/outils.php">Outils pour le concepteur de site personnel (et plus)</a></li>
	<li>Que choisir : <a href="inet/html_ou_xhtml.php"><abbr title="HyperText Markup Language">HTML</abbr> ou <abbr title="eXtensible HyperText Markup Language">XHTML ?</abbr></a></li>
	<li><a href="inet/css_grp.php">CSS : application de la même mise en forme sur plusieurs éléments (groupement, pré-processeurs, variables)</a></li>
	<li><a href="inet/ND_doctype.php">Développement Notes / Domino et Doctype HTML</a></li>
</ul>



<?=writeHR()?>



<h2 id="i18n"><abbr title="Internationalisation">i18n</abbr></h2>

<ul>
<!-- 	<li>Petit <a href="i18n/glossaire.php">glossaire autour de l'internationalisation</a></li>
	<li>Web & charset : <a href="i18n/web-charset_intro.php">notions fondamentales</a></li> -->
	<li>Web & charset : <a href="i18n/web-charset_html.php">internationalisation pour le concepteur Web</a></li>
<!--	<li>Web & charset : <a href="i18n/web-charset_codages_latin.php">principaux codages utilisés en Europe de l'Ouest</a></li>
 	<li>Web & charset : <a href="i18n/web-charset_sites_dyna.php">notions particulières au développement de sites dynamiques</a></li>
	<li><a href="i18n/outils.php">Outils & docs</a></li>
	<li>Web : les informations de langage (entête HTTP, attributs (x)HTML)</li> -->
</ul>



<?= writeHR() ?>



<h2 id="dev">Développement</h2>

<ul>
    <li><a href="dev/IDE_shortcuts.php">IDE - principaux racourcis</a>
    <li>Ca date, mais pour mémoire, projet de fin d'étude d'IUT (1997) :
        <a href="dev/projet_IUT_liaison_null-modem.pdf">Communication série entre
        2 PC par câble NULL-MODEM</a>
</ul>



<!-- <?=writeHR()?>



<h2>Divers</h2>

<ul>
	<li>Logiciels Windows</li>
	<li>Logiciels Androïd</li>
	<li>Mes bureaux</li>
</ul> -->



<hr class="sep sepfin">



</body>
</html>
<?php ob_end_flush(); ?>