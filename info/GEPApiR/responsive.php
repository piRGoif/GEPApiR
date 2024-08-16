<?php ob_start('ob_gzhandler');
$date_creation = "13/08/2014";
$date_maj = "16/08/2024";

// NAVIGATION
$RelBasePath = "../../";
$title = "Responsive design - GepapiR - Informatique [GEPApiR]";

require_once($RelBasePath . 'communs/header1.inc.php');
require_once($RelBasePath . 'communs/highlight.inc.php');
require_once($RelBasePath . 'communs/toc/toc-js.inc.html');
require_once($RelBasePath . 'communs/header2.inc.php');
?>



<h1>
<?
require_once('../info_h1.inc');
?><br>
Responsive design
</h1>



<?
require_once($RelBasePath . 'communs/toc/toc-html.inc.html');
?>



<?=writeHR()?>



<h2>Introduction</h2>

<p>La possibilité d'enfin utiliser CSS à son plein potentiel (mise en forme de texte
mais aussi et surtout positionnement) a conduit à un principe de design permettant
de s'adapter à tous les écrans : l'elastic design. Cet article de A list apart de
2004 décrit bien le principe : <a href="http://alistapart.com/article/elastic/">Elastic Design · An A List Apart Article</a>.</p>

<p>Avec la généralisation des smartphone et tablettes, la donne a brutalement changé,
la diversité d'équipements pouvant utiliser les sites et applications devenant immense !</p>

<p>Grace aux <a href="http://www.w3.org/TR/css3-mediaqueries/">Media Queries</a> en
CSS, un nouveau principe est apparu, dérivé de l'elastic design : le responsive design.
L'idée est alors, suivant la dimension de l'écran, d'adapter le positionnement et
même carrément l'affichage des éléments.</p>

<p>Un autre système de conception est apparu en 2011, proposé par Luke Wroblewski
dans son livre "Mobile First". Comme son nom l'indique, l'idée est de concevoir d'abord
à destination des mobiles, puis d'enrichir successivement. Les avantages de la méthode
sont bien décrits dans la conclusion de l'ouvrage :</p>

<blockquote>
<p>Starting with this personal and portable device in mind first allows us to:</p>
<ul>
<li>Take advantage of the enormous growth in mobile internet usage and find new ways for people to use our websites and applications.</li>
<li>Embrace mobile constraints to focus and prioritize the services we’re designing and building.</li>
<li>Use mobile capabilities to innovate the complete customer experience.</li>
<li>Take what we know about designing for the Web and start thinking differently about mobile organization, actions, inputs, and layout.</li>
</ul>
</blockquote>

<p>Mais évidemment, aucune méthode n'est idéale : comme on l'image bien, la situation
de base est que les utilisateurs auront des besoins et usages différents suivant le
matériel qu'ils utilisent... en plus des "simples" contraintes techniques !<br>
Je vous recommande la lecture de ce billet chez Alsacreations qui décrit bien les
différentes solutions (site dédié, application, site commun) : <a href="http://www.alsacreations.com/article/lire/1615-cest-quoi-le-responsive-web-design.html">C'est quoi le Responsive Web Design ?</a>.</p>

<p>Sur la GepapiR, il n'y a que quelques pages de contenu, aussi la réponse s'est
plutôt orientée vers une adaptation aux différentes résolutions ! Cet article décrit
ce qui a été mis en place.</p>



<?=writeHR()?>



<h2 id="meta_tag">Balise meta viewport</h2>

<p>Par défaut les navigateurs sur mobile vont initialiser un zoom afin d'afficher la
page dans son entier, au plus près de ce que l'on aurait sur un écran plus grand.
L'utilisateur est alors obligé d'utiliser massivement le zoom manuel...</p>

<p>Une balise meta viewport permet d'éviter ce comportement !.<br>
Voir le document de recommandation du W3C : <a href="http://www.w3.org/TR/mwabp/#bp-viewport">Mobile Web Application Best Practices - Use Meta Viewport Element To Identify Desired Screen Size</a><br>
Ou cet article sur le très bon quirksmode.org : <a href="http://www.quirksmode.org/mobile/metaviewport/">Meta viewport</a>.</p>

<p>Sur la GepapiR j'utilise :</p>

<pre><code class="html">&lt;meta name="viewport" content="width=device-width, initial-scale=1.0"></code></pre>



<?=writeHR()?>



<h2 id="css_unit">Unités CSS relatives</h2>

<p>Les dimensions en CSS peuvent s'exprimer en différentes unités : voir la liste
<a href="http://www.w3.org/TR/CSS21/syndata.html#length-units">dans la recommandation</a> !</p>

<p>Afin de s'adapter au paramétrage des navigateurs, les dimensions de texte et marges
sont définies avec l'unité <code>em</code>. Cependant, utiliser cette unité poserait
problème pour les marges horizontales : en effet celles-ci sont plus liées à la dimension
du viewport (la zone qu'affiche le navigateur) que aux paramètres de police ! Aussi,
ces marges là sont définies sur la GepapiR en utilisant l'unité <code>%</code>, et
s'adaptent donc en fonction de la largeur disponible.<br>
Exemples d'adaptation des marges horizontales dans les captures ci-dessous :</p>

<dl>
	<dt>1024px</dt>
	<dd><img src="<?=$RelBasePath?>images/info/gepapir-marges-1024.png" width="1024" height="277"
	alt="" class="pretty-img" data-responsive-img></dd>
	<dt>800px</dt>
	<dd><img src="<?=$RelBasePath?>images/info/gepapir-marges-800.png" width="800" height="293"
	alt="" class="pretty-img" data-responsive-img></dd>
	<dt>360px</dt>
	<dd><img src="<?=$RelBasePath?>images/info/gepapir-marges-360.png" width="360" height="461"
	alt="" class="pretty-img" data-responsive-img></dd>
</dl>

<p>Un très bon article à lire sur les unités CSS et leurs effets : <a href="http://snook.ca/archives/html_and_css/font-size-with-rem">Font sizing with rem - Snook.ca</a>.<br>
Sur la GepapiR, je n'utilise pas l'unité <code>rem</code> car la structure des pages
est simple et fait que les problèmes d'imbrication décrits dans l'article sont absents.</p>



<?=writeHR()?>



<h2 id="menu">Menu de navigation</h2>

<p>Trois différentes largeurs d'écran sont gérées pour le menu de navigation, via des
<a href="http://www.w3.org/TR/css3-mediaqueries/">media queries</a>, comme montré
ci-dessous. Pour chacun d'elle on adapte la position et la taille du texte autour
des icones. La longueur variable du border-radius est gérée par une dimension en
unité "%".</p>

<dl>
	<dt>Par défaut</dt>
	<dd><img src="<?=$RelBasePath?>images/info/gepapir-nav-default.png" width="796" height="62"
	data-responsive-img></dd>
	<dt>Si la largeur <= 700px</dt>
	<dd><img src="<?=$RelBasePath?>images/info/gepapir-nav-700.png" width="718" height="42"
	data-responsive-img>
<pre><code class="css">
@media screen and (max-width: 700px)
{
    nav a
    {
        margin: 0 0.5em;
        padding: 0.2em;
    }
}
</code></pre>
	</dd>
	<dt>Si la largeur <= 590px</dt>
	<dd><img src="<?=$RelBasePath?>images/info/gepapir-nav-590.png" width="256" height="34"
	data-responsive-img>
<pre><code class="css">
@media screen and (max-width: 590px)
{
    nav ul
    {
        margin: 0;
        padding : 0.1em;

        font-size: 0.85em;
    }

    nav a
    {
        margin: 0 0.1em;
        padding: 1em 0.05em;
    }
}
</code></pre>
	</dd>
</dl>

<p>A noter : on utilise <a href="https://developer.mozilla.org/fr/docs/Web/CSS/max-width"><code>max-width</code></a> (largeur du viewport) plutôt que <a href="https://developer.mozilla.org/fr/docs/Web/CSS/@media/device-width"><code>max-device-width</code></a> (largeur physique de l'écran) à dessein : ces modifications sont aussi intéressantes si l'on redimensionne la fenêtre d'un navigateur sur grand écran !<br>
Généralement c'est plutôt l'inverse... A ce sujet lire : <a href="http://www.hteumeuleu.fr/arreter-media-queries/">Faut arrêter avec les Media Queries ! – HTeuMeuLeu</a></p>



<?=writeHR()?>



<h2 id="separateurs">Séparateurs</h2>

<p>On va simplement afficher une partie des séparateurs si le viewport est moins
large que l'image :</p>

<pre><code class="css">
@media screen and (max-width: 645px)
{
	hr.sep
	{
	width: 98%;
	}
}
</code></pre>



<?=writeHR()?>



<h2>Images larges</h2>

<p>Plusieurs images sont assez larges et dépassent du viewport sur des écrans à
taille réduite !</p>

<p>Une solution serait d'utiliser l'attribut HTML 5 <code>srcset</code>, mais le
support est assez faible à ce jour (août 2014 : juste Chrome 34+ et Safari 8+ -
<a href="http://caniuse.com/#feat=srcset">lien CanIUse</a>) et ça nécessiterai de
créer de nouvelles images... Un avantage pour renvoyer des images plus légères,
mais les images concernées sont peu nombreuses, relativement peu lourdes et bien
cachées.</p>

<p>L'idée a donc été d'appliquer un <code>width</code> en % sur media query. Mais
comme chaque image a une taille différente, la mise en place est compliquée :
écriture d'un code quasi identique mais variant sur les dimensions de chaque image,
et éparpillement entre la balise IMG et le code CSS qu'il faut penser à écrire et
à éventuellement mettre à jour.</p>

<p>Pour y remédier j'ai écris un simple JavaScript chargé au démarrage, et qui va
modifier des images marquées dans la page :</p>

<ul>
	<li>Création d'un nouveau bloc <code>style</code> dans le <code>head</code></li>
	<li>Bascule des width et height des attributs HTML vers du CSS</li>
	<li>Ajout d'une règle positionnant <code>width: 98%;</code> sur <code>max-device-width</code></li>
</ul>

<p>Les images à modifier sont identifiées par un attribut <code>data-responsive-img</code>.<br>
Les attributs data-* sont un ajout de HTML 5. Pour en savoir plus :</p>

<ul>
	<li>Dans la recommandation W3C HTML 5 : <a href="http://www.w3.org/TR/html5/dom.html#embedding-custom-non-visible-data-with-the-data-*-attributes">3.2.5.9 Embedding custom non-visible data with the data-* attributes</a></li>
	<li>Chez Alsacreations : <a href="http://www.alsacreations.com/article/lire/1397-html5-attribut-data-dataset.html">Attributs data-* - Alsacreations</a></li>
</ul>

<p>Le script est lancé en onDomReady, en utilisant <a href="https://github.com/tubalmartin/ondomready">la librairie de tubalmartin</a>.<br>
Le code :</p>

<pre><code class="javascript">
function writeCSSRespImg()
{
	var elements = document.getElementsByTagName("img"),
		image,
		width,
		height,
		cssClassName,
		cssClasses,
		cssCode,
		style,
		maxWidth;
	for (i = 0; i <= elements.length - 1; i++) {
		image = elements[i];
		if (image.hasAttribute("data-responsive-img")) {
			// Récup width / height
			width = parseInt(image.getAttribute("width"));
			height = parseInt(image.getAttribute("height"));

			// Ajoute classe
			cssClassName = "responsive-img-" + i;
			cssClasses = image.className;
			if (cssClasses != "") {
				cssClasses += " ";
			} else {
				cssClasses = "";
			}
			cssClasses += cssClassName;
			image.className = cssClasses;

			// Ecriture du CSS
			cssCode = "";
			style = document.createElement("style");
			maxWidth = width + 5;
			cssCode = "\nimg." + cssClassName + "\n\
{\n\
width: " + width + "px;\n\
height: " + height + "px;\n\
}\n\
@media screen and (max-device-width: " + maxWidth + "px)\n\
{\n\
	img." + cssClassName + "\n\
	{\n\
	width: 98%;\n\
	height: auto;\n\
	}\n\
}\n";
			style.appendChild(document.createTextNode(cssCode));
			document.head.appendChild(style);

			// Suppression des attributs du tag img
			image.removeAttribute("width");
			image.removeAttribute("height");
		}
	}
}



onDomReady(writeCSSRespImg);
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