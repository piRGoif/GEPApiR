<?php ob_start('ob_gzhandler');
$date_creation = "15/07/2007";
$date_maj = "12/10/2014";

// NAVIGATION
$RelBasePath = "../../";
$title = "Développement Notes / Domino et doctype HTML - Internet - Informatique [GEPApiR]";

require_once($RelBasePath . 'communs/header1.inc');
require_once($RelBasePath . 'communs/toc/toc-js.inc');
require_once($RelBasePath . 'communs/highlight.inc');
require_once($RelBasePath . 'communs/header2.inc');
?>



<h1>
    <?
    require_once('../info_h1.inc');
    ?>
    <br>
    Développement Notes / Domino et Doctype <abbr title="Hypertext Markup Language">HTML</abbr></h1>


<?
require_once($RelBasePath . 'communs/toc/toc-html.inc');
?>



<?= writeHR() ?>



<h2>Introduction</h2>

<p>En conception Web, lorsque l'on sépare fond et forme et que l'on use massivement des CSS, on se retrouve très rapidement confronté au mode de rendu (voir à ce sujet le document de référence<sup>[<a href="#fn1">1</a>]</sup>). Ce document a pour but d'indiquer comment être maitre du doctype renvoyé par une application Lotus Notes/Domino.</p>

<p>Des pages Web d'une telle application sont générées principallement par 3 types d'éléments de structure :</p>

<ul>
    <li>Agents</li>
    <li>Vues</li>
    <li>Formulaires</li>
</ul>

<p>Il est possible de personnaliser le HTML renvoyé par une vue<sup>[<a href="#fn2">2</a>]</sup> en utilisant un Formulaire nommé de manière particulière, aussi nous traitrons ensemble Vues et Formulaires. A noter que le système de $$viewtemplate fonctionne aussi pour les Navigateurs.</p>



<?= writeHR() ?>



<h2>Agents</h2>

<p>Le texte renvoyé par un agent avant la balise &lt;html&gt; sera traité comme des entêtes HTTP. Renvoyer un doctype ne pose cependant pas de problème.</p>

<p>Exemple :</p>

<pre><code class="html">
Print |Content-Type: text/html; charset=UTF-8<br>
<br>
&lt;!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"<br>
            "http://www.w3.org/TR/html4/strict.dtd"><br>
<br>
&lt;html lang="fr"><br>
<br>
&lt;head><br>
|
</code></pre>



<?= writeHR() ?>



<h2>Vues et Formulaires</h2>

<p>Malheureusement, aucun mécanisme n'existe avant Domino... R6.5.3 ! Incroyable mais vrai... Voici donc les solutions qui se présentent au concepteur :</p>


<h3>Domino < R6</h3>

<p>Comme dis ci-dessus, pas d'alternatives sinon appeler "Joe la débrouille".</p>

<p>
    Un exemple de manipulation était proposé sur le très bon blog DarkBlog, mais malheureusement
    ce site est maintenant hors ligne et visiblement aucun mirroir n'a été créé... 
    On retrouve cependant une sauvegarde sur archive.org : <a href="https://web.archive.org/web/20071214042113/http://darkmag.net/darkBlog/index.php?2004/01/06/4-generation-de-pages-web-lotus-notes-conformes-aux-standards-du-w3c">Génération de pages web Lotus Notes conformes aux standards du W3C - darkBlog</a> !<br>
    Attention : comme spécifié en commentaire, cette astuce ne fonctionne plus à partir de Domino 6.5 !<br>
    Pour mémoire l'URL de l'article original : http://darkmag.net/darkBlog/index.php?2004/01/06/4-generation-de-pages-web-lotus-notes-conformes-aux-standards-du-w3c.
<p>


<h3>Domino R6 >= 6.0.5 ou R6.5 >= 6.5.3</h3>

<p>Domino R6 renvoit un doctype HTML 4.01 transitionnal sans URL. A partir de la version 6.0.5 et 6.5.3 (voir les documents officiels IBM<sup>[<a href="#fn3">3</a>]</sup>) il existe une variable notes.ini <em>DominoCompleteDoctype</em> qui peut prendre plusieurs valeurs :</p>

<blockquote>
    0 (default) (existing behavior) = &lt;!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><br>
    <br>
    1 = &lt;!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" " http://www.w3.org/TR/html4/loose.dtd "><br>
    <br>
    2 = &lt;!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" " http://www.w3.org/TR/html4/strict.dtd "><br>
</blockquote>

<p>Le choix est mince (pas de Doctype HTML Strict avec URL) et s'applique évidemment à l'ensemble du serveur...</p>


<h3>Domino R7 >= 7.0.2</h3>

<p>A partir de la version 7.0.2 de Notes/Domino, un champ spécial $$HTMLFrontMatter peut être utilisé dans les formulaires. La valeur de ce champ sera renvoyée comme le doctype, comme indiqué dans les release notes du produit :</p>

<blockquote>
    <strong>Custom &lt;!DOCTYPE> declaration</strong><br>
    Users can now specify a custom <!DOCTYPE> declaration on a per form basis. When the field $$HTMLFrontMatter is present on a form, its contents will be placed in the generated HTML, ahead of the &lt;html> tag, and the web server will not generate anything there automatically.
</blockquote>



<?= writeHR() ?>



<h2>Références</h2>

<ul>
    <li id="fn1">[1] <a href="http://www.hut.fi/u/hsivonen/doctype.html">Activating the Right Layout Mode Using the Doctype Declaration</a></li>
    <li id="fn2">[2] IBM Developer Works : <a href="http://www.ibm.com/developerworks/lotus/library/ls-Combining_forms_and_views_Part1/index.html">Combining forms and views for friendlier Web applications (Part 1)</a></li>
    <li id="fn3">[3] Documents officiels versions Notes/Domino : <a href="http://www-128.ibm.com/developerworks/lotus/documentation/releasenotes/">Notes/Domino release notes</a>, <a href="http://www-1.ibm.com/support/docview.wss?uid=sim4b6f4dd65503b574d85256f5000528659">SPR #DHAN5VTPBX Product - Server</a>, <a href="http://www-1.ibm.com/support/docview.wss?uid=swg21246796">What's new in Notes/Domino 7.0.2</a></li>
</ul>



<?= writeHR() ?>



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