<?php ob_start('ob_gzhandler');
$date_creation = "26/09/2006";
$date_maj = "26/09/2026";

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
HTML5 : <code>&lt;br&gt;</code> ou <code>&lt;br/&gt;</code> ?</h1>
</h1>



<?
require_once($RelBasePath . 'communs/dates.inc.php');
?>



<?
require_once($RelBasePath . 'communs/toc/toc-html.inc.html');
?>



<?=writeHR()?>



<h2>Introduction</h2>

<p>Plusieurs fois ces derniers temps j'ai rencontré des développeurs qui considéraient qu'il fallait absolument fermer les balises auto-fermantes en HTML5. Moi qui ait connu l'oarrivée de XHTML, j'étais persuadé du contraire...</p>

<p>Alors, on ferme toutes les balises ou pas ?</p>



<?=writeHR()?>



<h2>Validateur W3C</h2>

<h3>Balises non fermées</h3>

<p>Le code suivant (présent dans <a href="balises_auto_fermantes.ex1.html">cette page</a>) :</p>

<pre class="html"><code class="html"><?php
echo htmlspecialchars(<<<'HTML'
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

<p>La page est <a href="https://validator.w3.org/nu/?doc=https%3A%2F%2Fpgoiffon.free.fr%2FGEPApiR%2Finfo%2Finet%2Fbalises_auto_fermantes.ex1.html">confirmée valide par l'outil du W3C</a>.</p>


<h3>Balises fermées</h3>

<p>Si l'on ferme les 2 balises (cad le code de <a href="balises_auto_fermantes.ex2.html">cette page</a>) : les 2 mêmes info sont affichées (pas des erreurs ni des avertissements mais bien des informations).<br>
Le message renvoit vers ce document : <a href="https://github.com/validator/validator/wiki/Markup-%C2%BB-Void-elements#trailing-slashes-directly-preceded-by-unquoted-attribute-values">Markup » Void elements · validator/validator Wiki</a></p>



<?=writeHR()?>



<h2>Specifications W3C</h2>

<h3>HTML 4</h3>

<p>HTML est basé sur SGML et non XML, cf <a href="https://www.w3.org/TR/html401/">spec HTML 4</a> :</p>

<blockquote>
	HTML 4 is an SGML application conforming to International Standard ISO 8879
</blockquote>

<p>Le fait de ne pas avoir de tag ou auto-fermant fermant est indiqué ici <a href="https://www.w3.org/TR/html401/intro/sgmltut.html#h-3.2.1">https://www.w3.org/TR/html401/intro/sgmltut.html#h-3.2.1</a> :</p>

<blockquote>
	Some HTML element types allow authors to omit end tags (e.g., the P and LI element types). A few element types also allow the start tags to be omitted; for example, HEAD and BODY. The HTML DTD indicates for each element type whether the start tag and end tag are required.
</blockquote>


<h3>XHTML</h3>

<p>XHTML est basé sur XML</p>


<h3 id="html5">HTML 5</h3>

<p class="callout" data-variant="note">Les specs du HTML 5 ne sont plus hébergées par le W3C, cf <a href="https://www.w3.org/news/2019/w3c-and-the-whatwg-have-just-signed-an-agreement-to-collaborate-on-the-development-of-a-single-version-of-the-html-and-dom-specifications/">W3C and the WHATWG signed an agreement to collaborate on a single version of HTML and DOM | 2019 | News | W3C</a></p>

<p>HTML 5 n'est plus basé sur SGML, et n'est pas non plus du XML ! Cf <a href="https://www.w3.org/TR/html5-diff/#syntax">https://www.w3.org/TR/html5-diff/#syntax</a> :</p>
	
<blockquote>
	HTML defines a syntax, referred to as "the HTML syntax", that is mostly compatible with HTML4 and XHTML1 documents published on the Web, but is not compatible with the more esoteric SGML features of HTML4, such as processing instructions and shorthand markup as these are not supported by most user agents. Documents using the HTML syntax are served with the text/html media type.
</blockquote>

<p>Et un peu plus dans <a href="https://www.w3.org/TR/html5-diff/#doctype">https://www.w3.org/TR/html5-diff/#doctype</a> :</p>
	
<blockquote>
	Doctypes from earlier versions of HTML were longer because the HTML language was SGML-based and therefore required a reference to a DTD. This is no longer the case
</blockquote>

<p class="callout" data-variant="info">Cette page ne contient aucune référence ni à SGML ni à XML !</p>

<p>La page pointée par le validateur donne les références <a href="https://html.spec.whatwg.org/multipage/syntax.html#void-elements">vers la spec HTML 5 du WhatWG</a>, qui indique :</p>

<blockquote>
	<p><strong>Void elements :</strong> area, base, br, col, embed, hr, img, input, link, meta, source, track, wbr</p>
	<p>...</p>
	<p>Void elements only have a start tag; end tags must not be specified for void elements.</p>
	<p>...</p>
	<p>Void elements can't have any contents (since there's no end tag, no content can be put between the start tag and the end tag).</p>
</blockquote>

<p>Et la partie décisive dans le paragraphe <a href="https://html.spec.whatwg.org/multipage/syntax.html#start-tags">Start tags</a> :</p>

<blockquote>
	Then, if the element is one of the void elements, or if the element is a foreign element, then there may be a single U+002F SOLIDUS character (/), which on foreign elements marks the start tag as self-closing. On void elements, it does not mark the start tag as self-closing but instead is unnecessary and has no effect of any kind. For such void elements, it should be used only with caution — especially since, if directly preceded by an unquoted attribute value, it becomes part of the attribute value rather than being discarded by the parser.
</blockquote>

<p>La notion de void element est également définie dans la spécification HTML 5 <a href="https://html.spec.whatwg.org/multipage/syntax.html#elements-2">https://html.spec.whatwg.org/multipage/syntax.html#elements-2</a>.<br>
Le cas du void element avec / final est traité ici dans le point 6 <a href="https://html.spec.whatwg.org/multipage/syntax.html#start-tags">https://html.spec.whatwg.org/multipage/syntax.html#start-tags</a> :
</p>

<blockquote>
	Then, if the element is one of the void elements, or if the element is a foreign element, then there may be a single U+002F SOLIDUS character (/), which on foreign elements marks the start tag as self-closing. On void elements, it does not mark the start tag as self-closing but instead is unnecessary and has no effect of any kind. For such void elements, it should be used only with caution — especially since, if directly preceded by an unquoted attribute value, it becomes part of the attribute value rather than being discarded by the parser.
</blockquote>



<?=writeHR()?>



<h2>Conclusions</h2>

<ul>
	<li><strong>HTML 4</strong> : 🚫 pas de slash final !</li>
	<li><strong>XHTML</strong> : ✅ slash final obligatoire !</li>
	<li><strong>HTML 5</strong> : ⚠️ le slash final n'est pas requis, mais peut être ajouté (sous peine de générer des prb avec le dernier attribut)</li>
</ul>



<?=writeHR()?>



<?
require_once($RelBasePath . 'communs/footer.inc.php');
?>



<hr class="sep sepfin">



</body>
</html>
<?php ob_end_flush(); ?>
