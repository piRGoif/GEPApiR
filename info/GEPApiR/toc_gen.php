<?php ob_start('ob_gzhandler');
$date_creation = "13/08/2014";
$date_maj = "30/07/2026";

// NAVIGATION
$RelBasePath = "../../";
$title = "Table des matières (TOC) dynamique - GepapiR - Informatique [GEPApiR]";

require_once($RelBasePath . 'communs/header1.inc.php');
require_once($RelBasePath . 'communs/highlight.inc.php');
require_once($RelBasePath . 'communs/toc/toc-js.inc.html');
require_once($RelBasePath . 'communs/header2.inc.php');
?>



<h1>
<?
require_once('../info_h1.inc');
?><br>
Table des matières (TOC) dynamique
</h1>



<?
require_once($RelBasePath . 'communs/dates.inc.php');
?>



<?
require_once($RelBasePath . 'communs/toc/toc-html.inc.html');
?>



<?=writeHR()?>



<h2>Généralités</h2>

<p>Plusieurs des pages, en particulier dans la rubrique Informatique, contiennent
un long contenu. Aussi, afin de faciliter la lecture je voulais inclure une table
des matières, et pour me faciliter l'édition, qu'elle soit générée dynamiquement.</p>

<p>Plusieurs choses à régler pour y arriver :</p>

<ul>
	<li>Génération dynamique : j'ai intégré un script de Matt Whitlock (malheureusement plus disponible) qui répond à ce besoin ! Que j'ai ensuite adapté, en particulier pour conserver les id des titres lorsque ceux-ci sont déjà présents.</li>
	<li>Affichage : contenu HTML et rendu CSS</li>
</ul>



<?=writeHR()?>



<h2>Fonctionnement</h2>


<h3>Structure HTML</h3>

<p>Le contenu est intégré sous cette forme, en utilisant les nouvelles balises
HTML 5 <a href="http://www.w3.org/html/wg/drafts/html/master/interactive-elements.html#the-details-element">details</a>
et <a href="http://www.w3.org/html/wg/drafts/html/master/interactive-elements.html#the-summary-element">summary</a>.</p>

<pre><code class="html"><?php
echo htmlspecialchars(<<<'HTML'
<details id="toc" class="toolbox">
<summary>Table des matières</summary>
<ul>
	<li>...</li>
	...
</ul>
</details>
HTML
);
?>
</code></pre>

<p>La TOC sera ajoutée par le script sous forme d'un UL, à la fin du noeud DOM
<code>details#toc</code>.</p>


<h3>CSS</h3>

<p>Pour l'affichage :</p>

<ul>
	<li>sur la balise <code>details</code>
		<ul>
			<li><code>position:fixed</code></li>
			<li>On évite que le contenu déborde de l'écran avec <code>max-width</code> (unité %)</li>
		</ul>
	</li>
	<li>sur la liste <code>&lt;ul></code>
		<ul>
			<li><code>overflow: auto</code> ainsi que <code>overscroll-behavior</code> pour que lorsque l'on arrive en bas de scroll on ne continue pas avec la scrollbar de la page</li>
			<li><code>max-height</code> (unité <a href="https://drafts.csswg.org/css-values/#vh">vh</a>) : ainsi le titre est toujours visible pendant le scroll</li>
			<li>stylage de la scrollbar de cette boite avec <code>scrollbar-width</code> et <code>scrollbar-color</code></li>
		</ul>
	</li>
</ul>

<p>Extraits de la CSS (version complète à retrouver <a href="https://github.com/piRGoif/GEPApiR/blob/develop/communs/gepapir.css">sur le dépôt</a>) :</p>

<pre><code class="css">
.toolbox
{
position: fixed;
top: 0;
right: 0;
}

details#toc
{
max-width: 30%;
z-index: 10; /* to fix blockquote beeing above details content */
}

details#toc > ul
{
max-height: 60vh;

overflow-y: auto;
overscroll-behavior: contain;

scrollbar-width: thin;
scrollbar-color: #808080 transparent;
}
</code></pre>

<h4>Transition quand on clique sur un titre</h4>

<p>Deux effets intéressants :</p>

<ul>
	<li>Pour les pages disposant d'une ToC on fixe <code>scroll-behavior: smooth</code> : ainsi le navigateur va faire un effet de défilement jusqu'au titre plutôt que de l'afficher directement !
	<li>Comme le titre cible n'est pas toujours en haut de page, effet de surbrillance à l'ouverture avec à une animation
</ul>

<pre><code class="css">
:target {
  animation: flash-highlight 1.2s ease-in-out 3;
}

@keyframes flash-highlight {
  0%, 100% { background-color: transparent; }
  50%      { background-color: #fff176; }
}
</code></pre>

<p class="callout" data-variant="info">Plus d'informations sur <code>scroll-behavior</code> : <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/Reference/Properties/scroll-behavior">scroll-behavior CSS property - CSS | MDN</a></p>
<p class="callout" data-variant="info">Plus d'informations sur <code>:target</code> : <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/Reference/Selectors/:target">:target CSS pseudo-class - CSS | MDN</a></p>


<h3>JavaScript</h3>

<p>L'initialisation est faite en JavaScript : appel au script, et également
masquage du lien de fermeture et de la toc générée. On utilise le onDomReady déjà
présent par ailleurs.<br>
La fonction <code>toggleToc()</code> est cablée sur les liens d'ouverture / fermeture
et va permettre d'afficher ou masquer la table.</p>

<p class="callout" data-variant="info">Le code est <a href="https://github.com/piRGoif/GEPApiR/blob/develop/communs/toc/toc.js">est visible sur GitHub</a></p>



<?=writeHR()?>



<h2>CSS transition</h2>

<p>La partie une peu délicate... L'intégration de transitions CSS !<br>
Au départ j'ai masqué la TOC par un simple <code>display: none</code>. Erreur !
C'est <a href="http://www.w3.org/TR/css3-transitions/#animatable-properties">une propriété qui n'est pas gérée dans les CSS Transition</a>...</p>

<p class="callout" data-variant="info">Une solution possible est présentée sur ce chouette article : <a href="http://rhumaric.com/2013/12/hiding-elements-and-css-animations/">Hiding elements and CSS animations | Rhumaric, pixel distiller</a>.<br>
Mais c'est quand même assez "overkill"...<br><br>
Une autre ici : <a href="http://www.alsacreations.com/tuto/lire/1234-creer-volet-coulissant-CSS3-target-transition.html">Créer un volet coulissant en CSS3 avec :target et transition - Alsacreations</a>.<br>
Mais difficilement applicable dans mon cas...</p>

<p>J'ai triché : simplement à la fermeture une transition ajoute une modification de la margin. Ca n'est pas une vraie transition en douceur mais ça apporte une petite animation qui est sympathique !</p>

<pre><code class="css">
details#toc>ul
{
transition: all .7s ease-in-out;
}

details#toc > summary
{
transition: margin 400ms ease-out;
}
</code></pre>



<?=writeHR()?>



<?
require_once($RelBasePath . 'communs/footer.inc.php');
?>



<hr class="sep sepfin">



</body>
</html>
<?php ob_end_flush(); ?>
