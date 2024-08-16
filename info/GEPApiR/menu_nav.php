<?php ob_start('ob_gzhandler');
$date_creation = "13/08/2014";
$date_maj = "16/08/2024";

// NAVIGATION
$RelBasePath = "../../";
$title = "Menu de navigation - GepapiR - Informatique [GEPApiR]";

require_once($RelBasePath . 'communs/header1.inc.php');
require_once($RelBasePath . 'communs/highlight.inc.php');
require_once($RelBasePath . 'communs/toc/toc-js.inc.html');
require_once($RelBasePath . 'communs/header2.inc.php');
?>



<h1>
<?
require_once('../info_h1.inc');
?><br>
Menu de navigation
</h1>



<?
require_once($RelBasePath . 'communs/toc/toc-html.inc.html');
?>



<h2>Généralités</h2>

<p>Ce site ne dispose pas d'un contenu très foisonnant, aussi il n'y a pas plus
de 2 niveaux au maximum. En conséquence, une navigation avec uniquement les
catégories principales suffit !</p>

<p>Le contenu est intégré au sein du nouvel élément HTML 5 <a href="http://www.w3.org/TR/html5/sections.html#the-nav-element">nav</a>,
qui est tout indiqué dans ce cas :)<br>
Les options de menu sont contenues dans une liste UL/LI.</p>

<p>Initialement, des icones en image étaient présentes sur chaque entrée, mais je les ai remplacé par des emoji. Par conséquent le rendu est maintenant dépendant de la plateforme... En général on utilise donc plutôt des solutions comme <a href="https://fontawesome.com/">Font Awesome</a> afin de se prémunir de ce problème, mais j'ai ici préféré la simplicité considérant que ces différences de rendu n'étaient pas très importantes. D'autant que les emoji utilisés sont très communs et identifiables par tous !<br>
Remarque : mon fichier CSS est enregistré et servit en UTF-8, aussi pas de soucis
pour y inclure directement les caractères voulus. Si ça n'avait pas été le cas il
aurait toujours été possible d'inclure des emoji par échappement comme <a href="http://www.w3.org/TR/CSS21/syndata.html#strings">l'indique la recommandation</a>.</p>

<pre><code class="html"><?php
echo htmlspecialchars(<<< 'PHP'
<nav>
	<ul>
		<li>
		<a href="<?= ($RelBasePath == "") ? "index.php" : $RelBasePath; ?>" id="menu_accueil">
				🏡&nbsp;Accueil</a>
		</li>
		<li>
			<a href="<?= $RelBasePath ?>info/" id="menu_info">
				💻&nbsp;Informatique</a>
		</li>
		<li>
			<a href="<?= $RelBasePath ?>zicmue/" id="menu_zicmue">
				🎵&nbsp;Musiques</a>
		</li>
		<li>
			<a href="<?= $RelBasePath ?>moi/" id="menu_moi">
				👤&nbsp;Moi</a>
		</li>
		<li>
			<a href="<?= $RelBasePath ?>liens/" id="menu_liens">
				🔗&nbsp;Liens</a>
		</li>
	</ul>
</nav>
PHP);
?></code></pre>



<?=writeHR()?>



<h2>Positionnement</h2>

<p>Je souhaitait un menu affiché en bas et fixe. Deux solutions pour obtenir cet
effet :</p>

<ul>
	<li>des <a href="http://www.w3.org/TR/html4/present/frames.html">frames</a> :
	énormément d'inconvénients (principalement autour de l'url figurant dans le
	navigateur qui est celle du frameset), pour un avantage minime !</li>
	<li>du positionnement CSS avec <a href="http://www.w3.org/TR/CSS21/visuren.html#propdef-position"><code>position: fixed</code></a></li>
</ul>

<p>C'est donc évidemment la 2ème solution que j'ai retenue ! Malheureusement au
moment de la mise en place le support était assez restraint, j'avais alors utilisé
le polyfill JavaScript <a href="https://code.google.com/p/ie7-js/">IE7</a>. Lors
des mises à jour de août 2014 j'ai jugé qu'il n'était plus nécessaire et l'ai
supprimé (comme on le voit <a href="http://caniuse.com/#feat=css-fixed">sur caniuse.com</a>
le support est bon sur une grande majorité de navigateurs).</p>

<p>Pour séparer le menu du reste de la page, une bordure particulière est appliquée
(<a href="http://www.w3.org/TR/CSS21/box.html#value-def-border-style">la liste des styles de bordure dans la recommandation</a>),
avec un <code>border-radius</code> pour créer un arrondi en haut (en unité relative comme on le verra dans <a href="responsive.php">la page sur le responsive</a>) :</p>

<pre><code class="css">
border: 1px solid grey;
border-bottom: none;
border-radius: 5% 5% 0 0 / 1em 1em 0 0;
</code></pre>

<p>Egalement est appliqué au menu un fond différent du reste de la page.</p>

<p>Une <a href="http://www.w3.org/TR/css3-color/#transparency">opacité</a> est réglée afin de voir le contenu défiler sous le menu.</p>



<?=writeHR()?>



<h2>Liens</h2>

<p>Afin de pouvoir appliquer des margin/padding aux liens, on leur ajoute un
<code>display: inline-block;</code>.</p>

<p>Des séparateurs sont ajoutés simplement avec une bordure à gauche, sauf sur le premier élément.</p>

<pre><code class="css">
nav a
{
    display: inline-block;
    margin: 0;
    padding: 0.5em 1em;

    border: 1px outset transparent;
    border-left: 1px solid gray;

    font-size: 0.9em;
    text-decoration: none;
}

nav>ul>li:first-child>a {
    border-left-color: transparent;
}
</code></pre>



<?=writeHR()?>



<h2>:hover</h2>

<p>Un petit effet graphique est ajouté au survol de chaque rubrique avec une couleur de fond dédiée, et une animation de transition (cf <a href="https://developer.mozilla.org/fr/docs/Web/CSS/transition">page dédiée du MDN</a>).</p>

<pre><code class="css">
nav a
{
	/* ... */
    background-color: transparent;
    transition: background 0.6s;
	/* ... */
}


nav a:hover
{
    background-color: white;
}
</code></pre>



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