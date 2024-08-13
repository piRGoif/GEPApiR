<?php ob_start('ob_gzhandler');
$date_creation = "13/08/2014";
$date_maj = "12/10/2014";

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
    Qu'assurer comme compatibilité navigateur ? Vaste question...
</p>

<p>
    La compatibilité c'est avant tout la version de IE minimale supportée ! Sur ce
    site, j'ai décidé d'être compatible avec IE 8+. En effet, la plus ancienne version
    de Microsoft Windows encore maintenue à ce jour (octobre 2014) est Windows Vista,
    qui était  livré avec IE7, mais cet OS est assez peu répandu, et la version suivante
    était livrée avec IE 8.<br>
    A noter ce billet de blog de août 2014 annonçant les futures échéances de support
    pour les différentes versions : <a href="http://blogs.msdn.com/b/ie/archive/2014/08/07/stay-up-to-date-with-internet-explorer.aspx">Stay up-to-date with Internet Explorer - IEBlog - Site Home - MSDN Blogs</a>.
</p>



<?= writeHR() ?>



<h2>Titres H2 et H3</h2>

<p>Les titres H1 de ce site sont sous forme d'image. Les h2 ont longtemps été
    sous forme d'images également, comme ci-dessous :<br>
    <img src="<?= $RelBasePath ?>images/info/rub2_informatique.png" width="204" height="47"></p>

<p>Evidemment, ça n'était pas idéal ni pour le visiteur, ni pour le référencement, ni
    pour les évolutions...<br>
    J'ais donc remplacé ces images par du texte, mais mis en forme avec des <a href="http://dev.w3.org/csswg/css-fonts/#font-face-rule">Web Fonts</a> ! Le support est assez large (cf <a href="http://caniuse.com/#feat=fontface">CanIUse</a>).
    C'est une police de la librairie <a href="https://www.google.com/fonts">Google Fonts</a>
    qui est utilisée : <a href="https://www.google.com/fonts/specimen/Satisfy">Satisfy</a>.
    Cette collection est très vaste, les polices sont en général au format le plus
    approprié (Woff), les fichiers sont très légers, et Google propose un CDN !</p>



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
    mais leur support est encore (août 2014) bien trop limité ! En conséquence, c'est
    simplement une marge qui est appliquée !</p>

<p>Plus de détails :</p>

<ul>
    <li><a href="<?= $RelBasePath ?>_temp/transform-rotate.html">Une page</a> pour reproduire le problème</li>
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

<p>A noter cette solution PHP utilisée sur OpenClassRoom et qui est assez élégante : <a href="http://fr.openclassrooms.com/informatique/cours/geshi-colorer-son-code">[GeSHi] Colorer son code</a>.
    Conjuguée avec <a href="http://php.net/manual/fr/language.types.string.php#language.types.string.syntax.heredoc">les chaines PHP au format Heredoc</a>,
    plus besoin d'échappement du HTML !<br>
    Ca m'a paru cependant un peu lourd...</p>



<?= writeHR() ?>



<h2>Notes de pied de page (footnotes)</h2>

<p>Adopté la bonne méthode définie dans ce document du W3C : <a href="http://www.w3.org/TR/html5/common-idioms.html#footnotes">4.12 Common idioms without dedicated elements — HTML5</a></p>



<?= writeHR() ?>



<?
require_once($RelBasePath . 'communs/dates-maj-footer.inc.php');
?>



<hr class="sep sepfin">



<?
require_once($RelBasePath . 'communs/menu.inc.php');
?>



</body>
</html>

