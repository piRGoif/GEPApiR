<?php ob_start('ob_gzhandler');
$date_creation = "05/11/2025";
$date_maj = "06/02/2026";

// NAVIGATION
$RelBasePath = "../../";
$title = "Personnalisation de la ligne de commande - Linux - Informatique [GEPApiR]";

require_once($RelBasePath . 'communs/header1.inc.php');
require_once($RelBasePath . 'communs/highlight.inc.php');
require_once($RelBasePath . 'communs/toc/toc-js.inc.html');
require_once($RelBasePath . 'communs/header2.inc.php');
?>

<h1>
    <?
    require_once('../info_h1.inc');
    ?><br>
    Linux - Personnalisation du shell
</h1>



<?
require_once($RelBasePath . 'communs/toc/toc-html.inc.html');
?>



<?= writeHR() ?>



<h2>Introduction</h2>

<p>
    La ligne de commande Linux par défaut est déjà très pratique ! Mais on peut l'améliorer... Dans cette page je vous partage cette configuration que j'ai en place sur mes machines ! 
</p>

<figure id="screenshot">
    <a href="algoo-2025_starship_fish.webp">
        <img 
            src="algoo-2025_starship_fish.webp" 
            alt="Capture d'écran d'un terminal avec un prompt Starship personnalisé et Fish Shell en action"
            class="pretty-img screenshot-img"
            width="963" height="942" data-responsive-img
        >
    </a>
    <figcaption>Capture d'écran d'un terminal avec un prompt Starship personnalisé et Fish Shell en action</figcaption>
</figure>



<?= writeHR() ?>



<h2 id="prompt">Prompt</h2>

<p>Le prompt, c'est ce qui s'affiche à côté du curseur : c'est très intéressant d'y faire figurer des informations comme le répertoire courant ou la branche sur un dépôt de code !</p>

<h3>🤔 Bash</h3>

<p>De base avec le shell bash livré par défaut sur la plupart des systèmes, on a des possibilités limitées. On peut cependant personnaliser grace à la variable <code>PS1</code> mais la syntaxe est vraiment complexe et difficile à maintenir !</p>

<p>Exemple : <code>export PS1='
\[\e[1;33m\]\t\[\e[0m\]>\w>\[\e[1;36m\]$(__git_ps1 "(%s)")\[\e[0m\]
\$ '</code><br>
Qui affichera : </p>

<figure>
    <a href="prompt_bash.webp">
        <img 
            src="prompt_bash.webp" 
            alt="Capture d'écran d'un prompt bash personnalisé"
            class="pretty-img screenshot-img"
            width="429" height="18" data-responsive-img
        >
    </a>
    <figcaption>Capture d'écran d'un prompt bash personnalisé</figcaption>
</figure>

<p>Soit :</p>

<ul>
    <li><code>\t</code> : heure courante en jaune (couleurs avec <code>\[\e[1;33m\]</code> pour le jaune et <code>\[\e[0m\]</code> pour reinit)</li>
    <li><code>\w</code> : répertoire courant</li>
    <li><code>$(__git_ps1 "(%s)")</code> : si dans un dépôt git affiche la branche courante de couleur cyan (exemple <a href="https://git-scm.com/book/en/v2/Appendix-A:-Git-in-Other-Environments-Git-in-Bash">dans la documentation git</a>)</li>
    <li><code>\$</code> : si user affiche "$" et si root alors "#"</li>
</ul>

<p class="callout" data-variant="tip">La modification de la variable PS1 est possible dans ce générateur en ligne : <a href="https://bash-prompt-generator.org/">Bash Prompt Generator</a>.<br>
Sinon on trouve de nombreuses documentations comme celle-ci par exemple : <a href="https://makandracards.com/makandra/1090-customize-bash-prompt">Customize your Bash prompt - makandra dev</a></p>

<p class="callout" data-variant="note">C'est un début, mais il est quand même compliqué de trouver la syntaxe adaptée, et surtout les fonctionnalités sont limitées !<br>
C'est là qu'interviennent des produits pensés pour !</p>


<h3>🤔 Powerlevel10k</h3>

<p>En cherchant des prompts plus performants, on tombe rapidement sur <a href="https://github.com/romkatv/powerlevel10k">Powerlevel10k</a></p>

<div class="callout" data-variant="warning">
Un grand MAIS entoure ce projet :
<ul>
    <li>abandonné depuis mai 2024 (cf commit <a href="https://github.com/romkatv/powerlevel10k/commit/bde5ca4c2aa6e0c52dd7f15cf216dffdb1ec788c">bde5ca4</a>)</li>
    <li>il ne tourne que dans le shell ZSH</li>
</ul>
</div>

<p>Je n'ai donc pas cherché à l'utiliser...</p>


<h3 id="starship">😍 Starship</h3>

<p>Je ne remercierai jamais assez mon ancien collègue <a href="https://www.linkedin.com/in/th%C3%A9o-larue-712a4651/">Théo</a> qui m'a fait découvrir <a href="https://starship.rs/">Starship</a> ! Là, les possibilités sont décuplées, et on a une configuration ultra simple et très bien documentée !<br>
De plus, on a <a href="https://starship.rs/presets/">des presets</a> qui permettent d'avoir une configuration en 2 clics !</p>

<p>De mon côté j'utilise une base du preset <a href="https://starship.rs/presets/#gruvbox-rainbow">preset Gruvbox</a> légèrement modifiée, disponible <a href="https://gist.github.com/piRGoif/2517c84947a79f1c96a8994262c8290a">sur ce gist</a>.<br>
Le résultat :</p>

<figure>
    <a href="prompt_starship.webp">
        <img 
            src="prompt_starship.webp" 
            alt="Capture d'écran d'un prompt avec ma config Starship"
            class="pretty-img screenshot-img"
            width="611" height="48" data-responsive-img
        >
    </a>
    <figcaption>Capture d'écran d'un prompt avec ma config Starship</figcaption>
</figure> 
    
<div class="callout" data-variant="info">
Les modifications apportées :
<ul>
    <li>Côté git, modification de quelques options (qui sont toutes <a href="https://starship.rs/config/#directory">documentées ici</a>): directory <code>truncation_length</code>, <code>truncate_to_repo=false</code>, format dans l'option <code>repo_root</code></li>
    <li>Changement du time format</li>
    <li>Affichage du shell courant (pratique pour se souvenir que l'on est en Fish Shell ou en Bash)</li>
    <li>Ajout du command duration, mais sur seuil (seulement si la commande a duré plus de 500ms)</li>
</ul>
</div>




<?= writeHR() ?>



<h2 id="fishshell">Fish Shell</h2>

<p>Une révolution pour moi a aussi été d'utiliser le <a href="https://fishshell.com/">shell Fish</a> ! Effectivement, ce shell propose de très nombreuses fonctionnalités qui me sont devenues très utiles au quotidien :</p>

<ul>
    <li><strong>Syntax highlighting</strong> : une commande qui n'existe pas est affichée en rouge, un chemin qui est correct est surligné et affiché en vert...</li>
    <li><strong>Suggestion de commandes</strong> : dès que l'on commence à taper Fish va proposer une commande correspondante depuis l'historique ! On peut tout accepter avec la flèche droite, ou alors mot à mot (alt+flèche ou alt+F).<br>
    Si l'on veut parcourir les correspondances dans l'historique, simplement utiliser les flèches haut/bas !</li>
    <li><strong>Autocomplete</strong> : sur les commandes, sur les chemins... et aussi sur les paramètres de commande avec un petit texte de description basé sur man !! Et avec <a href="https://github.com/junegunn/fzf">fuzzy finder façon FZF</a> s'il vous plait !!</li>
    <li><strong>Historique</strong> : comme dit avant, il se parcourt simplement avec les flèches haut/bas, ce qui est déjà tapé servant de filtre. Sinon, le <kbd>Ctrl</kbd>+<kbd>R</kbd> habituel obtient aussi une sublime <a href="https://fr.wikipedia.org/wiki/Environnement_en_mode_texte">TUI</a> !</li>
    <li><strong>Abbréviations</strong> : un moyen de remplacer les alias mais en mieux, car l'abbréviation insère la commande sur espace ou entrée, et l'historique contiendra bien la vraie commande.</li>
    <li><strong>Thèmes</strong> : le shell arrive avec plusieurs thèmes très chouettes, et les outils pour le changer facilement... dans son navigateur internet (!!)</li>
    <li><strong>Historique des répertoires</strong> : la commande <a href="https://fishshell.com/docs/current/cmds/cdh.html">cdh</a> est très pratique pour parcourir les récents répertoires</li>
</ul>

<p>Et le meilleur : je n'ai eu AUCUNE configuration à faire pour pouvoir en profiter, tout cela est disponible par défaut !</p>

<p class="callout" data-variant="info">
Le mieux pour voir un étendu de ces fonctionnalités disponibles immédiatement à la première utilisation est de lire cette page du site officiel : <a href="https://fishshell.com/docs/current/tutorial.html">Tutorial — fish-shell documentation</a>
</p>

<p class="callout" data-variant="tip">
    Sous Debian et Gnome, pour en profiter simplement, on peut modifier la commande lancée par <a href="https://gnome-terminator.org/">Terminator</a> dans les préférences : onglet profils, puis commande, exécuter une commande personnalisée, et entrer <code>/usr/bin/fish</code>.
</p>



<?= writeHR() ?>



<h2 id="utils">Utilitaires : wrappers et <abbr title="Terminal User Interface">TUI</abbr></h2>

<p>Un wrapper, c'est simplement une commande "façade" qui utilise les mêmes arguments qu'une commande existante mais lui apporte quelques fonctionnalités en plus.</p>

<p>Le terme barbare de <abbr title="Terminal User Interface">TUI</abbr> est lui bien décrit par la définition donnée sur <a href="https://fr.wikipedia.org/wiki/Environnement_en_mode_texte">la fiche Wikipedia :</a></p>

<blockquote>
<p>Un <b>environnement en mode texte</b> (<b>TUI</b>, de l'anglais «&nbsp;<i>Text User Interface</i>&nbsp;», «&nbsp;<i>Textual User Interface</i>&nbsp;» ou encore «<i>Terminal User Interface</i>&nbsp;» est un <a href="/wiki/R%C3%A9tronymie" title="Rétronymie">rétronyme</a> introduit dans le <a href="/wiki/Jargon_informatique" title="Jargon informatique">jargon informatique</a> après l'invention des <a href="/wiki/Environnements_graphiques" class="mw-redirect" title="Environnements graphiques">environnements graphiques</a> pour se distinguer des <a href="/wiki/Interface_en_ligne_de_commande" title="Interface en ligne de commande">interfaces en ligne de commande</a>. Ce type d'interface utilisateur occupe la totalité de l'écran comme les <a href="/wiki/Interface_graphique" title="Interface graphique">interfaces graphiques</a>, et n'est donc pas limité au traitement ligne par ligne comme les <a href="/wiki/Interface_en_ligne_de_commande" title="Interface en ligne de commande">CLI</a>.</p>

<p>La navigation sur l'écran (ou le mouvement vers une ligne de données affichée ) s'effectue par des mouvements de curseur. L'emploi de <a href="/wiki/Caract%C3%A8res_semi-graphiques" title="Caractères semi-graphiques">caractères semi-graphiques</a> permet de dessiner des limites de colonne ou les bords d'un tableau, de souligner ou de faire clignoter le caractère actif (celui sur lequel se trouve le <a href="/wiki/Curseur_(interface)" title="Curseur (interface)">curseur</a>).</p>

<p>Ce type d'environnement s'avère très utile pour le développement d'applications sans besoins graphiques. Il est très économe en ressource mémoire (RAM).</p>
</blockquote>

<p class="callout" data-variant="info">Voici donc quelques exemples d'interfaces qui agrémentent efficacement le terminal, et dont je me sert au quotidien !</p>


<h3 id="lazyssh">Lazy SSH</h3>

<p>Une interface qui permet de visualiser, créer, trier, chercher, supprimer des hôtes SSH, et bien sûr de lancer une connexion ! Il y a même un système de tags qui permet de catégoriser les entrées, et la gestion du port forwarding !</p>

<figure>
    <a href="tui_lazyssh.webp">
        <img 
            src="tui_lazyssh.webp" 
            alt="Capture d'écran de Lazy SSH en action"
            class="pretty-img screenshot-img"
            width="1892" height="1040" data-responsive-img
        >
    </a>
    <figcaption>Capture d'écran de Lazy SSH en action</figcaption>
</figure>

<p class="callout" data-variant="info">
    À récupérer sur GitHub : <a href="https://github.com/Adembc/lazyssh">Adembc/lazyssh: A terminal-based SSH manager inspired by lazydocker and k9s - Written in go</a>
</p>


<h3 id="fzffish">fzf.fish</h3>

<p>Un plugin très pratique au shell Fish ! Il apporte du fuzzy finder pour l'historique de commande, les chemins, fichiers, dans git, pour les id de processus.<br>
Exemple avec l'historique de commandes (qui s'ouvre comme d'habitude avec <kbd>Ctrl</kbd> + <kbd>r</kbd>) :</p>

<figure>
    <a href="tui_fzf.fish.webp">
        <img 
            src="tui_fzf.fish.webp" 
            alt="Historique des commandes du shell dans fzf.fish"
            class="pretty-img screenshot-img"
            width="1235" height="702" data-responsive-img
        >
    </a>
    <figcaption>Historique des commandes du shell dans fzf.fish</figcaption>
</figure>

<p class="callout" data-variant="info">
    À récupérer sur GitHub : <a href="https://github.com/PatrickF1/fzf.fish">PatrickF1/fzf.fish: 🔍🐟 Fzf plugin for Fish</a>
</p>

<p class="callout" data-variant="tip">
    Au passage, dans le navigateur de fichiers il est bien possible de scroller la preview avec le clavier : pour cela il faut utiliser <kbd>maj</kbd>+<kbd>⬆️ ⬇</kbd><br>
    Cf <a href="https://github.com/junegunn/fzf.vim/issues/358">Keyboard bindings for scrolling preview window? junegunn/fzf.vim#358</a>.
</p>


<h3 id="logalize">Logalize</h3>

<p>Affichage de log avec coloration syntaxique... et on peut même ajouter les siennes avec un descripteur YAML ! Mais de base beaucoup de formats sont déjà pris en charge.</p>

<figure>
    <a href="logalize.jpg">
        <img 
            src="logalize.jpg" 
            alt="Affichage d'un log avec Logalize"
            class="pretty-img screenshot-img"
            width="1200" height="294" data-responsive-img
        >
    </a>
    <figcaption>Affichage d'un log avec Logalize</figcaption>
</figure>

<p class="callout" data-variant="info">
    A récupérer sur GitHub : <a href="https://github.com/deponian/logalize">deponian/logalize: Fast and extensible log colorizer Alternative to ccze</a>
</p>


<h3 id="rsyncy">rsyncy</h3>

<p>Un wrapper de la commande <code>rsync</code> qui permet d'ajouter une barre de progression, avec de nombreuses informations utiles :</p>

<ul>
    <li>bien sûr barre de progression et pourcentage total</li>
    <li>vitesse de transfert</li>
    <li>temps passé depuis le début</li>
    <li>indique si rsync est toujours en cours de scan</li>
</ul>

<p class="callout" data-variant="info">
    À récupérer sur GitHub : <a href="https://github.com/laktak/rsyncy">laktak/rsyncy: A status/progress bar for rsync</a>
</p>



<?= writeHR() ?>



<?
require_once($RelBasePath . 'communs/dates-maj-footer.inc.php');
?>




<hr class="sep sepfin">



</body>
</html>
<?php ob_end_flush(); ?>
