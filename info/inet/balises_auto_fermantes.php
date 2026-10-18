<?php ob_start('ob_gzhandler');
$date_creation = "26/09/2006";
$date_maj = "17/10/2026";

// NAVIGATION
$RelBasePath = "../../";
$title = "HTML 5 : &lt;br&gt; ou &lt;br/&gt; ? - Internet - Informatique [GEPApiR]";

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
HTML5 : <code>&lt;br&gt;</code> ou <code>&lt;br/&gt;</code> ?
</h1>



<?
require_once($RelBasePath . 'communs/dates.inc.php');
?>



<?
require_once($RelBasePath . 'communs/toc/toc-html.inc.html');
?>



<?=writeHR()?>



<h2>Introduction</h2>

<p>✅ <code>&lt;br/></code><br>
Plusieurs fois ces derniers temps j'ai rencontré des développeurs qui considéraient que en HTML 5 il est obligatoire d'ajouter un slash final sur les balises sans contenu  (balises auto-fermantes).</p>

<p>🚫 <code>&lt;br></code><br>
Moi qui ait connu les égarements du W3C avec XHTML (et donc entre autre joyeusetés l'obligation de ces slash final de partout), et en réaction l'apparition de HTML 5 au sein du WhatWG puis son adoption fulgurante par l'industrie et enfin sa reprise par le W3C et la disparition de XHTML, j'étais persuadé du contraire...</p>

<p>🤔❓<br>
Alors, en HTML 5 on ferme toutes les balises ou pas ?</p>

<p><i>Vous allez voir, la réponse n'est pas si simple, et vous risquez d'apprendre des choses intéressantes !</i></p>



<?=writeHR()?>



<h2>Validateur W3C</h2>

<div class="callout" data-variant="info">
	<p>Le W3C est le consortium international responsable de la standardisation du web.<br>
	Il fournit un outil de validation du HTML disponible sur <a href="https://validator.w3.org/">https://validator.w3.org/</a>.</p>
	<p>On en apprend plus sur <a href="https://validator.w3.org/docs/about.html">la page "about"</a> de l'outil :</p>
	<blockquote cite="https://validator.w3.org/docs/about.html" lang="en">
		<p>Most Web documents are written using markup languages, such as HTML or XHTML. These languages are defined by technical specifications, which usually include a machine-readable formal grammar (and vocabulary). The act of checking a document against these constraints is called validation, and this is what the Markup Validator does.</p>
	</blockquote>
</div>

<h3 id="validator_void">Exemple HTML 5 avec balises non fermées</h3>

<p>Le code suivant (présent dans <a href="balises_auto_fermantes.ex1.html">cette page</a>) :</p>

<pre class="html"><code class="html"><?php
echo htmlspecialchars(<<<HTML
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Formulaire simple</title>
</head>
<body>
    <h1>Formulaire simple</h1>
    <p>Et j'ajoute un paragraphe<br>Avec un saut de ligne !</p>
    <form>
        <label for="nom">Votre nom</label>
        <input type="text" id="nom" name="nom" placeholder="Entrez votre nom">
        <button type="submit">Envoyer</button>
    </form>
</body>
</html>
HTML
);?></code></pre>

<p>Contient :</p>

<ul>
	<li>une balise <code>&lt;br&gt;</code> non fermée</li>
	<li>une balise <code>&lt;input&gt;</code> non fermée</li>
</ul>

<p><strong>✅ La page est <a href="https://validator.w3.org/nu/?doc=http%3A%2F%2Fpgoiffon.free.fr%2Finfo%2Finet%2Fbalises_auto_fermantes.ex1.html">confirmée valide par l'outil du W3C</a></strong>.</p>


<h3 id="validator_closed">Et avec balises fermées</h3>

<p>Si l'on ferme les 2 balises avec <code>&lt;br/></code> et <code>&lt;input/></code>, on obtient le code de <a href="balises_auto_fermantes.ex2.html">cette page</a></p>

<p><strong>✅ La page est <a href="https://validator.w3.org/nu/?doc=http%3A%2F%2Fpgoiffon.free.fr%2Finfo%2Finet%2Fbalises_auto_fermantes.ex2.html">également déclarée valide</a></strong></p>

<div class="callout" data-variant="warning">
	<p>Attention cependant le validateur affiche le même message d'information pour chacune des 2 balises (pas des erreurs ni des avertissements mais bien des informations).</p>
	<p>Le message renvoit vers ce document : <a href="https://github.com/validator/validator/wiki/Markup-%C2%BB-Void-elements#trailing-slashes-directly-preceded-by-unquoted-attribute-values">Markup » Void elements · validator/validator Wiki</a><br>
	En résumé : le slash final peut poser problème s'il est accolé à une valeur d'attribut non entre guillemets, comme avec <code>&lt;input type=text value=abc/&gt;</code>.</p>
</div>


<h3>Conclusion</h3>

<p>✨<strong>Dans les 2 cas le code HTML est validé</strong>, que ce soit sans slash final ou avec. Cependant, lorsqu'il est présent le validateur indique un potentiel problème, mais qui parait facile à éviter...</p>



<?=writeHR()?>



<h2>Specifications W3C</h2>

<div class="callout" data-variant="warning">
	<p>Dans la page d'aide du validateur, on retrouve la question <a href="https://validator.w3.org/docs/help.html#validandconform">Is validity the same thing as conformance?</a></p>
	<blockquote cite="https://validator.w3.org/docs/help.html#validandconform" lang="en">
		<p>Markup languages are defined in technical specifications, which generally include a formal grammar. A document is valid when it is correctly written in accordance to the formal grammar, whereas conformance relates to the specification itself. The two might be equivalent, but in most cases, some conformance requirements cannot be expressed in the grammar, making validity only a part of the conformance.</p>
	</blockquote>
	<p>➡️ Bref, le validateur c'est une chose, mais il faut aussi aller fouiller les spécifications ! Allons y !</p>
</div>


<hr>


<h3>HTML 4</h3>

<p>HTML est basé sur SGML, cf <a href="https://www.w3.org/TR/html401/">spec HTML 4</a> :</p>

<blockquote>
	HTML 4 is an SGML application conforming to International Standard ISO 8879
</blockquote>

<p>Le fait de ne pas avoir de tag auto-fermant est indiqué dans la page <a href="https://www.w3.org/TR/html401/intro/sgmltut.html#h-3.2.1">https://www.w3.org/TR/html401/intro/sgmltut.html#h-3.2.1</a> :</p>

<blockquote>
	Some HTML element types allow authors to omit end tags (e.g., the P and LI element types). A few element types also allow the start tags to be omitted; for example, HEAD and BODY. The HTML DTD indicates for each element type whether the start tag and end tag are required.
</blockquote>

<p class="callout" data-variant="info">Et sur la <a href="https://www.w3.org/TR/html401/index/elements.html">liste des éléments HTML 4</a> on retrouve la catégorie "Empty"</p>

<h4>Fin de HTML 4</h4>

<div class="callout" data-variant="warning">
	<p>Le développement de HTML 4 est arrêté depuis 2018, cf section "history" du standard :</p>
	<ul>
		<li><a href="https://www.w3.org/standards/history/html40/">HTML 4.0 Recommendation publication history | Standards | W3C</a></li>
		<li><a href="https://www.w3.org/standards/history/html401/">HTML 4.01 Specification publication history | Standards | W3C</a></li>
	</ul>
</div>


<hr>


<h3>XHTML</h3>

<h4>Nature XML</h4>

<p>XHTML est basé sur XML comme l'indique <a href="https://www.w3.org/TR/xhtml1/">la première spécification (version 1.0)</a> :</p>

<blockquote>
	XHTML 1.0, a reformulation of HTML 4 as an XML 1.0 application
</blockquote>

<h4>Balises fermantes / auto-fermantes obligatoires</h4>

<p>L'obligation de fermer toutes les balises est indiquée <a href="https://www.w3.org/TR/xhtml1/#h-4.3">dans le chapitre de différences avec HTML 4</a> :</p>

<blockquote>
	In SGML-based HTML 4 certain elements were permitted to omit the end tag; with the elements that followed implying closure. XML does not allow end tags to be omitted. All elements other than those declared in the DTD as EMPTY must have an end tag. Elements that are declared in the DTD as EMPTY can have an end tag or can use empty element shorthand (see Empty Elements).
</blockquote>

<p>Le chapitre <a href="https://www.w3.org/TR/xhtml1/#h-4.6">Empty Elements</a> spécifie :</p>

<blockquote>
	Empty elements must either have an end tag or the start tag must end with />. For instance, &lt;br /&gt; or &lt;hr&gt;&lt;/hr&gt;.
</blockquote>

<h4>Fin de XHTML</h4>

<div class="callout" data-variant="warning">
	<p>Le W3C a annoncé en 2007 fermer son groupe de travail XHTML 2, comme on peut le voir <a href="https://www.w3.org/2009/06/xhtml-faq.html">dans la FAQ</a> :</p>
	<blockquote>
		While we recognize the value of the XHTML 2 Working Group's contributions over the years, after discussion with the participants, W3C management has decided to allow the Working Group's charter to expire at the end of 2009 and not to renew it.
	</blockquote>
	<p>Le dernier document du groupe de travail (<a href="https://www.w3.org/TR/2010/NOTE-xhtml2-20101216/">XHTML™ 2.0</a> en décembre 2010) contient dans son introduction :</p>
	<blockquote>
		<p>The XHTML2 Working Group's charter expired before it could complete work on this document. It is possible that the work will be continued by another group in the future</p>
	</blockquote>
	<p>Les 3 spécifications ont été passées en statut "retired" :</p>
	<ul>
		<li>2010 : <a href="https://www.w3.org/standards/history/xhtml2/">XHTML™ 2.0 publication history | Standards | W3C</a></li>
		<li>2018 : <a href="https://www.w3.org/standards/history/xhtml11/">XHTML™ 1.1 - Module-based XHTML - Second Edition publication history | Standards | W3C</a></li>
		<li>2018 : <a href="https://www.w3.org/standards/history/xhtml1/">XHTML™ 1.0 The Extensible HyperText Markup Language (Second Edition) publication history | Standards | W3C</a></li>
	</ul>
</div>


<hr>


<h3 id="html5">HTML 5</h3>

<h4>HTML 5 : du SGML ou du XHTML ?</h4>

<p>HTML 5 n'est plus basé sur SGML, et n'est pas non plus du XML ! Cf le document du W3C <a href="https://www.w3.org/TR/html5-diff/#syntax">HTML5 Differences from HTML4, chapitre "Syntax"</a> :</p>
	
<blockquote>
	HTML defines a syntax, referred to as "the HTML syntax", that is mostly compatible with HTML4 and XHTML1 documents published on the Web, but is not compatible with the more esoteric SGML features of HTML4, such as processing instructions and shorthand markup as these are not supported by most user agents. Documents using the HTML syntax are served with the text/html media type.
</blockquote>

<p>Et un peu loin dans <a href="https://www.w3.org/TR/html5-diff/#doctype">le même document, chapitre "The Doctype"</a> :</p>
	
<blockquote>
	Doctypes from earlier versions of HTML were longer because the HTML language was SGML-based and therefore required a reference to a DTD. This is no longer the case
</blockquote>

<p class="callout" data-variant="note">Notez que l'ensemble de ce document ne contient <strong>aucune référence ni à SGML ni à XML</strong> !</p>


<h4>Information du validateur W3C</h4>

<p>Dans notre essai de validation d'une page HTML 5 avec balise fermées <a href="#validator_closed">tout à l'heure</a>, le validateur nous renvoyait vers la page <a href="https://github.com/validator/validator/wiki/Markup-%C2%BB-Void-elements#trailing-slashes-directly-preceded-by-unquoted-attribute-values">Markup » Void elements · validator/validator Wiki</a>.</p>

<p>Cette page donne les références <a href="https://html.spec.whatwg.org/multipage/syntax.html#void-elements">vers la spec HTML 5 du WhatWG, liste "Void elements"</a> qui indique :</p>

<blockquote>
	<p><strong>Void elements :</strong> area, base, br, col, embed, hr, img, input, link, meta, source, track, wbr</p>
	<p>...</p>
	<p>Void elements only have a start tag; end tags must not be specified for void elements.</p>
	<p>...</p>
	<p>Void elements can't have any contents (since there's no end tag, no content can be put between the start tag and the end tag).</p>
</blockquote>

<h4>Void elements</h4>

<p>Juste en-dessous, dans le paragraphe <a href="https://html.spec.whatwg.org/multipage/syntax.html#start-tags">Start tags</a> on retrouve un texte décisif : le cas du void element avec / final est traité ici dans le point 6.</p>

<blockquote>
	Then, if the element is one of the void elements, or if the element is a foreign element, then there may be a single U+002F SOLIDUS character (/), which on foreign elements marks the start tag as self-closing. On void elements, it does not mark the start tag as self-closing but instead <strong>is unnecessary and has no effect of any kind</strong>. For such void elements, it should be used only with caution — especially since, if directly preceded by an unquoted attribute value, it becomes part of the attribute value rather than being discarded by the parser.
</blockquote>

<p class="callout" data-variant="note">En HTML 4 la spécification ne parle pas de "Void Elements" mais de "Empty Elements" (notion SGML).</p>


<h4>HTML 5, c'est du passé ?</h4>

<p class="callout" data-variant="warning">HTML 5 n'est plus développé (statut "retired") depuis 2018 : <a href="https://www.w3.org/standards/history/html5/">HTML5 publication history | Standards | W3C</a></p>


<hr>


<h3>HTML aujourd'hui ?</h3>

<div class="callout" data-variant="info">
	<p>Alors que le développement de HTML 4, XHTML et HTML 5 sont arrêtés, les travaux sur les évolutions de HTML se poursuivent cependant !<br>
	Mais sous le nom de "<strong>Living Standard</strong>".</p>
	
	<p>Voir :</p>
	
	<ul>
		<li>L'annonce officielle datée de... 2011 : <a href="https://blog.whatwg.org/html-is-the-new-html5">The WHATWG Blog — HTML is the new HTML5</a></li>
		<li>Billet du W3C de 2019 précisant la répartition du travail entre W3C et WhatWG : <a href="https://www.w3.org/blog/2019/w3c-and-whatwg-to-work-together-to-advance-the-open-web-platform/">W3C and WHATWG to work together to advance the open Web platform | 2019 | Blog | W3C</a></li>
		<li>Section "history" du Living Standard : <a href="https://html.spec.whatwg.org/multipage/introduction.html#history-2">HTML Standard</a></li>
		<li><a href="https://whatwg.org/faq">FAQ — WHATWG</a></li>
	</ul>
</div>



<?=writeHR()?>



<h2>React JSX</h2>

<p>Une source de confusion provient probablement du langage JSX que l'on utilise dans la librairie JavaScript React. Dans ce langage, toute balise doit être fermée ! C'est annoncé directement dans la <a href="https://react.dev/learn/writing-markup-with-jsx#2-close-all-the-tags">documentation officielle</a> :</p>

<blockquote>
	JSX requires tags to be explicitly closed: self-closing tags like &lt;img> must become &lt;img />, and wrapping tags like &lt;li>oranges must be written as &lt;li>oranges&lt;/li>.
</blockquote>

<p>Mais JSX n'est pas du HTML ni du XHTML, ni du XML ! A voir dans <a href="https://react.github.io/jsx/">le document de référence</a> :</p>

<blockquote>
	<p>JSX is an XML-like syntax extension to ECMAScript without any defined semantics.</p>
	<p>...</p>
	<p>This specification does not attempt to comply with any XML or HTML specification. JSX is designed as an ECMAScript feature and the similarity to XML is only for familiarity.</p>
</blockquote>



<?=writeHR()?>



<h2>Synthèse</h2>

<p>En résumé :</p>

<ul>
	<li><strong>HTML 4</strong> : 🚫 slash final <strong>interdit</strong> !</li>
	<li><strong>XHTML</strong> : ✅ slash final <strong>obligatoire</strong> !</li>
	<li><strong>HTML 5</strong> : 🛑 le slash final n'aura <strong>aucune utilité</strong> et peut poser problème avec les valeurs d'attributs non entourées de guillemets</li>
	<li><strong>React JSX</strong> : ✅ slash final <strong>obligatoire</strong> !</li>
</ul>



<?=writeHR()?>



<?
require_once($RelBasePath . 'communs/footer.inc.php');
?>



<hr class="sep sepfin">



</body>
</html>
<?php ob_end_flush(); ?>
