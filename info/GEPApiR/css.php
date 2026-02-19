<?php ob_start('ob_gzhandler');
$date_creation = "13/08/2014";
$date_maj = "19/02/2026";

// NAVIGATION
$RelBasePath = "../../";
$title = "CSS : mises en forme diverses - GepapiR - Informatique [GEPApiR]";

require_once($RelBasePath . 'communs/header1.inc.php');
require_once($RelBasePath . 'communs/highlight.inc.php');
require_once($RelBasePath . 'communs/toc/toc-js.inc.html');
require_once($RelBasePath . 'communs/header2.inc.php');
?>



<h1>
    <?
    require_once('../info_h1.inc');
    ?><br>
    Mises en forme diverses
</h1>


<?
require_once($RelBasePath . 'communs/toc/toc-html.inc.html');
?>



<?= writeHR() ?>



<h2>Introduction</h2>

<p>
    Lors de la dernière refonte de ce site en 2014, la question de la compatibilité navigateur se 
    posait encore de manière aigue avec la présence large d'Internet Explorer sur les postes de 
    travail...
</p>

<p>
    Aujourd'hui (février 2026), enfin (!!), les navigateurs répandus supportent bien les standards du web basique 
    qui sont utilisés sur ce site.
</p>



<?= writeHR() ?>



<h2>Titres H2 et H3</h2>

<p>Les titres H1 de ce site sont sous forme d'image. Les h2 ont longtemps été
    sous forme d'images également, comme ci-dessous :<br>
    <img src="<?= $RelBasePath ?>images/info/rub2_informatique.png" width="204" height="47" alt="Rubrique Informatique"></p>

<p class="callout" data-variant="warning">
    Du texte sous forme d'image évidemment, ça n'est pas idéal ni pour le visiteur, ni pour le référencement, ni
    pour les évolutions...
</p>
    
<p>J'ais donc remplacé ces images par du texte, mais mis en forme avec des <a href="http://dev.w3.org/csswg/css-fonts/#font-face-rule">Web Fonts</a> ! Le support est assez large (cf <a href="http://caniuse.com/#feat=fontface">CanIUse</a>).</p>
    
<p class="callout" data-variant="info">
    C'est une police de la librairie <a href="https://fonts.google.com/">Google Fonts</a>
    qui est utilisée : <a href="https://fonts.google.com/specimen/Satisfy">Satisfy</a>.<br>
    Cette collection est très vaste, les polices sont en général au format le plus
    approprié (Woff), les fichiers sont très légers, et Google propose un CDN !
</p>
    
<p class="callout" data-variant="warning">
    Le CDN de Google est évidemment un moyen pour eux de récupérer des données... Dans le cadre de ce site à très faible traffic je considère que c'est acceptable ?
</p> 



<?= writeHR() ?>



<h2>Mise en forme contenu</h2>

<h3>Raccourcis clavier</h3>

<p>La balise <code>kbd</code> est dédiée à celà !</p>

<p class="callout" data-variant="info">Plus d'informations sur cette balise : <a href="https://developer.mozilla.org/fr/docs/Web/HTML/Element/kbd">&lt;kbd> : l'élément de saisie au clavier - HTML | MDN</a></p>

<p>Exemple :</p>

<pre><code><?php echo htmlspecialchars(<<<HTML
<kbd>Ctrl</kbd> + <kbd>C</kbd>
HTML
); ?></code></pre>

<p>Qui va rendre ainsi : <kbd>Ctrl</kbd> + <kbd>C</kbd></p>

<h3>Citations</h3>

<p>Pour les citations j'ai utilisé naturellement la balise <code>blockquote</code> qui est prévue à cet effet, contenant un <code>p</code> et des balises <code>q</code><sup>[<a href="#fn1">1</a>]</sup> et <code>cite</code><sup>[<a href="#fn2">2</a>]</sup>.<br>
Du CSS va ajouter un effet de relief grace à <code>border-style: outset</code><sup>[<a href="#fn3">3</a>]</sup> et du <code>box-shadow</code><sup>[<a href="#fn4">4</a>]</sup>.<br>
Exemple de contenu :</p>

<blockquote>
    <p>
        <q>De deux choses Lune, l'autre, c'est le Soleil.</q>
        <br>
        <cite>Jacques Prevert</cite>
    </p>
</blockquote>

<p>Extrait de code CSS :</p>

<pre><code class="css">blockquote
{
    border: 1px outset white;
    border-left: 1px dashed black;
    border-radius: 0 5px 5px 0;
    background-color: #DDDDDD;
    opacity: 0.75;
    box-shadow: 1px 1px 8px rgba(0,0,0,0.5);
}
</code></pre>

<div class="callout" data-variant="info">Quelques références : 
    <ul>
        <li id="fn1"><a href="https://developer.mozilla.org/fr/docs/Web/HTML/Reference/Elements/q">&lt;q> : l'élément de citation en incise - HTML | MDN</a></li>
        <li id="fn2"><a href="https://developer.mozilla.org/fr/docs/Web/HTML/Reference/Elements/cite">&lt;cite> : l'élément de citation - HTML | MDN</a></li>
        <li id="fn3"><a href="https://developer.mozilla.org/fr/docs/Web/CSS/Reference/Properties/border-style">border-style - CSS | MDN</a></li>
        <li id="fn4"><a href="https://developer.mozilla.org/fr/docs/Web/CSS/Reference/Properties/box-shadow">box-shadow - CSS | MDN</a></li>
    </ul>
</div>


<h3>Callouts</h3>

<p>Les callouts ou alertes permettent d'avoir une étiquette de texte caractérisée par une icone et une couleur, pour représenter facilement une info, alerte, warning, tip, ...</p>

<p>On en retrouve dans plusieurs systèmes de documentation :</p>

<ul>
    <li>DokuWiki : <a href="https://www.dokuwiki.org/plugin:alertbox">plugin alertbox</a></li>
    <li>Markdown Obsidian : <a href="https://help.obsidian.md/Editing+and+formatting/Callouts">Callouts</a></li>
    <li>Markdown GitHub : <a href="https://docs.github.com/en/get-started/writing-on-github/getting-started-with-writing-and-formatting-on-github/basic-writing-and-formatting-syntax#alerts">Alerts</a></li>
    <li>Markdown GitLab : <a href="https://docs.gitlab.com/user/markdown/#alerts">Alerts</a></li>
</ul>

<p>J'ai donc rajouté un système similaire pour agrémenter mes pages ! J'ai très largement récupéré un contenu figurant <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/How_to/Use_data_attributes#examples">sur la page MDN pour l'attribut data.</a>. J'ai repris le principe d'avoir une seule classe pour la mise en forme par défaut, et un attribut data pour les variantes : ainsi on peut facilement avoir un sélecteur CSS ciblant les callout sans variante !</p>

<p>Et pour faciliter la définition des règles, j'ai utilisé des <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/Guides/Cascading_variables/Using_custom_properties">variables CSS</a>.<br>
Egalement le pseudo élément <code>:where</code> permet de gérer une surcharge de la mise en forme par défaut de certains blocs (<code>p</code>, <code>ul</code>, <code>li</code>)<br>
La mise en forme reprend le <code>border-style</code> et <code>box-shadow</code> utilisé sur les citations.<br>
Voir cet extrait de code :</p>

<pre><code class="css">
.callout:before {
  content: var(--callout-icon);
}
.callout {
  --callout-icon: "";
  --callout-bg: #222222;
  --callout-fg: #9e9e9e;
  
  background-color: var(--callout-bg);
  color: var(--callout-fg);
  
  border : 1px outset black;
  border-radius: 5px;
  box-shadow: 1px 1px 8px rgba(0,0,0,0.8);
}

.callout :where(ul, li) {
  background-color: transparent;
  color: inherit;
}
.callout :where(p, ul) {
  margin: 1rem;
}

.callout[data-variant="note"] {
  --callout-icon: "✏️";
  --callout-bg: #151e2c;
  --callout-fg: #157aff;
}

// ...
</code></pre>



<?= writeHR() ?>



<h2>Mise en forme des images</h2>


<h3>CSS Transform</h3>

<p>Quelques images profitent de nouvelles propriétés CSS : <a href="http://www.w3.org/TR/css3-background/#box-shadow">box-shadow</a> et <a href="http://www.w3.org/TR/css3-transforms/#funcdef-rotate">transform rotate</a>.<br>
    Exemple :</p>

<p><img src="<?= $RelBasePath ?>images/piR_tromb1.png" alt="piR concert trombone"
        class="pretty-img" style="transform: rotate(6deg);"
        id="piR_tromb1" height="370" width="200"></p>

<p>Avec ce code :</p>

<pre><code class="css">
img#piR_tromb1
{
border: 4px solid white;
border-radius: 5px;
box-shadow: 1px 1px 8px rgba(0,0,0,0.8);
transform: rotate(6deg);
}
</code></pre>


<h3>Problèmes de débordements</h3>

<p>A noter : sur la GepapiR les images concernées sont dans la rubrique <a href="<?= $RelBasePath ?>zicmue/">Musiques</a>
    et sont intégrées en float à côté de paragraphes de texte : celà pose problème car
    le texte et l'image se chevauchent... En effet la recommandation précise bien (dans
    le <a href="http://www.w3.org/TR/css3-transforms/#transform-rendering">chapitre 6</a>) :</p>

<blockquote>
    <p>For elements whose layout is governed by the CSS box model, the transform property does not affect the flow of the content surrounding the transformed element. However, the extent of the overflow area takes into account transformed elements. This behavior is similar to what happens when elements are offset via relative positioning. (...)</p>
    <p>For elements whose layout is governed by the CSS box model, any value other than none for the transform results in the creation of both a stacking context and a containing block.</p>
</blockquote>

<p>La solution pour contrer ce problème serait d'utiliser les <a href="http://www.w3.org/TR/css-shapes/">CSS Shapes</a>,
    mais au moment de l'ajout (août 2014) leur support était bien trop limité ! En conséquence, c'est
    simplement une marge qui est appliquée.</p>

<p>Plus de détails :</p>

<ul>
    <li><a href="css_transform-rotate.html">Une page</a> pour reproduire le problème</li>
    <li>Un article parlant des CSS Shapes : <a href="http://sarasoueidan.com/blog/css-shapes/">Creating Non-Rectangular Layouts With CSS Shapes</a></li>
</ul>



<?= writeHR() ?>



<h2>Coloration du code CSS/HTML/JS/...</h2>

<p>J'ai choisit d'utiliser <a href="https://highlightjs.org/">highlight.js</a>, en
    intégrant les dépendances <a href="https://highlightjs.org/download/#cdns">depuis le CDN officiel</a>.
    Cette librairie est populaire, et par ailleurs propose de nombreux thèmes - ici
    c'est sunburst qui est appliqué !</p>

<p>L'inconvénient de cette méthode est de nécessiter d'échapper le HTML en transformant
    les &lt; en <code>&amp;lt;</code>.<br>
    Sur ce sujet, voir ce billet intéressant qui conclut que l'insertion de HTML dans
    un textarea stylé en CSS est le plus souple : <a href="http://dadinck.x10.mx/code_example.html">How to code sample code</a>.
    Ca n'est pas une solution applicable simplement avec highlight.js.</p>

<p>Pour ma part, vu que le site utilise déjà PHP, j'ai simplement utilisé la fonction <a href="https://www.php.net/manual/en/function.htmlspecialchars.php">htmlspecialchars</a> couplée à <a href="https://www.php.net/manual/en/language.types.string.php#language.types.string.syntax.nowdoc">la syntaxe de chaine NowDoc</a> :</p>

<pre><code class="php"><?php echo htmlspecialchars(<<<'PHP'
<?php
echo htmlspecialchars(<<<'HTML'
//...
HTML
);
?>
PHP
);?></code></pre>

<p>Attention, comme <a href="https://www.php.net/manual/en/language.types.string.php">le dit la documentation PHP</a> pour rester compatible avec d'anciennes versions de PHP il faut être attentif à la syntaxe :</p>

<blockquote>
<p>Prior to PHP 7.3.0, it is very important to note that the line with the closing identifier must contain no other characters, except a semicolon (;)</p>
</blockquote>



<?= writeHR() ?>



<h2>Notes de pied de page (footnotes)</h2>

<p>Adopté la bonne méthode définie dans ce document du W3C : <a href="http://www.w3.org/TR/html5/common-idioms.html#footnotes">4.12 Common idioms without dedicated elements — HTML5</a></p>



<?= writeHR() ?>



<?
require_once($RelBasePath . 'communs/dates-maj-footer.inc.php');
?>



<hr class="sep sepfin">



</body>
</html>
<?php ob_end_flush(); ?>
