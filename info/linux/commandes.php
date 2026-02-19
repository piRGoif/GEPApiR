<?php ob_start('ob_gzhandler');
$date_creation = "26/10/2025";
$date_maj = "19/02/2026";

// NAVIGATION
$RelBasePath = "../../";
$title = "Commandes utiles - Linux - Informatique [GEPApiR]";

require_once($RelBasePath . 'communs/header1.inc.php');
require_once($RelBasePath . 'communs/highlight.inc.php');
require_once($RelBasePath . 'communs/toc/toc-js.inc.html');
require_once($RelBasePath . 'communs/header2.inc.php');
?>

<h1>
    <?
    require_once('../info_h1.inc');
    ?><br>
    Linux - Commandes utiles
</h1>



<?
require_once($RelBasePath . 'communs/toc/toc-html.inc.html');
?>



<?= writeHR() ?>



<h2>Introduction</h2>

<p>
    En utilisant occasionnellement la ligne de commande sur des serveurs, j'ai eu besoin d'un "pense-bête" pour retrouver rapidement 
    les commandes utiles. J'ai fini par décider de le partager sur mon site, si jamais ça peut être utile à d'autres ! 
</p>
<p>
    Cette liste est très adaptée à mes usages, et sans doute pas aux votres... Peut être vous servira-t-il de base ! <br>
    Souvent, ce genre de besoin est remplit par des "cheat sheets"... mais je n'en ai jamais trouvé de 
    suffisemment adaptée à mes besoins...
</p>
<p class="callout" data-variant="tip">
    Le site de référence des cheat sheets en regroupe plusieurs pour la <abbr title="Command Line Interface">CLI</abbr> Linux : <a href="https://cheatography.com/tag/commandline/">20 Commandline Cheat Sheets - Cheatography.com: Cheat Sheets For Every Occasion</a>.
</p>



<?= writeHR() ?>



<h2>Opérations usuelles</h2>

<h3>Copie répertoire</h3>

<pre><code class="bash"><?echo htmlspecialchars(<<<'HTML'
cp -r /my_directory <target>

cp -aR source/. destination
# a = preserve file attrib + symlinks
# . = copie aussi fichiers / dossiers cachés
HTML
);?>
</code></pre>

<h3>Contenu fichier</h3>

<h4><code>cat</code>, <code>more</code>, <code>less</code></h4>

<p>Quelles différences ?</p>

<table>
    <thead>
        <tr>
            <th>Outil</th>
            <th>Scrolling</th>
            <th>Recherche</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th>cat</th>
            <td>❌ (sortie directement dans la console)</td>
            <td>❌</td>
        </tr>
        <tr>
            <th>more</th>
            <td>2 sens : <kbd>entrée</kbd> pour ligne suivante, <kbd>espace</kbd> pour page suivante, <kbd>b</kbd> pour page précédente</td>
            <td>❌</td>
        </tr>
        <tr>
            <th>less</th>
            <td>2 sens : idem more + <kbd>flèches</kbd> du clavier</td>
            <td>idem VI</td>
        </tr>
    </tbody>
</table>

<p class="callout" data-variant="note">
    A noter que <code>less</code> est utilisé pour toutes les pages <code>man</code> !
</p>

<p class="callout" data-variant="info">Article intéressant au sujet de ces 3 commandes : <a href="https://www.baeldung.com/linux/files-cat-more-less">Viewing Files in Linux Using cat, more, and less | Baeldung on Linux</a></p>

<p class="callout" data-variant="tip">
    Il existe bat, qui apporte beaucoup d'améliorations dont la coloration syntaxique !<br>
    Voir le site officiel : <a href="https://github.com/sharkdp/bat">sharkdp/bat: A cat(1) clone with wings.</a><br>
    Ou cet article sur le site de Stéphane Robert : <a href="https://blog.stephane-robert.info/docs/outils/fichiers/bat/">bat, un cat survitaminé</a>
</p>

<h4>Logs</h4>

<p>Les commandes <code>head</code> et <code>tail</code> pour voir contenu en début ou fin de fichier. Par défaut, les 2 commandes affichent 10 lignes, pour changer ce nombre utiliser <code>-n &lt;nb_lignes></code> ou simplement <code>- &lt;nb_lignes></code> (ancienne syntaxe).<br>
Le paramètre <code>f</code> permet de rafraichir en continu, pratique pour suivre un log par exemple !</p>

<pre><code class="bash"><?echo htmlspecialchars(<<<'HTML'
tail -2000f wildfly/standalone/log/server.log
tail -2000f wildfly/standalone/log/server.log | grep "fr.mycompany.product."

<commande> | head
<commande> | tail
<commande> | tail -n 100
    
watch <commande> # rafraichit l'affichage de la commande toutes les 2 secondes
# -d pour surligner les différences entre chaque rafraichissement
# -n <secondes> indique une période de rafraichissement personnalisée (le défaut est de 2s)
   
tail -f <fichier> | grep "chaine" | tee -a output.log # la sortie est affichée dans stdout et également envoyée dans output.log en append (paramètre a)

<commande> 2>&1 # renvoie stderr et stdout
HTML
);?></code></pre>


<h3>Contenu arborescence</h3>

<p>Avec la commande <code>tree</code> on peut afficher le contenu d'une arborescence</p>

<pre><code class="bash"><?echo htmlspecialchars(<<<'HTML'
tree -adugph ~/Documents/logs | less
# a = all
# d = uniquement répertoire
# l = suit les symlinks
# f = affiche le chemin complet
# L = nb max niveaux, exemple -L 2
# u = affiche user
# g = affiche group
# p = affiche type et permissions
# s = affiche la taille en octets
# h = affiche la taille "human readable"
# --du = taille cumulée
# c = trie par date dernière modif
# r = ordre inverse
HTML
);?></code></pre>


<h3>Permissions</h3>

<pre><code class="bash"><?echo htmlspecialchars(<<<'HTML'
chmod +wx <fichier> # ajout à tous drois d'écriture et exécution
# options possibles :
# u : user (propriétaire)
# g : group
# o : others
# + / - / = (égal : écrase)
# r / w / x
chmod g+x <fichier> # droit d'exécution au groupe

chown -R www-data . # pour le dossier courant et récursivement change le groupe
chown -R www-data:www-data . # pour le dossier courant et récursivement change groupe et propriétaire

usermod -a -G www-data pierre # ajoute le groupe www-data à l'utilisateur pierre
HTML
);?></code></pre>


<h3>Historique</h3>

<p class="callout" data-variant="info">Sur le shell le raccourci <kbd>Ctrl</kbd>+<kbd>R</kbd> permet de rechercher dans l'historique des commandes. Indispensable !</p>

<p>Et d'autres commandes utiles :</p>

<pre><code class="bash">history # historique des commandes
cd - # bascule sur le répertoire précédent
cd $OLDPWD # idem mais avec var d'env
</code></pre>

<p class="callout" data-variant="tip">
    Les variables d'environnement <code>PWD</code> et <code>OLDPWD</code> sont automatiquement remplies par le shell.
</p>

<p class="callout" data-variant="info">
    Une page sur le sujet : <a href="https://techpiezo.com/linux/pwd-vs-oldpwd-bash-environment-variables/">PWD vs OLDPWD – Bash environment variables – techPiezo</a>
</p>


<h3>Comptage</h3>

<pre><code class="bash"><?echo htmlspecialchars(<<<'HTML'
<commande> | wc -l
HTML
);?></code></pre>

<p>Paramètre <code>l</code> pour le nombre de lignes.</p>



<?= writeHR() ?>



<h2>Recherche fichiers</h2>

<h3>Find</h3>

<p>Un outil destiné à trouver des fichiers à partir de leurs attributs.<br>
Les options :</p>

<ul>
<li><code>mtime</code> : modification en jour</li>
<li><code>atime</code> : access en jour</li>
<li><code>mmin</code> : modification en minutes</li>
<li><code>amin</code> : access en minutes</li>
</ul>

<p>Valeur avec + pour &gt;, - pour &lt;, et rien pour valeur exacte.</p>

<p>Autres options :</p>
<ul>
<li><code>maxdepth</code> : attention doit être précisé avant type !</li>
<li><code>type</code> : f pour fichier</li>
<li><code>name</code></li>
<li><code>ls</code> : donne le même résultat que la commande ls (donc info de taille, date, droits, etc)</li>
</ul>

<pre><code class="bash"><?echo htmlspecialchars(<<<'HTML'
find /my_directory -mtime
find /my_directory -name <name>

# Fichiers modifiés pendant les dernières 180min
# le -exec pour afficher les noms de fichiers contenant la chaine <string>
find /my_directory -mmin -180 -type f -exec grep -l '<string>' {} +

# Fichiers modifiés il y a au moins 183 jours ou plus
# le -exec pour déplacer chaque fichier trouvé dans un répertoire _archive
find . -maxdepth 1 -type f -mtime +183 -exec mv {} _archive/ \;
HTML
);?></code></pre>

<p class="callout" data-variant="info">
    Pour aller plus loin, le toujours excellent Stéphane Robert a une page parfaite sur l'outil : <a href="https://blog.stephane-robert.info/docs/admin-serveurs/linux/find/">Maîtriser Find : Recherche Linux efficace</a>
</p>

<h3>Grep</h3>

<p>Cet outil-ci est destiné à trouver des fichiers à partir de leur contenu.</p>

<pre><code class="bash"><?echo htmlspecialchars(<<<'HTML'
grep "<chaine>" <sources_sep_space>
grep -l <chaine> <file>
grep -rn <file> -e "<pattern>"
# l = liste fichiers
# r = recursive
# i = not case sensitive
# n = affiche le no de ligne
# c = compte le nb d'occurrences, liste chaque fichier

# Déplacer les fichiers trouvés :
grep -lir <chaine>" <source> | xargs mv -t <dest>
HTML
);?></code></pre>

<p class="callout" data-variant="tip"><code>zgrep</code> : recherche dans les fichiers normaux mais aussi les archives gzip !</p>



<?= writeHR() ?>



<h2>Disque et fichiers</h2>

<h3>Info fichiers</h3>

<pre><code class="bash"><?echo htmlspecialchars(<<<'HTML'
stat <fichier> # infos dont le type (fichier, répertoire, symlink), les dates, ...
HTML
);?></code></pre>

<h3>Stats espace disque</h3>

<p>Espace disponible et occupé sur les différents points de montage :</p>

<pre><code class="bash">df -h
df -h /my_directory
</code></pre>

<p>Espace occupé dans les différents sous-répertoires, avec total :</p>

<pre><code class="bash"><?echo htmlspecialchars(<<<'HTML'
du -sch *
du -sch dir1/ dir2/ dir3/
du -sch * --exclude=/my_directory
HTML
);?></code></pre>

<p>Espace par sous répertoire éclaté, trié par ordre croissant :</p>

<pre><code class="bash">du -Sm | sort -n</code></pre>

<p>Stats sur les iNodes :</p>

<pre><code class="bash">df -i</code></pre>


<h3>Ménage disque</h3>

<p>Suppression de répertoire (paramètre <code>r</code>=récursif, <code>f</code>=force) :</p>

<pre><code class="bash">rm -rf /my_directory</code></pre>
    
<p>Création lien symbolique (paramètre <code>-s</code> pour lien symbolique plutôt que physique) :</p>

<pre><code class="bash"><?echo htmlspecialchars(<<<'HTML'
ln -s my_directory_target my_link_name
HTML
);?></code></pre>


<h3>Archives</h3>

<h4>Création</h4>

<p>Création d'une archive gzip pour un fichier :</p>

<p class="callout" data-variant="tip">Par défaut la commande gzip va supprimer le fichier source en fin de traitement</p>

<pre><code class="bash"><?echo htmlspecialchars(<<<'HTML'
gzip fichier_source.log
gzip -9 <fichier>
# 1..9 : niveau de compression, 9 pour le max, défaut 6
# r = recursive
# v = verbose
# k = conserve le fichier source

cat data3673693003010299638.data.xml | gzip -9 > /tmp/grosxml.gz
mysqldump database_name | gzip -c > database_name.sql.gz
HTML
);?></code></pre>

<p>Création d'une archive tar compressée :</p>

<pre><code class="bash"><?echo htmlspecialchars(<<<'HTML'
tar -czvf <dest>.tar.gz <source>
# c = create
# z = ajoute la compression gzip
# v = verbose
# f = utilise le fichier donné en paramètre
HTML
);?></code></pre>

<h4>Décompression</h4>

<pre><code class="bash"><?echo htmlspecialchars(<<<'HTML'
unzip file.zip -d my_directory

gzip -d file.gz
# d = extrait (identique à gunzip)
gunzip file.gz
gunzip *.gz
# k = conserver archive
# r = recursive
# l = liste les fichiers
# lv = list verbose

find . -name "*.gz" -exec gunzip {} \;
HTML
);?></code></pre>

<p>Extraction d'un <code>.tar.gz</code> :</p>

<pre><code class="bash"><?echo htmlspecialchars(<<<'HTML'
tar -xvf <archive>
# x = extrait une archive
HTML
);?></code></pre>



<?= writeHR() ?>



<h2>Serveur</h2>

<h3>Transferts</h3>

<p>L'utilitaire SCP permet de transférer des fichiers à une machine sur laquelle on a un accès SSH.</p>

<pre><code class="bash"><?echo htmlspecialchars(<<<'HTML'
scp /file/to/send username@remote:/where/to/put/remotely
scp -P 10022 <file> myuser@mymachine.fr:/tmp # -P : n° port si différent du 22 par défaut
scp username@remote:/file/to/receive /where/to/put/locally
scp username@remote_1:/file/to/get username@remote_2:/where/to/put
HTML
);?></code></pre>

<p>De son côté rsync est un utilitaire de... synchronisation, comme son nom l'indique !</p>

<pre><code class="bash"><?echo htmlspecialchars(<<<'HTML'
rsync -e "ssh -p 10022" -avnz <source> <dest>
# -e : remote shell program to use (permet de spécifier un port ssh différent)
# a = all
# v = verbose
# n = dry run
# z = compress
# i = itemize-changes (liste chg sur les fichiers)
# c = comp sur taille plutôt que date
# --exclude /chemin/du/dossier/ (avec / relatif à source)
HTML
);?></code></pre>

<p class="callout" data-variant="info">
    Une excellente documentation de <code>rsync</code> est disponible sur ubuntu-fr : <a href="https://doc.ubuntu-fr.org/rsync">rsync [Wiki ubuntu-fr]</a>
</p>


<h3>Daemon</h3>

<pre><code class="bash"><?echo htmlspecialchars(<<<'HTML'
sudo systemctl disable mariadb # arrête le démarrage automatique au boot de la machine
sudo systemctl stop mariadb apache2
sudo systemctl start mariadb apache2
sudo systemctl status mariadb apache2
HTML
);?></code></pre>


<h3>Enchaînement de commandes</h3>

<p>Particulièrement utile dans un DockerFile ou pour une CI !</p>

<pre><code class="bash"><?echo htmlspecialchars(<<<'HTML'
commande & # lance en arrière plan
commande1 && commande2 && commande3 # chaîne plusieurs commandes, arrêt si erreur
commande1 || commande2 || commande 3 # chaîne plusieurs commande, arrêt si succès
commande1 ; commande2 ; commande3 # chaine quelque soit le code de retour

echo $? # code retour dernière commande (BASH)
echo $status # idem dans Fish
HTML
);?></code></pre>


<h3>Docker</h3>

<pre><code class="bash"><?echo htmlspecialchars(<<<'HTML'
docker logs -f <nom_container>
    
docker exec -ti <nom_container> bash
# t = allocate tty
# i = interactive

docker compose build # construit uniquement les images
docker compose pull # maj des images

docker compose up # build + run images
docker compose up -d # d = detached
docker compose start # démarrage des containers existants uniquement

docker compose ps # état des services

docker compose stop # arrêt SANS suppr containers
docker compose down # arrêt AVEC suppr containers
docker compose rm # suppr container arrêtés
HTML
);?></code></pre>

<p class="callout" data-variant="warning">
    Bien faire attention entre les 2 commandes d'arrêt !<br> 
    <strong>stop</strong> = simple arrêt de service<br>
    <strong>down</strong> = détruit tout (containers, réseaux, volumes associés) !
</p>


<?= writeHR() ?>



<h2>Processus</h2>

<h3>Liste</h3>

<pre><code class="bash">ps aux
ps -afu my_user
</code></pre>

<p>Les paramètres de <code>ps</code> :</p>

<ul>
    <li><code>aux</code> : tous les processus de tous les utilisateurs (attention pas de tiret !)</li>
    <li><code>-a</code> : tous les processus (sauf certains non rattachés à un terminal)</li>
    <li><code>-u my_user</code> : les processus de my_user</li>
    <li><code>-f</code> : "full format listing"</li>
</ul>

<p>La liste des process par user peut être utile pour lister les cron toujours en cours !<br>
Pour éditer la crontab :</p>

<pre><code class="bash">crontab -e</code></pre>

<h3>Performances</h3>

<pre><code class="bash">htop # TUI de visualisation des processus et des resources utilisées, avec tri, filtre, etc
iotop # idem pour les I/O !
</code></pre>



<?= writeHR() ?>



<h2 id="vi">VI</h2>

<h3>VI, VIM, NeoVim ?</h3>

<p>Formé à VI pendant les études, je l'ai utilisé pendant des années (décennies ?). Mais en fait, j'ai fini par me poser la question d'utiliser d'autres éditeurs dont j'entendais les noms de plus en plus.</p>

<p>Pour faire simple : </p>

<dl>
    <dt><a href="https://fr.wikipedia.org/wiki/Vi">VI</a></dt>
    <dd>L'ancètre, apparu en 1976 (!!)</dd>
    <dt><a href="https://fr.wikipedia.org/wiki/Vim">VIM</a></dt>
    <dd>Clone apparu en 1991. Apporte principalement la coloration syntaxique et l'indentation automatique !<br>
    Pour plus de détails sur les différences, voir <a href="https://doc.fedora-fr.org/wiki/Diff%C3%A9rences_entre_vi_et_vim">Différences entre vi et vim — Documentation Fedora-Fr</a></dd>
    <dt><a href="https://fr.wikipedia.org/wiki/Neovim">NeoVim</a></dt>
    <dd>Tout récent (le site officiel a un tld en .io même ! :o) ), ce clone est apparu en 2014.<br>
    La documentation du logiciel détaille les différences avec VIM : <a href="https://neovim.io/doc/user/vim_diff.html">Vim_diff - Neovim docs</a></dd>
</dl>

<p class="callout" data-variant="note">
    Sur mon poste de travail j'utilise majoritairement des éditeurs ou IDE graphiques, et sur tous les serveurs que j'utilise VIM est présent à contrario de NeoVIM : c'est donc lui que j'utilise maintenant !
</p>

<h3 id="vi-commands">Commandes</h3>

<ul>
    <li><strong>Divers</strong>
        <ul>
            <li><kbd>d</kbd><kbd>d</kbd> remove line</li>
            <li><kbd>:</kbd><kbd>e</kbd> reload file</li>
            <li>Afficher les n° de ligne, en mode commande : <code>:set number</code>, et désactiver avec <code>:set nonumber</code></li>
        </ul>
    </li>
    <li><strong>Recherche</strong>
        <ul>
            <li><kbd>/</kbd> search forward</li>
            <li><kbd>?</kbd> search backward</li>
            <li><kbd>n</kbd> search next</li>
            <li><kbd>N</kbd> search previous</li>
        </ul>
    </li>
    <li><strong>Navigation</strong>
        <ul>
            <li><kbd>g</kbd><kbd>g</kbd> goto beginning of file</li>
            <li><kbd>G</kbd> goto end of file</li>
            <li><kbd>:</kbd><kbd>1</kbd><kbd>2</kbd> goto line 12</li>
        </ul>
    </li>
    <li><strong>Copier / coller</strong>
        <ul>
            <li><kbd>y</kbd><kbd>y</kbd> ou <kbd>Y</kbd> yank line (copy)</li>
            <li><kbd>p</kbd> paste after</li>
            <li><kbd>P</kbd> paste before</li>
            <li><kbd>Y</kbd><kbd>P</kbd> / <kbd>Y</kbd><kbd>p</kbd> / <kbd>y</kbd><kbd>y</kbd><kbd>p</kbd> copy and paste line</li>
            <li>Autoriser le copier/coller et la sélection à la souris, en mode commande : <code>:set mouse=r</code></li>
        </ul>
    </li>
</ul>

<h3 id="vimdiff">Comparer 2 fichiers avec <code>vimdiff</code></h3>

<p>Très pratique en particulier sur un serveur ! L'usage est ultra simple :</p>

<pre><code class="bash">vimdiff fichier1.txt fichier2.txt</code></pre>

<p>Avec <code>fichier1</code> affiché à gauche et <code>fichier2</code> à droite. Les commandes VIM classiques sont alors utilisables.</p>



<?= writeHR() ?>



<h2>Resources</h2>

<dl>
    <dt><a href="https://manpages.debian.org/">index — Debian Manpages</a></dt>
    <dd>Les <a href="https://fr.wikipedia.org/wiki/Man_(Unix)">pages man</a> accessibles en ligne</dd>
    <dt><a href="https://tldr.sh/">tldr pages</a></dt>
    <dd>Un équivalent de man mais qui donne des exemples d'usage synthétiques plutôt que de la documentation détaillée</dd>
    <dt><a href="https://doc.ubuntu-fr.org/projets/ecole/scripting/initiation_au_shell">projets:ecole:scripting:initiation_au_shell [Wiki ubuntu-fr]</a></dt>
    <dd>Excellent guide d'apprentissage chez Ubuntu FR !</dd>
    <dt><a href="https://blog.stephane-robert.info/docs/admin-serveurs/linux/shells-linux/">C'est quoi un Shell ?</a></dt>
    <dd>Un autre guide sur le site du toujours excellent Stéphane Robert : de quoi apprendre toutes les bases !</dd>
    <dt><a href="https://github.com/phyver/GameShell?tab=readme-ov-file">phyver/GameShell: a game to learn (or teach) how to use standard commands in a Unix shell</a></dt>
    <dd>Un jeu pour apprendre à utiliser les commandes de base d'un shell Unix... à exécuter directement dans le terminal !</dd>
</dl>



<?= writeHR() ?>



<?
require_once($RelBasePath . 'communs/dates-maj-footer.inc.php');
?>



<hr class="sep sepfin">



</body>
</html>
<?php ob_end_flush(); ?>
