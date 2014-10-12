<?php ob_start('ob_gzhandler');
$date_creation = "13/08/2014";
$date_maj = "14/08/2014";

// NAVIGATION
$RelBasePath = "../../";
$title = "Table des matières (TOC) dynamique - GepapiR - Informatique [GEPApiR]";

require_once($RelBasePath . 'communs/header1.inc');
require_once($RelBasePath . 'communs/highlight.inc');
require_once($RelBasePath . 'communs/toc/toc-js.inc');
require_once($RelBasePath . 'communs/header2.inc');
?>



<h1>
<?
require_once('../info_h1.inc');
?><br>
Table des matières (TOC) dynamique
</h1>


<?
require_once($RelBasePath . 'communs/toc/toc-html.inc');
?>



<?=writeHR()?>



<h2>Généralités</h2>

<p>Plusieurs des pages, en particulier dans la rubrique Informatique, contiennent
un long contenu. Aussi, afin de faciliter la lecture je voulais inclure une table
des matières, et pour me faciliter l'édition, qu'elle soit générée dynamiquement.<br>
J'ai donc intégré <a href="http://www.whitsoftdev.com/articles/toc.html">un script de Matt Whitlock</a>
qui répond à ce besoin ! Et j'ai fait apparaitre le contenu dans un panel flottant.</p>



<?=writeHR()?>



<h2>Fonctionnement</h2>


<h3>Structure HTML</h3>

<p>Le contenu est intégré sous cette forme, en utilisant les nouvelles balises
HTML 5 <a href="http://www.w3.org/html/wg/drafts/html/master/interactive-elements.html#the-details-element">details</a>
et <a href="http://www.w3.org/html/wg/drafts/html/master/interactive-elements.html#the-summary-element">summary</a>.</p>

<pre><code class="html">
&lt;details id="toc" class="toolbox">
&lt;summary>Table des matières&lt;/summary>
&lt;a id="toc-open" onClick="toggleToc()">+&lt;/a>
&lt;a id="toc-close" onClick="toggleToc()">X&lt;/a>
&lt;/details>
</code></pre>

<p>La TOC sera ajoutée par le script sous forme d'un UL, à la fin du noeud DOM
<code>details#toc</code>.</p>


<h3>CSS</h3>

<p>Pour l'affichage, j'utilise <code>position:fixed</code>. On évite que le contenu
déborde de l'écran avec <code>max-width</code> et <code>max-height</code> ainsi
qu'un <code>overflow: auto</code>.</p>

<pre><code class="css">
.toolbox
{
position: fixed;
top: 0;
right: 0;

padding: 0.3em;

border: 1px dotted black;
border-radius: 0 0 0 10px;
background-color: gray;
opacity: 0.85;
}

details#toc
{
max-width: 50%;
max-height: 80%;
overflow: auto;
text-align: center;
}
</code></pre>


<h3>JavaScript</h3>

<p>L'initialisation est faite en JavaScript : appel au script, et également
masquage du lien de fermeture et de la toc générée. On utilise le onDomReady déjà
présent par ailleurs.<br>
La fonction <code>toggleToc()</code> est cablée sur les liens d'ouverture / fermeture
et va permettre d'afficher ou masquer la table.</p>

<pre><code class="html">
&lt;script src="...">&lt;/script> // librairie de Matt Whitlock
&lt;script>
var HIDE_CLASS = "hide";

function getTocElement() {
	return document.getElementById("toc").getElementsByTagName("ul")[0];
}

// Affiche ou masque la TOC à chaque appel
function toggleToc() {
	var ul = getTocElement();
	var newDispValue = (ul.className == HIDE_CLASS) ? "" : HIDE_CLASS;

	if (newDispValue == HIDE_CLASS) {
		// on ferme la TOC
		document.getElementById("toc-open").style.display = "";
		document.getElementById("toc-close").style.display = "none";
	} else {
		// on ouvre la TOC
		document.getElementById("toc-open").style.display = "none";
		document.getElementById("toc-close").style.display = "";
	}
	ul.className = newDispValue;
}

onDomReady(function() {
	generateTOC(document.getElementById("toc"));
	getTocElement().className = HIDE_CLASS;
	document.getElementById("toc-close").style.display="none";
});
&lt;/script>
</code></pre>



<?=writeHR()?>



<h2>CSS transition</h2>

<p>La partie une peu délicate... L'intégration de transitions CSS !<br>
Au départ j'ai masqué la TOC par un simple <code>display: none</code>. Erreur !
C'est <a href="http://www.w3.org/TR/css3-transitions/#animatable-properties">une propriété qui n'est pas gérée dans les CSS Transition</a>...</p>

<p>Une solution possible est présentée sur ce chouette article : <a href="http://rhumaric.com/2013/12/hiding-elements-and-css-animations/">Hiding elements and CSS animations | Rhumaric, pixel distiller</a>.
Mais c'est quand même assez "overkill"...<br>
Une autre ici : <a href="http://www.alsacreations.com/tuto/lire/1234-creer-volet-coulissant-CSS3-target-transition.html">Créer un volet coulissant en CSS3 avec :target et transition - Alsacreations</a>.
Mais difficilement applicable dans mon cas...<br>
J'ai tenté d'utiliser une classe nommée "hide" comme ci-dessous, qui
joue sur <code>width</code>, <code>height</code> et <code>opacity</code> plutôt
que <code>display</code>. L'affichage et le masquage de la TOC se fait donc en
jouant sur la valeur de l'attribut <code>className</code> du noeud (vide ou avec
la valeur "hide").</p>

<pre><code class="css">
details#toc>ul
{
transition: all .7s ease-in-out;
}

details#toc>ul.hide, details#toc>ul.hide *
{
width: 0;
height: 0;
opacity: 0;
}
</code></pre>

<p>Il ne s'agit clairement pas d'une solution idéale : la transition ne s'exécutant
pas à la fermeture, des artefacts de liens restant après fermeture, et des problèmes
apparaissant avec le <code>overflow: auto</code> !... Ca sera à améliorer plus
tard, et donc pour l'instant pas de transitions !</p>



<?=writeHR()?>



<?
require_once($RelBasePath . 'communs/dates-maj-footer.inc');
?>



<hr class="sep sepfin">



<?
require_once($RelBasePath . 'communs/menu.inc');
?>



</body>
</html>
<?php ob_end_flush(); ?>