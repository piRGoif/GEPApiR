<?php ob_start('ob_gzhandler');
$date_creation = "13/08/2014";
$date_maj = "04/09/2014";

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

<pre><code class="html">
&lt;nav>

&lt;ul>

&lt;li>
&lt;a href="..." id="menu_accueil">
&lt;span class="menu_icon">&lt;/span>&nbsp;Accueil&lt;/a>
&lt;/li>&lt;li>
&lt;a href="..." id="menu_info">
&lt;span class="menu_icon">&lt;/span>&nbsp;Informatique&lt;/a>
&lt;/li>&lt;li>
&lt;a href="..." id="menu_zicmue">
&lt;span class="menu_icon">&lt;/span>&nbsp;Musiques&lt;/a>
&lt;/li>&lt;li>
&lt;a href="..." id="menu_moi">
&lt;span class="menu_icon">&lt;/span>&nbsp;Moi&lt;/a>
&lt;/li>&lt;li>
&lt;a href="..." id="menu_liens">
&lt;span class="menu_icon">&lt;/span>&nbsp;Liens&lt;/a>
&lt;/li>

&lt;/ul>

&lt;/nav>
</code></pre>



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
avec un <code>border-radius</code> pour créer un arrondi en haut :</p>

<pre><code class="css">
border-top: 1px dashed black;
border-radius: 10% 10% 0px 0px / 1em 1em 0px 0px;
</code></pre>

<p>Egalement un fond différent est appliqué, et une <a href="http://www.w3.org/TR/css3-color/#transparency">opacité</a> de 0.85.</p>



<?=writeHR()?>



<h2>Liens</h2>

<p>Afin de pouvoir appliquer des margin/padding aux liens, on leur ajoute un
<code>display: inline-block;</code>.</p>

<pre><code class="css">
nav a
{
display: inline-block;
margin: 0 0.5em;
padding: 0.5em 1em;

border: 1px solid transparent; /* car on a 1px gray sur :hover */

font-size: 0.9em;
text-decoration: none;
}
</code></pre>

<p>Afin de séparer les rubriques, j'ai opté pour l'insertion du caractère
<a href="http://www.unicode.org/charts/PDF/U2700.pdf">U+27A6</a> par CSS avec
<a href="http://www.w3.org/TR/CSS21/generate.html"><code>:before</code></a>.<br>
Code utilisé :</p>

<pre><code class="css">
nav a:before
{
content: "➦"; /* U+27A6 Heavy black curved upwards and rightwards arrow (Dingbats) */
}
</code></pre>

<p>Remarque : mon fichier CSS est enregistré et servit en UTF-8, aussi pas de soucis
pour y inclure directement le caractère voulu. Si ça n'avait pas été le cas il
aurait toujours été possible d'inclure le caractère par l'échappement <code>\27A6</code>
comme <a href="http://www.w3.org/TR/CSS21/syndata.html#strings">l'indique la recommandation</a>.</p>



<?=writeHR()?>



<h2>:hover</h2>

<p>Un petit effet graphique est ajouté au survol de chaque rubrique, en utilisant
<a href="http://www.w3.org/TR/CSS21/box.html#value-def-border-style">le style de bordure outset</a>.<br>
<strong>Attention !</strong> Pour ne pas provoquer de décalage, il est nécessaire de positionner une
bordure de même dimension sur le <code>a</code> !</p>

<pre><code class="css">
nav a
{
/* ... */
border: 1px outset transparent; /* car on a 1px gray sur :hover */
}

nav a:hover
{
background-color: white;
border-color: gray;
border-radius: 5px;
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