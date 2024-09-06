<?php
ob_start('ob_gzhandler');
$date_creation = "19/07/2005";
$date_maj = "16/10/2014";

// NAVIGATION
$RelBasePath = "../../";
$title = "HTML ou XHTML ? - Internet - Informatique [GEPApiR]";

require_once($RelBasePath . 'communs/header1.inc.php');
require_once($RelBasePath . 'communs/toc/toc-js.inc.html');
require_once($RelBasePath . 'communs/header2.inc.php');
?>



<h1>
    <?
    require_once('../info_h1.inc');
    ?>
    <br>
    <abbr title="HyperText Markup Language">HTML</abbr> ou <abbr title="eXtensible HyperText Markup Language">XHTML</abbr>&nbsp;?</h1>

<p>Ce document a été écrit au cours de l'année 2005, alors que beaucoup de concepteurs
    fonçaient tête baissée vers XHTML, en oubliant un peu vite à mon goût le HTML Strict.
    Il m'avait paru important de souligner les avantages mais aussi les inconvénients
    de cette bascule vers XHTML... Car ça n'est pas anodin ! Je me suis donc lancé
    dans la rédaction de ce document avec la volonté de construire une synthèse claire
    et complète !</p>

<p>Depuis bien sûr, le paysage a bien évolué ! Le HTML 5 qui était alors défendu par
    le <a href="http://whatwg.org/">WhatWG</a> a été intégré dans les technologies du
    W3C, les navigateurs ont commencé à bien l'implémenter... La question ne se pose donc
    plus du tout de la même manière bien sûr ! Cependant, il reste utile de connaitre
    ces quelques subtilités.</p>



<?
require_once($RelBasePath . 'communs/toc/toc-html.inc.html');
?>



<?= writeHR() ?>



<h2>Les avantages de XHTML</h2>

<p><abbr>HTML</abbr> est basé sur <abbr title="Standard Generalized Markup Language">SGML</abbr>.
    Ce dernier étant assez lourd et compliqué, le <abbr title="World Wide Web Consortium">W3C</abbr>
    s'est orienté vers <abbr title="eXtensible Markup Language">XML</abbr>, et a
    donc adapté <abbr>HTML</abbr>&nbsp;: ainsi est né <abbr>XHTML</abbr>.</p>

<p>Les avantages de <abbr>XHTML</abbr>
    tournent donc tous autour du fait qu'il s'agit de <abbr>XML</abbr>.
    Ainsi&nbsp;:</p>

<ul>
    <li>La page peut donc être traitée via toutes les technologies associées (<abbr>XSL</abbr>,
        <abbr>XPath</abbr>, ...)</li>
    <li>On peut intégrer dans une page tout dialecte <abbr>XML</abbr>
        (on pensera tout de suite à <abbr title="Scalable Vector Graphics">SVG</abbr> ou MathML par exemple). Il s'agit de la
        modularité.</li>
</ul>



<?= writeHR() ?>



<h2>Mauvaises raisons de basculer vers <abbr>XHTML</abbr></h2>

<p>Les avantages exposés plus haut sont à tempérer&nbsp;:</p>

<ul>
    <li>Le format de stockage des contenus est très rarement le <abbr>(X)HTML</abbr>.
        Si l'on dispose d'un <abbr title="Content Management System">CMS</abbr> avec
        un système de templates, on n'aura sans aucun doute aucun besoin d'utiliser
        des technologies <abbr>XML</abbr> sur les
        pages envoyées à l'utilisateur final&nbsp;: il suffira de modifier le template
        ou de créer un processus spécifique d'extraction depuis la base de données.</li>
    <li>Le support pour MathML ou <abbr>SVG</abbr> est relativement réduit. Il existe
        surtout des alternatives en HTML 5 : balises <a href="http://www.w3.org/TR/html5/embedded-content-0.html#mathml">math</a>
        et <a href="http://www.w3.org/TR/html5/embedded-content-0.html#svg">svg</a>.</li>
</ul>

<p>Ceci étant dit... Il circule beaucoup de fausses idées sur <abbr>XHTML</abbr>.
    En voici quelques unes, et les explications associées.</p>


<h3>Je veux développer en suivant les standards du <abbr>W3C</abbr>,
    et leur standard c'est <abbr>XHTML</abbr>&nbsp!</h3>

<p>Comme dit plus haut, c'est d'abord sur <abbr>HTML</abbr>
    que le <abbr>W3C</abbr> a publié des
    recommandations. Avec leurs recommandations, <abbr>XHTML</abbr>
    tout comme <abbr>HTML</abbr> sont donc des
    standards&nbsp;!</p>


<h3><abbr>XHTML</abbr> est le futur,
    il est nécessaire que je l'apprenne</h3>

<p>2 choses&nbsp;:</p>

<ul>
    <li>C'est une évidence, mais rappelons-le&nbsp;: ne <strong>jamais</strong> tenter
        d'expérience «&nbsp;pour se former&nbsp;» sur des sites en production ou avec des
        impératifs de mise en ligne précis. On le verra, basculer à <abbr>XHTML</abbr>
        n'est pas une mince affaire, et si vous découvrez que les efforts à fournir
        ne sont pas à la hauteur de ce que cela va vous apporter... vous ferez
        marche arrière.</li>
    <li>Personne ne peut vous dire de quoi demain sera fait&nbsp;! Dans un sens comme
        dans l'autre... Car certes, <abbr>XHTML</abbr>
        est très lourd à utiliser aujourd'hui... mais c'est une question de support
        des navigateurs&nbsp;! En faveur du <abbr>HTML</abbr>, on peut noter que le <abbr>W3C</abbr>
        a rouvert les travaux sur <abbr>HTML</abbr>, suite notemment aux pressions d'acteurs
        comme le [<a href="#whatwg">WhatWG</a>]. Et l'industrie semble maintenant se
        tourner majoritairement vers HTML5.</li>
</ul>


<h3>Je veux profiter à fond de <abbr title="Cascading Style Sheets">CSS</abbr>,
    supprimer tous les FONT, et <abbr>XHTML</abbr>
    est la solution&nbsp;!</h3>

<p><strong>Très important</strong>&nbsp;: on a finit par l'oublier, mais
    <abbr>HTML</abbr> n'est pas synonyme de
    "bouillie-à-la-mode-des-années-90", bref de multiples tableaux imbriqués,
    de balises font qui n'en finissent pas, etc.</p>

<p>En effet, <abbr>HTML</abbr> comme <abbr>XHTML</abbr> proposent
    plusieurs versions&nbsp;:</p>

<ul>
    <li>Transitional</li>
    <li>Frameset</li>
    <li>Strict</li>
</ul>

<p>Vous retrouverez ces définitions dans <a href="http://www.w3.org/TR/xhtml1/#dtds">les recommandations <abbr>XHTML</abbr></a>
    comme dans <a href="http://www.w3.org/TR/html401/struct/global.html#version-info">celles pour <abbr>HTML</abbr></a>.
    Un article d'OpenWeb, [<a href="#openweb">Pourquoi plusieurs variantes de <abbr>DTD</abbr> en <abbr>XHTML</abbr>&nbsp;?</a>]
    (qui traite d'ailleurs autant de HTML
    que de <abbr>XHTML</abbr>) détaille
    aussi ces 3 différentes versions.</p>

<p>Si l'on choisit une version Strict, on est dans une véritable séparation
    fond / forme, et donc plus du tout dans l'horreur que l'on évoquait plus
    haut&nbsp;! Sur ce point, <abbr>HTML</abbr> et <abbr>XHTML</abbr> sont totalement
    comparables.</p>

<p>Dans tous les cas, précisons que passer de <abbr>HTML</abbr>
    Strict à <abbr>XHTML</abbr> Strict
    servi en application/xml+xhtml est assez simple. Dans un premier temps et pour
    suivre une progression logique, vous avez donc bien plus intérêt à vous exercer
    à créer des pages en Strict et à utiliser au mieux <abbr>CSS</abbr>.</p>


<h3><abbr>XHTML</abbr> est plus strict que <abbr>HTML</abbr></h3>

<p>En <abbr>HTML</abbr>, des balises peuvent
    ne pas être fermées (c'est d'ailleurs très accomodant pour les pages contenant
    beaucoup de balisage de tableaux), et seul l'élément TITLE et le DOCTYPE sont
    absolument indispensables. Ainsi, <a href="html_ou_xhtml.ex1.html">cette page au balisage très étrange venu d'ailleurs</a>
    est <a href="http://validator.w3.org/check?verbose=1&amp;uri=http%3A//pgoiffon.free.fr/info/inet/html_ou_xhtml.ex1.html">tout à fait valide...</a></p>

<p>Cependant... Ce genre d'exemples sont plus des cas d'école. Dans la pratique,
    un concepteur Web doit faire attention à tellement de problématiques (validité,
    séparation fond/forme, accessibilité, temps de chargement, ...) que l'on peut
    considérer comme négligeable cet avantage. En effet, pour produire un site
    respectueux des recommandations <abbr>W3C</abbr>, il faut le vouloir... Et dans
    ce cas on ne produira pas de pages sans BODY ou HEAD&nbsp;!</p>

<p>A noter qu'une page <abbr>XHTML</abbr> invalide et lue comme du <abbr>XML</abbr>
    ne sera pas affichée (on y reviendra <a href="#xhtml_invalide">plus bas</a>)&nbsp;:
    un peu trop strict pour le coup&nbsp;:).</p>


<h3><abbr>XHTML</abbr> est plus simple que <abbr>HTML</abbr></h3>

<p>Même en laissant de côté toutes les complications que l'on rencontre en
    <abbr>XHTML</abbr> pour conserver
    la compatibilité avec les vieux agents (et il y en a foison, et il faut pourtant
    impérativement les respecter aujourd'hui&nbsp;!), c'est un argument qui paraît
    impossible à tenir.</p>

<p>Par exemple, voyez les attributs qui doivent avoir une valeur&nbsp;: <code>selected="selected"</code>
    (voir la <a href="http://www.w3.org/TR/xhtml1/diffs.html#h-4.5">rec <abbr>XHTML</abbr> chapitre 4.5</a>).
    Ou encore la nécessité d'entourer les contenus de balises script ou style par
    des blocs CDATA (voir la <a href="http://www.w3.org/TR/xhtml1/diffs.html#h-4.8">rec <abbr>XHTML</abbr> chapitre 4.8</a>)</p>

<p>Bref, même si cela ne complique quand même pas dans des proportions
    délirantes la tâche des concepteurs, il reste que <abbr>XHTML</abbr>
    est légèrement plus lourd que <abbr>HTML</abbr> dans sa syntaxe.</p>

<p>Et encore une fois, c'est sans compter toutes les contraintes
    de compatibilité (nous les détaillerons <a href="#xhtml_compat">plus loin</a>) à impérativement respecter&nbsp;!</p>


<h3>Mon site doit pouvoir être lu parfaitement sur mobile !</h3>

<p>A la rédaction initiale de cette page en 2005, les smartphone étaient tout récents...
    On avait plutôt des PDA ou des feature phone en iMode (pages écrites en cHTML)
    ou WAP (pages en WML ou XHTML Basic).</p>

<p>Les navigateurs mobiles utilisés aujourd'hui, bien entendu, orientent leur compatibilité
    première vers le parc de sites installés... et donc vers HTML !</p>



<?= writeHR() ?>



<h2>Différences entre <abbr>HTML</abbr> et <abbr>XHTML</abbr></h2>


<h3>Généralités</h3>

<p>De par la nature différente de <abbr>HTML</abbr> et <abbr>XHTML</abbr>, il
    y a plusieurs nouveautés à respecter en <abbr>XHTML</abbr> :</p>

<ul>
    <li>Les noms d'éléments et d'attributs doivent être en minuscules</li>
    <li>Toutes les balises doivent être fermées, éléments vides ou non. Par
        exemple si l'on a un <code>&lt;p&gt;</code>, on doit avoir un <code>&lt;/p&gt;</code>
        qui suit. Idem, un saut de ligne est écrit <code>&lt;br /&gt;</code></li>
    <li>Toujours entourer les valeurs d'attributs de guillemets, simples ou doubles</li>
    <li>Les valeurs d'attributs sont systématiquement à préciser (exemple&nbsp;:
        <code>selected="selected"</code>)</li>
    <li>Le contenu des balises script ou style doivent être entourés de CDATA
        (<code>&lt;![CDATA[ ... ]]&gt;</code>)</li>
    <li>L'attribut name doit être remplacé par des attributs id (sauf pour les éléments
        de formulaire, cf plus bas)</li>
</ul>

<p>Ces différences sont bien détaillées dans le <a href="http://www.w3.org/TR/xhtml1/#diffs">chapitre 4 de la recommandation <abbr>XHTML</abbr> 1.0</a>,
    et aussi dans un article d'OpenWeb&nbsp;: [<a href="#openweb">Passer du <abbr>HTML</abbr> au <abbr>XHTML</abbr></a>].</p>


<h3 id="attr_id">Attribut id</h3>

<p>L'attribut name disparait comme "fragment identifier" et est remplacé par id : c'est
    cet attribut en particulier que l'on utilisera comme ancre&nbsp;(http://serveur/chemin/document#ancre).<br>
    Plus de détails sur le sujet dans <a href="http://www.w3.org/TR/xhtml1/#h-4.10">le chapitre 4.10 de la recommandation</a>
    et dans <a href="http://www.w3.org/TR/xhtml1/#C_8">le chapitre 8 de son annexe C</a>.</p>

<p>Les éléments de formulaire (élément input) conservent bien l'attribut name.<br>
    A ce sujet, consulter cette discussion sur le groupe Usenet fr.comp.infosystemes.www.auteurs :
    <a href="http://groups.google.com/group/fr.comp.text.xml/browse_thread/thread/898f525c8f387ea8/e3e45d11c61937ab">Id, name et radio</a>.</p>

<p></p>


<h3 id="xhtml_invalide">Code <abbr>XHTML</abbr> invalide</h3>

<p><a href="html_ou_xhtml.ex2.xhtml">Une page <abbr>XHTML</abbr> servie en tant
        que telle (content-type application/xml+xhtml) et dont le code est invalide</a>,
    ne sera pas affichée par un navigateur conforme. A la place, c'est une erreur du
    parseur <abbr>XML</abbr> qui sera affichée.</p>



<?= writeHR() ?>



<h2 id="xhtml_compat">Contraintes de compatibilité</h2>

<h3>Type <abbr title="Multipurpose Internet Mail Extensions">MIME</abbr></h3>

<p>Le document [<a href="#xhtml_content-type"><abbr>XHTML</abbr> media types</a>] précise
    qu'un document <abbr>XHTML</abbr> 1.1 doit («&nbsp;SHOULD&nbsp;») être servi en utilisant le
    content-type "application/xml+xhtml", et pas («&nbsp;SHOULD NOT&nbsp;») avec le type
    "text/html". Les termes utilisés pour indiquer ces contraintes sont précisément
    définis dans la [<a href="#rfc2119"><abbr title="Request for comments">RFC</abbr> 2119</a>]&nbsp;:</p>

<blockquote>
    <p>3. SHOULD   This word, or the adjective "RECOMMENDED", mean that there
        may exist valid reasons in particular circumstances to ignore a
        particular item, but the full implications must be understood and
        carefully weighed before choosing a different course.</p>

    <p>4. SHOULD NOT   This phrase, or the phrase "NOT RECOMMENDED" mean that
        there may exist valid reasons in particular circumstances when the
        particular behavior is acceptable or even useful, but the full
        implications should be understood and the case carefully weighed
        before implementing any behavior described with this label.</p>
</blockquote>

<p>Sachant qu'aucune règle de compatibilité n'existe en <abbr>XHTML</abbr>
    1.1, il faudra qu'un tel document soit lu par le parseur <abbr>XML</abbr>
    des agents utilisateurs. Et on comprend donc cette contrainte...</p>

<p>Maintenant, arrivons au plus drole... Internet Explorer (toutes versions
    jusqu'à la v8 incluse) ne gère pas ce type MIME... <a href="http://caniuse.com/#feat=xhtml">Cf CanIUse.com</a>.
    Et sur Safari iOS le support aussi est récent (depuis la v7.1). Si vous êtes confrontés
    à ces navigateurs, alors cela condamne pour vous l'usage de XHTML 1.1.</p>

<p>Notons au passage que&nbsp;:</p>

<ul>
    <li>Les différences entre <abbr>XHTML</abbr> 1.0 et 1.1 sont détaillées dans <a href="http://www.w3.org/TR/xhtml11/changes.html#a_changes">l'annexe A de la recommandation <abbr>XHTML</abbr> 1.1</a>.
        En gros, on peut en plus utiliser [<a href="#ruby_annotations">Ruby</a>]</li>
    <li>la modularité n'est valable que pour des documents servis comme du
        <abbr>XML</abbr></li>
</ul>


<h3><abbr>XHTML</abbr> 1.0 Annexe C</h3>

<p>Vu ce qui a été dit juste au-dessus, on se rabat donc sur <abbr>XHTML</abbr>
    1.0, servi en text/html. Or de nombreux navigateurs ne connaissent pas
    <abbr>XHTML</abbr>, et liront un tel document comme du <abbr>HTML</abbr>
    invalide. Afin de ménager ces vieux agents utilisateur, il faut suivre les
    différents points exposés dans l'<a href="http://www.w3.org/TR/xhtml1/#guidelines">annexe C de la recommandation <abbr>XHTML</abbr> 1.0</a>.</p>

<p>Voici les points les plus importants contenus dans cette annexe&nbsp;:</p>

<ul>
    <li>Insérer une espace devant le slash de fermeture des éléments vide. Par
        exemple préférer <code>&lt;br /&gt;</code> à <code>&lt;br/&gt;</code></li>
    <li>Ne pas minimiser les éléments vides dont le modèle de contenu n'est pas
        EMPTY. En termes clairs&nbsp;: ne pas écrire <code>&lt;p /&gt;</code> au lieu de
        <code>&lt;p&gt;&lt;/p&gt;</code></li>
    <li>Si un style ou un script contient l'un des caractères &amp;, &lt;, &gt;,
        ]], ou --, il est conseillé de les placer dans des fichiers externes.</li>
    <li>Utiliser les deux attributs lang (pour les vieux navigateurs) et xml:lang
        (pour les agents lisant du <abbr>XML</abbr>),
        ce dernier ayant la priorité</li>
    <li>En <abbr>XML</abbr>, les noms d'ancres
        dans les <abbr title="Uniform ressource location">URL</abbr> se réfèrent aux
        valeurs d'attributs id et non aux valeurs name.
        Or certains vieux agents n'implémentent pas le support des attributs id comme
        nom d'ancre. Par précaution, il faut donc spécifier les 2 attributs, par
        exemple <code>&lt;a id="mon_ancre" name="mon_ancre"&gt;</code> sera accessible
        directement en ajoutant #mon_ancre dans l'<abbr>URL</abbr>.</li>
    <li>En <abbr>XML</abbr>, c'est dans le
        prologue que l'on spécifie le codage. Pour les agents ne connaissant pas
        <abbr>XML</abbr>, il faut continuer de
        spécifier le codage en balise meta.</li>
    <li>Bien échapper les &amp; dans les URL des références externes&nbsp;: c'est
        aussi une obligation en <abbr>HTML</abbr>
        mais l'effet sera rédhibitoire sur du <abbr>XHTML</abbr>
        servi avec un content-type <abbr>XML</abbr></li>
    <li>On l'a vu, les éléments et attributs en <abbr>XHTML</abbr>
        doivent être écrits en minuscules - c'est le cas aussi dans les feuilles CSS</li>
    <li>Les balises style doivent recevoir un attribut id et être référencées en
        tête de document</li>
    <li>L'entité nommée &amp;apos; a été introduite en <abbr>XHTML</abbr>
        1.0, et ne sera donc pas reconnue par de vieux agents.</li>
</ul>

<p>En fait, on le voit, on a tout intérêt à développer son <abbr>XHTML</abbr>
    d'abord en le servant en tant que <abbr>XML</abbr>. Ensuite, on pourra
    l'adapter pour qu'il soit correctement lu en text/html par
    d'anciens agents.</p>

<p>L'excellent document [<a href="#hixie">Sending <abbr>XHTML</abbr> as text/html Considered Harmful</a>]
    (un must-read, vraiment&nbsp;!) a d'ailleurs été écris au départ en pensant aux
    problèmes rencontrés en passant un document <abbr>XHTML</abbr> du text/html au
    application/xhtml+xml...</p>


<h3>Internet Explorer et prologue <abbr>XML</abbr></h3>

<p>Le prologue <abbr>XML</abbr>, c'est ça&nbsp;:</p>

<pre><code>&lt;?xml version="1.0" encoding="UTF-8"?&gt;</code></pre>

<p>Si ce prologue est présent, alors votre document sera affiché par Internet
    Explorer, jusqu'à la version 6 incluse, Mac ou Windows, dans son [<a href="#quirks">mode de rendu Quirks</a>]...
    Et cela posera donc beaucoup de problèmes aux <abbr>CSS</abbr>&nbsp;!</p>

<p>Notons que l'absence de prologue rendra difficile l'utilisation d'outils
    <abbr>XML</abbr> sur ces pages (problèmes codage par exemple).</p>



<?= writeHR() ?>



<h2>Conclusion</h2>

<p>A l'époque de la rédaction initiale de ce document, le très gros argument contre
    XHTML était l'impossibilité de servir les pages avec le type MIME adapté.</p>

<p>A ce jour (octobre 2014), il est possible de faire du "vrai" XHTML en utilisant
    bien <code>application/xml+xhtml</code>. Cependant, les apports sont très relatifs,
    et surtout vous aurez l'absolue nécessité de ne servir QUE des pages valides à vos
    utilisateurs, car à la moindre erreur leur sera présenté un message technique abscon.
    Et puis, la syntaxe XHTML est tout de même plus lourde que celle de HTML, sans
    compter les nouveautés HTML 5 (autour des formulaires en particulier, à comparer
    avec XHTML Forms).</p>



<?= writeHR() ?>



<h2>Liens</h2>


<h3>Recommandations <abbr>W3C</abbr></h3>

<ul>
    <li><a href="http://www.w3.org/TR/html401/">Recommandation <abbr>HTML</abbr> 4.01</a></li>
    <li id="rec_xhtml1.0"><a href="http://www.w3.org/TR/xhtml1/">Recommandation <abbr>XHTML</abbr> 1.0</a></li>
    <li><a href="http://www.w3.org/TR/xhtml11/">Recommandation <abbr>XHTML</abbr> 1.1</a></li>
    <li id="ruby_annotations">Recommandation <a href="http://www.w3.org/TR/2001/REC-ruby-20010531/">Ruby annotation</a>&nbsp;:
        un moyen d'annoter des documents <abbr>XHTML</abbr> avec des langues non latines.</li>
</ul>


<h3>Documents de référence</h3>

<ul>
    <li id="xhtml_content-type"><a href="http://www.w3.org/TR/xhtml-media-types/"><abbr>XHTML</abbr> Media types</a>&nbsp;:
        un document de synthèse détaillant les types <abbr>MIME</abbr> à utiliser pour servir du
        contenu <abbr>(x)HTML</abbr></li>
    <li id="rfc2119">Key words for use in <abbr>RFC</abbr>s to Indicate Requirement Levels&nbsp;: <a href="http://www.rfc-editor.org/rfc/rfc2119.txt"><abbr>RFC</abbr> 2119</a>.
        De quoi vérifier ce que SHOULD implique réellement...</li>
    <li id="hixie"><a href="http://www.hixie.ch/advocacy/xhtml">Sending <abbr>XHTML</abbr> as text/html Considered Harmful</a>
        par Ian Hickson&nbsp;: un must-read sur le sujet&nbsp;! Le postulat de départ est&nbsp;:
        on a des pages <abbr>XHTML</abbr> servies en text/html, tout va bien&nbsp;! Mais quand on
        passe au application/xml+xhtml, rien ne va plus&nbsp;! Bref, ce document est une
        vraie mine d'or, et contient un tour d'horizon extremement complet des
        problèmes auxquels il faut faire attention pour un auteur de <abbr>XHTML</abbr>
        aujourd'hui.</li>
    <li id="quirks">A propos des modes de rendu (standard ou quirks), <strong>le</strong> document à lire&nbsp;:
        <a href="http://hsivonen.iki.fi/doctype/">Activating the Right Layout Mode Using the Doctype Declaration</a>.
        Quelques explications sur les différents modes de rendu, et un tableau
        détaillant dans quelles situations les navigateurs majeurs basculent d'un mode
        à l'autre.</li>
</ul>


<h3>Sites connexes</h3>

<ul>
    <li id="openweb">Sur <a href="http://openweb.eu.org/">OpenWeb</a> on trouvera
        nombre de très intéressants articles. Notamment&nbsp;: <a href="http://openweb.eu.org/articles/differentes_dtd/">Pourquoi plusieurs variantes de DTD en XHTML&nbsp;?</a>
        qui permet de découvrir l'existence des versions Strict, Transitional et
        Frameset. Sur le sujet qui nous intéresse ici, il y a aussi cet article&nbsp;:
        <a href="http://openweb.eu.org/articles/html_au_xhtml/">passer du <abbr>HTML</abbr> au <abbr>XHTML</abbr></a>,
        qui n'aborde hélas pas les raisons qui peuvent réellement pousser à migrer en
        <abbr>XHTML</abbr>, ni les différents problèmes auxquels on sera confrontés si on s'y
        plonge - mais c'est quand même une ré-écriture en français, et assez détaillée
        du <a href="http://www.w3.org/TR/xhtml1/#diffs">chapitre 4 de la recommandation <abbr>XHTML</abbr> 1.0</a></li>
    <li><a href="http://www.spartanicus.utvinternet.ie/no-xhtml.htm">No to <abbr>XHTML</abbr></a>
        de Spartanicus, un contributeur régulier de
        <a href="news://comp.infosystems.www.authoring.html">c.i.w.a.html</a>. Ce
        document liste plusieurs mauvaises raisons de choisir <abbr>XHTML</abbr>.</li>
    <li id="whatwg">Le <a href="http://whatwg.org/">WhatWG</a>, qui propose des
        évolutions très intéressantes de <abbr>HTML</abbr>,
        en particulier autour des formulaires.</li>
    <li>Le projet <a href="http://www.foaf-project.org/"><abbr title="Friend of a friend">FOAF</abbr></a>,
        un exemple de ce que XML peut apporter au Web.</li>
    <li>Chez <a href="http://blog-and-blues.org/weblog/">Blog&amp;Blues</a>,
        plusieurs articles sur le sujet dont <a href="http://blog-and-blues.org/weblog/2004/08/02/264-avantages-du-xhtml">D'ailleur pourriez vous me dire les avantages du XHTML&nbsp;?</a></li>
</ul>



<?= writeHR() ?>



<h2>Remerciements</h2>

<p>Pour leurs corrections, un très grand merci&nbsp;:</p>

<ul>
    <li>au compère Vince (uku powered)</li>
    <li>à Alain Buferne pour sa judicieuse question sur l'attribut id (qui a entraine
        une correction de ce document)</li>
    <li>et surtout à <a href="http://www.miakinen.net/">Olivier Miakinen</a>
        (indispensable contributeur à f.c.i.w.auteurs).</li>
</ul>



<?= writeHR() ?>



<?
require_once($RelBasePath . 'communs/dates-maj-footer.inc.php');
?>



<hr class="sep sepfin">



</body>
</html>
<?php ob_end_flush(); ?>