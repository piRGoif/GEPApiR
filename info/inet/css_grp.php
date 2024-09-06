<?php ob_start('ob_gzhandler');
$date_creation = "24/08/2005";
$date_maj = "14/08/2014";

// NAVIGATION
$RelBasePath = "../../";
$title = "CSS : application de la même mise en forme sur plusieurs éléments (groupement, pré-processeurs, variables) - Internet - Informatique [GEPApiR]";

require_once($RelBasePath . 'communs/header1.inc.php');
require_once($RelBasePath . 'communs/toc/toc-js.inc.html');
require_once($RelBasePath . 'communs/highlight.inc.php');
require_once($RelBasePath . 'communs/header2.inc.php');
?>



<h1>
<?
require_once('../info_h1.inc');
?>
<br>
CSS : application de la même mise en forme sur plusieurs éléments (groupement,
pré-processeurs, variables)</h1>
</h1>


<?
require_once($RelBasePath . 'communs/toc/toc-html.inc.html');
?>



<?=writeHR()?>



<h2>Introduction</h2>

<p>Il est assez commun de se retrouver avec des déclarations identiques, répétées
entre plusieurs éléments. Une couleur de fond par exemple... Cette multiplication
des déclarations pose évidemment des problèmes de maintenance et lecture des fichiers
CSS...</p>

<p>Nous allons aborder dans ce document les moyens existants pour répondre à un
besoin naturel de factorisation.</p>



<?=writeHR()?>



<h2>CSS 2</h2>

<p>Moyens les plus anciens, et très largement supportés !</p>


<h3>Un seule déclaration <abbr>CSS</abbr> sur plusieurs éléments</h3>

<p>On peut grouper plusieurs sélecteurs ensembles en les séparant par des
virgules :</p>

<pre><code class="css">
.class1, .class2, #foobar, ...
{
...
}
</code></pre>

<p>C'est la notion de groupement définie dans la recommandation CSS<sup>[<a href="#fn1">1</a>]</sup></p>


<h3>Plusieurs classes sur un élément <abbr>(x)HTML</abbr></h3>

<p>En <abbr>(x)HTML<abbr>, on peut préciser plusieurs classes sur un élément donné :</p>

<pre><code class="html">
&lt;p id="foobar" class="class1 class2">
</code></pre>

<p>On trouvera cette information dans la définition de l'attribut class de la
recommandation <abbr>HTML</abbr><sup>[<a href="#fn2">2</a>]</sup>.</p>

<p>Cette méthode est souvent utilisée pour les CSS Sprites : une classe définit
le modèle et une autre positionne simplement le <code>background-position</code>.</p>


<h3>Notes</h3>

<ul>
	<li>Il vaut mieux, autant que possible, éviter d'utiliser les classes. En
	effet, une multiplication de <code>class=...</code> dans le (x)HTML va à l'encontre
	de la logique de séparation contenu / mise en forme !</li>
	<li>Attention aux conflits ! On peut avoir la même propriété <abbr>CSS</abbr> pour un
	élément donné définit plusieurs fois... Dans ce cas, la recommandation<sup>[<a href="#fn3">3</a>]</sup>
	détaille quoi faire en cas de conflit de définition de propriétés (voyez en
	particulier la spécificité).</li>
</ul>



<?=writeHR()?>



<h2>Pré-processeurs</h2>

<p>On peut également réaliser du traitement... Les deux systèmes les plus populaires :</p>

<dl>
	<dt>LESS</dt>
	<dd><a href="http://lesscss.org/">http://lesscss.org/</a></dd>
	<dt>SAAS</dt>
	<dd><a href="http://sass-lang.com/">http://sass-lang.com/</a></dd>
</dl>

<p>Un article qui en parle d'expérience : <a href="http://blog.codinghorror.com/whats-wrong-with-css/">What&#039;s Wrong With CSS</a></p>



<?=writeHR()?>



<h2>Variables CSS</h2>

<p>Une recommandation<sup>[<a href="#fn4">4</a>]</sup> permet de répondre à ce
besoin... Mais à l'heure de l'écriture de ces lignes (août 2014) elle est toujours
en working draft, et le support est très réduit : uniquement Firefox 31+ ! Cf
<a href="http://caniuse.com/#feat=css-variables">CanIUse</a>.</p>

<p>Un article sur DevMo bien intéressant sur le sujet : <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/Using_CSS_variables">Using CSS variables - CSS | MDN</a></p>



<?=writeHR()?>



<h2>Références</h2>


<h3>Recommandations <abbr title="World Wide Web Consortium">W3C</abbr></h3>

<ul>
	<li><a href="http://www.w3.org/TR/html401/">Recommandation <abbr>HTML</abbr> 4.01</a></li>
	<li id="rec_xhtml1.0"><a href="http://www.w3.org/TR/xhtml1/">Recommandation <abbr>XHTML</abbr> 1.0</a></li>
	<li><a href="http://www.w3.org/TR/xhtml11/">Recommandation <abbr>XHTML</abbr> 1.1</a></li>
	<li><a href="http://www.w3.org/TR/CSS21/">Recommandation <abbr>CSS</abbr> 2.1</a></li>
	<li id="fn4">[4] <a href="http://dev.w3.org/csswg/css-variables/">CSS Custom Properties for Cascading Variables Module Level 1</a></li>
</ul>


<h3>Où dans la recommandation ?</h3>

<ul>
	<li id="fn1">[1] <a href="http://www.w3.org/TR/CSS21/selector.html#grouping">Chapitre 5.2.1 Grouping</a>
	de la recommandation <abbr>CSS</abbr></li>
	<li id="fn2">[2] Dans la recommandation <abbr>HTML</abbr> 4.01, <a href="http://www.w3.org/TR/html401/struct/global.html#adef-class">définition de l'attribut class</a>,
	indiquant que plusieurs classes peuvent être spécifiées.</li>
	<li id="fn3">[3] Toujours dans la même recommandation, le <a href="http://www.w3.org/TR/CSS21/cascade.html#cascade">chapitre 6.4 The cascade</a>,
	indiquant les règles suivies pour l'application de telle ou telle valeur
	en cas de conflit entre de multiples déclarations de la même propriété</li>
</ul>



<?=writeHR()?>



<?
require_once($RelBasePath . 'communs/dates-maj-footer.inc.php');
?>



<hr class="sep sepfin">



</body>
</html>
<?php ob_end_flush(); ?>