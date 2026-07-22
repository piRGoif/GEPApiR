<?php ob_start('ob_gzhandler');
$date_creation = "26/10/2025";
$date_maj = "19/07/2026";

// NAVIGATION
$RelBasePath = "../../";
$title = "Gnome trucs et astuces - Linux - Informatique [GEPApiR]";

require_once($RelBasePath . 'communs/header1.inc.php');
require_once($RelBasePath . 'communs/highlight.inc.php');
require_once($RelBasePath . 'communs/toc/toc-js.inc.html');
require_once($RelBasePath . 'communs/header2.inc.php');
?>

<h1>
    <?
    require_once('../info_h1.inc');
    ?><br>
    Linux - Gnome trucs et astuces
</h1>



<?
require_once($RelBasePath . 'communs/dates.inc.php');
?>



<?
require_once($RelBasePath . 'communs/toc/toc-html.inc.html');
?>



<?= writeHR() ?>



<h2>Introduction</h2>

<p>
    Arrivant dans la société <a href="https://www.algoo.fr/">Algoo</a> en juillet 2025, j'ai été équipé d'un poste Debian 13 avec un gestionnaire de fenêtres Gnome. Et... habitué à KDE, mes débuts ont été difficiles ! Effectivement les possibilités de configuration sont limitées et pas forcément évidentes à trouver, et il y a une miriade d'extensions... Alors voilà ce que j'ai appris, ou plutôt ce que j'aurais savoir avant de débuter :)
</p>


<h3 id="procons">Avantages / inconvénients de Gnome</h3>

<p>Mais... pourquoi ne pas être simplement retourné à KDE ? Hé bien, l'expérience avec cet autre gestionnaire de fenêtres est quand même fort sympathique !<p>
    

<p class="callout" data-variant="info">Si jamais vous n'êtes pas familier des termes Gnome vu que plusieurs seront cités ici, aller voir cette page qui donne une bonne introduction : <a href="https://help.ubuntu.com/stable/ubuntu-help/shell-introduction.html.en">Visual overview of GNOME</a></p>

<p>Les plus/moins pour moi :</p>

<ul>
    <li>➕ Une très chouette interface (une fois complété d'extensions...) : épuré avec possibilité d'avoir pas mal de choses quand même dans la top bar malgré sa taille réduite</li>
    <li>➕ L'activities overview</li>
    <li>➕ Support des raccourcis claviers auxquels j'étais habitué, et quelques autres supplémentaires très pratiques ! (cf <a href="#shortcuts">plus bas</a>)</li>
    <li>➕ Possibilité de lancer une application en saisissant son nom (touche <kbd>Windows</kbd> puis saisie)</li>
    <li>➖ Extensions nécessaires pour pouvoir personnaliser l'interface</li>
    <li>➖ Extensions nécessaires aussi pour ajouter des fonctionnalités manquantes ! Et il en manque... beaucoup !! Par exemple : saisie emoji avec <kbd>Windows</kbd> + <kbd>;</kbd> et historique presse papier <kbd>Windows</kbd> + <kbd>V</kbd></li>
    <li>➖ Position des fenêtres pas enregistrées</li>
    <li>➖ Support clavier multi-écran dans l'activities overview</li>
    <li>➖ Difficultés pour naviguer entre les fenêtres d'une même application (par exemple avec un IDE JetBrains)</li>
    <li>➖ Pas de fond d'écran différent par écran</li>
</ul>


<h3>Et donc !</h3>

<p>Voici donc les leçons que j'ai tirées de l'expérience, et les réglages et extensions que j'utilise avec bonheur au quotidien !</p>

<figure>
    <a href="gnome_screenshot_piR_2026-04.webp"><img src="gnome_screenshot_piR_2026-04.webp" alt="Capture d'écran de mon bureau Gnome sous Debian 13" class="pretty-img screenshot-img"></a>
    <figcaption>Capture d'écran de mon bureau Gnome sous Debian 13</figcaption>
</figure>



<?= writeHR() ?>



<h2 id="minimum_vital">Minimum vital</h2>

<p>Trucs et astuces indispensables pour rendre le système utilisable !</p>

<h3 id="shortcuts_ide">⌨️ Configuration : supprimer les raccourcis clavier nécessaires aux IDE</h3>

<p>Des raccourcis que j'utilise beaucoup dans mes IDE sont affectés par défaut dans Gnome et deviennent donc inutilisables 😭<br>
 Les deux qui me posaient problème sont listés ci-dessous.</p>
 
 <div class="callout" data-variant="tip">
    Pour afficher la liste des raccourcis :
    <pre><code class="language-bash">gsettings list-recursively org.gnome.desktop.wm.keybindings</code></pre>
</div>


<h4><kbd>Ctrl</kbd> + <kbd>Alt</kbd> + <kbd>Flèche haut/bas</kbd></h4>

<div class="callout" data-variant="note">
    Pour quoi faire ?
    <ul>
        <li><b>IDE</b> : dupliquer ligne avant / après</li>
        <li><b>Gnome</b> : bascule entre les bureaux virtuels au-dessus / en dessous</li>
    </ul>
</div>

<p>Pour supprimer le raccourci Gnome :</p>

<pre><code class="language-bash">gsettings set org.gnome.desktop.wm.keybindings switch-to-workspace-up "[]"
gsettings set org.gnome.desktop.wm.keybindings switch-to-workspace-down "[]"
</code></pre>

<p class="callout" data-variant="info">Un fil de discussion qui parle du problème, ouvert en... 2013, et toujours avec des participations en 2025 mettant à jour les solutions ! A lire ici : <a href="https://askubuntu.com/questions/315625/how-to-disable-the-shortcut-ctrl-alt-arrow-in-gnome-3-8">How to disable the shortcut Ctrl-Alt-Arrow in GNOME 3.8 - Ask Ubuntu</a></p>


<h4><kbd>Ctrl</kbd> + <kbd>Alt</kbd> + <kbd>Maj</kbd> + <kbd>Flèche haut/bas</kbd></h4>

<div class="callout" data-variant="note">
    Pour quoi faire ?
    <ul>
        <li><b>IDE</b> : changement précédent / suivant</li>
        <li><b>Gnome</b> : déplacer la fenêtre courante vers le bureaux virtuel au-dessus / en dessous</li>
    </ul>
</div>

<p>Pour supprimer le raccourci Gnome :</p>

<pre><code class="language-bash">gsettings set org.gnome.desktop.wm.keybindings move-to-workspace-down "[]"
gsettings set org.gnome.desktop.wm.keybindings move-to-workspace-up "[]"
</code></pre>

<p class="callout" data-variant="info">Fil de discussion qui donne une solution avec l'utilitaire dconf : <a href="https://askubuntu.com/questions/1077037/ubuntu-18-04-keystroke-alt-shift-ctrl-down-does-not-work/1378045#1378045">unity - Ubuntu 18.04 Keystroke Alt + Shift + (Ctrl) + Down does not work - Ask Ubuntu</a></p>


<h3 id="shortcuts">⌨️ Raccourcis clavier utiles</h3>

<p>Beaucoup de raccourcis clavier très utiles dans Windows sont également présents par défaut dans Gnome ! Et Gnome en propose aussi quelques un supplémentaires.</p>

<p>Une liste de ceux que j'utilise couramment :</p>

<ul>
    <li><kbd>Windows</kbd> : bascule vers l'activities overview, en tapant immédiatement après on recherchera dans les applications ce qui permet d'en lancer une rapidement</li>
    <li><kbd>Windows</kbd> + <kbd>1</kbd>..<kbd>0</kbd> : comme sur Windows, bascule d'une application ouverte à une autre (basé sur la position dans le dash). La valeur 0 ouvre la dernière de la liste</li>
    <li><kbd>Windows</kbd> + <kbd>Maj</kbd> + <kbd>S</kbd> : capture d'écran</li>
    <li><kbd>Windows</kbd> + <kbd>Flèche haut/bas</kbd> : bascule fenêtre courante entre les états agrandit / normal / réduit</li>
    <li><kbd>Windows</kbd> + <kbd>Flèche gauche/droite</kbd> : bascule fenêtre courante sur moitié gauche écran / normal / moitié droite écran</li>
    <li><kbd>Windows</kbd> + <kbd>Maj</kbd> + <kbd>Flèche</kbd> : déplacement fenêtre courante sur un autre écran</li>
    <li><kbd>Windows</kbd> + <kbd>L</kbd> : verrouiller la session</li>
    <li><kbd>Windows</kbd> + <kbd>M</kbd> : bascule entre tout réduire / tout restaurer</li>
    <li><kbd>Windows</kbd> + <kbd>H</kbd> : réduction de la fenêtre courante</li>
    <li><kbd>Windows</kbd> + <kbd>²</kbd> : bascule entre les fenêtres d'une même application</li>
    <li><kbd>Windows</kbd> + <kbd>N</kbd> : ouverture du panneau de notifications</li>
</ul>

<h3 id="gnome_tweaks">⚙️ Configuration : "Ajustements" (Gnome Tweaks)</h3>

<p>Cette application est présente de base, mais il faut le savoir... Donc, n'hésitez pas à la lancer !</p>

<p>De mon côté, je l'ai utilisée pour configurer en particulier :</p>

<ul>
    <li><strong>Polices</strong> : permet de spécifier un facteur de mise à l'échelle &lt; 1, ce qui n'est pas possible dans l'application paramètres système 😒</li>
    <li><strong>Fenêtres</strong> : on peut y configurer les actions sur la barre de titre des fenêtres. Pour ma part, la maximisation verticale m'est fort utile !</li>
    <li><strong>Applications au démarrage</strong> : permet de se retrouver prêt à travailler ! (à la nuance près que les fenêtres s'ouvriront à des potitions et tailles un peu au hasard à chaque fois 🙄)</li>
</ul>


<h3 id="emoji">😊 Saisie d'emoji : Emote</h3>

<p>Très habitué à saisir des emoji sur Windows ou KDE avec le raccourci <kbd>Windows</kbd> + <kbd>;</kbd>, il me manquait la même chose sur Gnome...<br>
La solution a été de :</p>

<ul>
    <li>Installer <a href="https://github.com/tom-james-watson/Emote">Emote</a> depuis le magasin d'applications de Debian</li>
    <li>Configurer le raccourci clavier dans les paramètres de Gnome :
        <ul>
            <li>Paramètres → Clavier → Raccourcis clavier → Voir et personnaliser les raccourcis</li>
            <li>Raccourcis personnalisés → +</li>
            <li>Nom = Emote, Commande = emote, Raccourci = <kbd>Windows</kbd> + <kbd>;</kbd></li>
        </ul>
    </li>
</ul>

<p class="callout" data-variant="note">Une page du wiki de Emote est dédiée à la définition du raccourci clavier dans Gnome : <a href="https://github.com/tom-james-watson/Emote/wiki/Hotkey-In-Wayland">Hotkey In Wayland · tom-james-watson/Emote Wiki</a></p>


<h3 id="clipboard_history">📋 Historique presse papier</h3>

<p>Indispensable... et disponible avec une extension ! J'ai adopté Clipboard indicator, voir <a href="#clipboard_indicator">plus bas</a> !</p>

<figure>
    <a href="gnome_clipboard_indicator.webp"><img src="gnome_clipboard_indicator.webp" alt="Capture d'écran du menu de l'extension Clipboard Indicator" width="400"></a>
    <figcaption>Capture d'écran du menu de l'extension Clipboard Indicator</figcaption>
</figure>


<h3>🌙 Veille écran</h3>

<p>Par défaut, sur une courte inactivité (30s) l'écran devient noir.</p>

<p>Pour changer ce comportement, c'est possible avec <a href="https://apps.gnome.org/fr/DconfEditor/">Dconf editor</a> :</p>

<ul>
    <li>Ouvrir org → gnome → settings-daemon → plugins→power</li>
    <li>Modifier la valeur idle-brightness</li>
</ul>

<p class="callout" data-variant="info">Un fil de discussion sur ce problème : <a href="https://askubuntu.com/questions/1408394/my-screen-goes-black-after-30-seconds-of-inactivity-in-ubuntu-22-04/1519439#1519439">my screen goes black after 30 seconds of inactivity in Ubuntu 22.04 - Ask Ubuntu</a></p>


<h3 id="terminator">🧩 Terminator : configuration</h3>

<p class="callout" data-variant="tip">Pour accéder aux préférences : clic droit → Preferences</p>

<p>Terminator est le terminal par défaut sur Gnome. 2 options intéressantes à configurer dans ce logiciel :</p>

<ul>
    <li>Préférences → Profils → Général : <b>Copier la sélection</b><br>
    ℹ️ Dès que l'on sélectionne la chaine sera copiée dans le presse-papier. Vraiment utilisable si l'on a un historique du presse papier à disposition</li>
    <li>Préférences → Profils → Défilement : <b>Sur le côté gauche</b></li>
    <li>Préférences → Profils → Défilement : <b>Défilement infini</b><br>
    ℹ️ Sur les machines d'aujourd'hui on n'est pas à ce point limité en resources O:)</li>
</ul>



<?= writeHR() ?>



<h2 id="apps_utiles">Applications utiles</h2>


<h3 id="extension_manager">🧩 Gestionnaire d'extensions</h3>

<p>Indispensable pour la suite : permet de parcourir les extensions disponibles sur <a href="https://extensions.gnome.org/">https://extensions.gnome.org/</a>, de les installer / désactiver / supprimer en un clic !</p>

<figure>
    <a href="gnome_gestionnaire_extensions.webp"><img src="gnome_gestionnaire_extensions.webp" alt="Ecran principal du logiciel, avec une liste d'extensions" class="pretty-img screenshot-img"></a>
    <figcaption>Ecran principal du logiciel, avec une liste d'extensions</figcaption>
</figure>

<p class="callout" data-variant="info">A récupérer directement dans le magasin d'applications de l'OS, ou sur <a href="https://flathub.org/fr/apps/com.mattjakeman.ExtensionManager">https://flathub.org/fr/apps/com.mattjakeman.ExtensionManager</a></p>


<h3>💾 Gnome Save desktop</h3>

<p>Permet de sauvegarder et restaurer sa configuration Gnome, incluant les extensions. Indispensable !</p>

<p class="callout" data-variant="info">A récupérer sur <a href="https://github.com/vikdevelop/SaveDesktop">https://github.com/vikdevelop/SaveDesktop</a></p>


<h3 id="dolphin">📁 Gestionnaire de fichiers : Doplhin</h3>

<p>Nautilus, le gestionnaire de fichiers de Gnome est assez léger et pratique, mais il a un défaut fondamental pour moi : les onglets ouverts sont perdus à la fermeture... et ça n'est pas près de changer car c'est un ticket ouvert depuis... 2019 : <a href="https://gitlab.gnome.org/GNOME/nautilus/-/work_items/1196">State-saving: remember open tabs on quit (#1196) · Issue · GNOME/nautilus</a> !</p>

<p>🔍 Les fonctionnalités que je recherche particulièrement :</p>

<ul>
    <li>treeview de l'arborescence, avec focus sur le répertoire courant</li>
    <li>panneau d'emplacements personnalisables</li>
    <li>barre d'adresse modifiable au clavier</li>
    <li>multi onglets ré-ouverts au démarrage</li>
    <li>barre d'adresse modifiable au clavier</li>
    <li>gestion des archives (création, extraction, ouverture, modification)</li>
    <li>gestion des partages SMB et WebDav</li>
    <li>gestion SCP</li>
    <li>affichage des volumes montés et de l'espace occupé</li>
</ul>

<p>J'ai donc essayé plusieurs gestionnaire de fichiers (c'était en 2025, les choses ont peut être changé ensuite...) :</p>

<ul>
    <li><b>Nautilus</b> (défaut Gnome) : gère bien SMB et WebDav ! Mais... entre l'absence de treeview et des onglets persistants...</li>
    <li><b>Nemo</b> : inutilisable car mauvaise intégration thème sombre et pas possible de basculer en clair</li>
    <li><b>Dolphin</b> (le gestionnaire de KDE) : ❤️ toutes les fonctions que je recherche ! Même si 2 défauts importants : sur mon poste, il freeze régulièrement, et les SMB / WebDAV / SCP sont gérés mais ça n'est vraiment pas guidé !</li>
</ul>

<p>🥳J'ai adopté Dolphin !</p>

<div class="callout" data-variant="tip">
Quelques astuces sur Dolphin :

<ul>
    <li><b>Raccourci clavier</b> : par défaut le raccourci <kbd>Windows</kbd> + <kbd>E</kbd> n'est pas assigné, ça peut se configurer avec : Paramètres → Clavier → Raccourcis clavier → Voir et personnaliser les raccourcis puis Raccourcis personnalisés → +</li>
    <li><b>Archives</b> : nécessite potentiellement d'installer ark (<code>sudo apt install ark</code>) cf ce fil de discussion : <a href="https://askubuntu.com/questions/707665/no-archiving-compressing-tool-in-dolphin-context-menu-kubuntu-15-10/881271#881271">No archiving/compressing tool in Dolphin context menu (Kubuntu 15.10) - Ask Ubuntu</a></li>
    <li>URL emplacements réseaux (à configurer soit dans le panneau emplacements soit dans les signets) :
        <ul>
            <li><b>SMB</b> : <code>smb://user:password@host/share</code></li>
            <li><b>WebDAV</b> : <code>davs://user:password@host/path</code></li>
            <li><b>SCP</b> : <code>fish://user@host:port</code></li>
        </ul>
    </li>
</ul>
</div>


<h3 id="text_editor">📝 Editeur de texte : Kate</h3>

<p>Par défaut Gnome fournit GEdit, un éditeur léger et rapide... mais qui manque quand même de fonctionnalités de base !</p>

<p>J'ai installé en complément Kate, qui tout en restant léger et rapide propose en plus les fonctionnalités suivantes :</p>

<ul>
    <li>Beaucoup plus facile d'ouvrir de gros fichiers que dans GEdit !</li>
    <li>Un thème sombre efficace</li>
    <li>Meilleure coloration syntaxique</li>
    <li>Multi curseur 😍</li>
    <li>Code folding</li>
    <li>Permet de faire des recherches dans les fichiers d'un répertoire</li>
</ul>

<h3>📷 Capture d'écran : Gradia</h3>

<p>Gnome est livré avec un outil de capture d'écran de base très pratique !</p>

<p>Mais parfois on a aussi besoin de quelques fonctionnalités supplémentaires, et souvent lorsque l'on travaille sur des applications web ce sera :</p>

<ul>
    <li>Floutage</li>
    <li>Ajout de flèches, cadres, surbrillance, ...</li>
    <li>Ajout de texte</li>
</ul>

<p>Et Gradia est parfait pour ça !</p>

<p class="callout" data-variant="info">Le site officiel est assez court mais donne un bon aperçu de l'application : <a href="https://gradia.alexandervanhee.be/">Gradia</a></p>



<?= writeHR() ?>



<h2 id="extensions">🧩 Extensions Gnome</h2>

<p>Voici les extensions que j'utilise et dont j'aurai bien du mal à me passer !</p>


<h3>Navigation fenêtres</h3>

<dl>
    <dt><a href="https://extensions.gnome.org/extension/4412/advanced-alttab-window-switcher/">AATWS (Advanced Alt-Tab Window Switcher)</a></dt>
    <dd>Complète <b>personnalisation du <kbd>alt</kbd> + <kbd>tab</kbd> (et <kbd>windows</kbd> + <kbd>tab</kbd>)</b> avec beaucoup de fonctionnalités très sympathiques ! Par exemple :
        <ul>
            <li>Modification du bandeau affiché avec liste et miniatures des applications : j'ai pu le paramétrer pour l'afficher plus grand, afficher les titres de fenêtres, et modifier son ordre
            <li>Surlignage de l'application qui va récupérer le focus
            <li>Fenêtres réduites en dernier dans la liste
        </ul>
    </dd>
    <dt><a href="https://extensions.gnome.org/extension/4709/another-window-session-manager/">Another Window Session Manager</a></dt>
    <dd>Pour moi c'est un des défauts majeur de Gnome : les dimensions et positions des fenêtres ne sont pas vraiment enregistrées... Cette extension permet de créer des <b>profils pour sauvegarder le positionnement des fenêtres</b>. Ces profils peuvent être activés manuellement (une icone dans la top bar permet de les activer très rapidement) ou au démarrage. Dans les deux cas on pourra soit redimensionner / repositionner les fenêtres courantes, soit carrément ouvrir les applications manquantes.</dd>
    <dt><a href="https://extensions.gnome.org/extension/7855/dash-in-panel/">Dash in panel</a></dt>
    <dd>Utilisateur de Windows, j'aime pouvoir voir les applications ouvertes, et par conséquent savoir quel raccourci utiliser pour basculer sur quelle fenêtre (<kbd>Windows</kbd> + <kbd>chiffre</kbd>). Cette extension <b>ajoute le dash dans la top bar</b>, avec surlignage des applications lancées, masquage du bouton activities, possibilité de configurer le clic sur l'icone pour alterner entre focus et réduction de l'application (ou même cycle entre les fenêtres de l'application s'il y en a plusieures)</dd>
    <dt><a href="https://extensions.gnome.org/extension/7065/tiling-shell/">Tiling Shell</a></dt>
    <dd>Permet de créer des <b>dispositions de fenêtres en tuiles</b> et de les appeler par une icone dans la top bar, ou simplement de déplacer une fenêtre dans une tuile par glisser / déposer comme sur Windows</dd>
</dl>



<h3>Esthétique</h3>

<dl>
    <dt><a href="https://extensions.gnome.org/extension/1262/bing-wallpaper-changer/">Bing Wallpaper</a></dt>
    <dd><b>Personnalisation du papier peint avec les images du jour Bing</b> (une très belle collection que l'on peut parcourir sur <a href="https://dailybing.com/">Daily Bing</a>). Des options permettent de réaliser une sauvegarde en local avec un nettoyage automatique, de mettre des images en favoris ou dans la corbeille, de choisir une image au hasard sur une périodicité personnalisée.</dd>
    <dt><a href="https://extensions.gnome.org/extension/6313/dim-background-windows/">Dim Background Windows</a></dt>
    <dd>Sur les <b>fenêtres en arrière plan permet de modifier brightness et saturation</b>, désactivable sur raccourci. Très pratique pour ne jamais douter de la fenêtre qui a réellement le focus !</dd>
    <dt><a href="https://extensions.gnome.org/extension/3843/just-perfection/">Just perfection</a></dt>
    <dd><b>Très nombreuses personnalisation Gnome</b>. Sur ma configuration j'ai ajouté :
        <ul>
            <li>Personnalisation du contenu de la top bar et des menu
            <li>Suppression de la notification "la fenêtre est prête"
            <li>Dans l'overview, taper pour rechercher
            <li>Double appui sur <kbd>Windows</kbd> ouvre directement la grille des applications
            <li>Personnalise l'état de démarrage (sur le bureau plutôt que dans l'overview)
            <li>Position de l'horloge (au centre de la top bar pour moi 😇)
        </ul>
    </dd>
    <dt><a href="https://extensions.gnome.org/extension/6580/open-bar/">Open Bar</a></dt>
    <dd><b>Personnalisation supplémentaire de la top bar</b>. Les options que je retiens particulièrement :
        <ul>
            <li>Mode Trilands : zone opaques à gauche, centre, droite et le reste en transparence
            <li>Foreground, background (gradient, alpha, palette), height, margins
            <li>Bar border
            <li>Window max-bar : apparence différente si une fenêtre est maximisée
        </ul>
    </dd>
</dl>



<h3>Top bar informations supplémentaires</h3>

<dl>
    <dt><a href="https://extensions.gnome.org/extension/6682/astra-monitor/">Astra Monitor</a></dt>
    <dd><b>Des moniteurs système dans la top bar</b>, complètement personnalisables, et qui peuvent être repliés par défaut</dd>
    <dt><a href="https://extensions.gnome.org/extension/595/autohide-battery/">Autohide battery</a></dt>
    <dd><b>Masque la batterie sur seuil</b></dd>
    <dt><a href="https://extensions.gnome.org/extension/5718/battery-indicator-icon/">Battery indicator icon</a></dt>
    <dd>Pour afficher une <b>icone plus sympa que celle par défaut</b>, avec pas mal de possibilités !</dd>
    <dt><a href="https://extensions.gnome.org/extension/2929/battery-time-percentage-compact/">Battery time (Percentage) Compact</a></dt>
    <dd>Affiche le <b>temps restant pour décharge ou charge</b> à côté de l'icone de batterie</dd>
    <dt><a href="https://extensions.gnome.org/extension/6670/bluetooth-battery-meter/">Bluetooth Battery Meter</a></dt>
    <dd>Affiche le <b>niveau de batterie des périphériques Bluetooth</b></dd>
    <dt><a href="https://extensions.gnome.org/extension/2917/bring-out-submenu-of-power-offlogout-button/">Bring Out Submenu Of Power Off Button</a></dt>
    <dd>Par défaut, on a un seul menu alimentation qui ouvre un sous menu. Cette extension permet de <b>créer des boutons à côté pour atteindre plus rapidement les actions habituelles</b> comme éteindre ou se déconnecter</dd>
</dl>



<h3>Notifications</h3>

<dl>
    <dt><a href="https://extensions.gnome.org/extension/6940/media-progress/">Media Progress</a></dt>
    <dd>Affiche une <b>carte sur la lecture multimédia</b> en cours avec la vignette, le nom et la progression et enfin une icone de pause</dd>
    <dt><a href="https://extensions.gnome.org/extension/4651/notification-banner-reloaded/">Notification Banner Reloaded</a></dt>
    <dd><b>Personnalisation des animations des notifications</b> : horizontale /verticale, position / padding, animation direction / durée</dd>
    <dt><a href="https://extensions.gnome.org/extension/8249/notification-configurator/">Notification Configurator</a></dt>
    <dd>Beaucoup d'<b>options de personnalisation</b>. Je retiens particulièrement : rate limiting, timeout, filtering, themes</dd>
    <dt><a href="https://extensions.gnome.org/extension/8106/top-panel-notification-icons-w-count/">Top Panel Notification Icons /w Count</a></dt>
    <dd>Pour chaque notification ajoute <b>dans la top bar une icone</b> avec l'application d'origine et le nombre de notifications</dd>
</dl>



<h3>Fonctionnalités supplémentaires</h3>

<dl>
    <dt><a href="https://extensions.gnome.org/extension/779/clipboard-indicator/" id="clipboard_indicator">Clipboard indicator</a></dt>
    <dd><b>Historique du presse papier</b>, accessible sur raccourci clavier : de quoi retrouver le <kbd>Windows</kbd> + <kbd>v</kbd> auquel je suis habitué ❤️</dd>
    <dt><a href="https://extensions.gnome.org/extension/53/pomodoro/">Pomodoro</a></dt>
    <dd>Inclus de base, pas besoin d'installer ! Comme son nom l'indique <b>ajoute dans la top bar un minuteur <a href="https://fr.wikipedia.org/wiki/Technique_Pomodoro">Pomodoro</a></b>. Personnalisation possible de la durée de travail, des pauses et pauses longues, du nombre de répétitions avant une pause longue</dd>
    <dt><a href="https://extensions.gnome.org/extension/7/removable-drive-menu/">Removable Drive Menu</a></dt>
    <dd><b>Ajoute dans la top bar une icone de déconnexion</b> quand on a un media amovible connecté</dd>
    <dt><a href="https://extensions.gnome.org/extension/4356/top-bar-organizer/">Top Bar Organizer</a></dt>
    <dd>Indispensable ! Permet de complètement <b>configurer l'ordre d'affichage dans la top bar</b> (zones gauche, centre, droite)</dd>
    <dt><a href="https://extensions.gnome.org/extension/1414/unblank/">Unblanck lock screen</a></dt>
    <dd><b>N'éteint pas tout de suite l'écran lorsque la session est verrouillée</b>. Pratique pour les écrans qui nécessitent du temps pour sortir de veille !<br>
    Cf <a href="https://www.reddit.com/r/archlinux/comments/1bwg4d4/how_do_i_prevent_gnome_from_turning_off_my/">Comment puis-je empêcher GNOME d'éteindre mes écrans lorsque je verrouille ma session ? : r/archlinux</a></dd>
    <dt><a href="https://extensions.gnome.org/extension/5416/wifi-qrcode/">Wifi QR Code</a></dt>
    <dd>Permet d'afficher un <b>QR code du Wifi actif</b>, dans le drop down système de la top bar</dd>
    <dt><a href="https://extensions.gnome.org/extension/6784/wiggle/">Wiggle</a></dt>
    <dd>Permet de <b>retrouver son curseur de souris</b> : après l'avoir agité pendant un temps donné, le curseur est agrandit.<br>
    ℹ️Il existe aussi une option dans les paramètres Gnome d'accessibilité : l'appui répété de la touche <kbd>Ctrl</kbd> ajoute sur le curseur un effet de surbrillance</dd>
</dl>



<h3>Inutile et donc indispensable</h3>

<dl>
    <dt><a href="https://extensions.gnome.org/extension/7036/eye-on-cursor/">Eye on cursor</a></dt>
    <dd><b>Implémentation du mythique <a href="https://fr.wikipedia.org/wiki/Xeyes">Xeyes</a></b>. En 1997 je découvrais XWindow et ce génial "utilitaire", et depuis j'ai toujours eu l'équivalent sur mes machines de travail ! Hé bien, cette extension me permet de retrouver avec bonheur dans la top bar ces yeux qui suivent le curseur de souris !</dd>
    <dt><a href="https://extensions.gnome.org/extension/4679/burn-my-windows/">Burn My Windows</a></dt>
    <dd><b>Ajout des effets à l'ouverture et fermeture de fenêtres</b>, avec tout ce qu'il faut pour personnaliser (effet autorisé, exclusions, ...).<br>
    Le nombre d'effets est dingue (à voir sur <a href="https://github.com/schneegans/burn-my-windows">le Github du projet</a> !) et très éclectique !</dd>
</dl>



<?= writeHR() ?>



<?
require_once($RelBasePath . 'communs/footer.inc.php');
?>



<hr class="sep sepfin">



</body>
</html>
<?php ob_end_flush(); ?>
