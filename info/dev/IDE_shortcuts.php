<?php
ob_start('ob_gzhandler');
$date_creation = "19/10/2014";
$date_maj = "23/10/2014";

// NAVIGATION
$RelBasePath = "../../";
$title = "IDE, principaux raccourcis - Informatique [GEPApiR]";

require_once($RelBasePath . 'communs/header1.inc');
?>
<style>
table {
    margin: 1.5em auto;
    border-collapse: collapse;
}
table tbody tr:first-child th {
    background-color: black;
    color: white;
}
table tbody tr:nth-child(odd) {
    background-color: grey;
}
table tbody tr:nth-child(even) {
    background-color: white;
}
table th, table td {
    border: 1px solid black;
    padding: 0.2em 0.4em;
}
table thead th {
    font-size: 1.8em;
    padding: 0.4em;
}
table td:first-child {
    text-align: right;
}
table td:not(:first-child) {
    text-align: center;
}

.content span.kbd {
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    -o-border-radius: 4px;
    -khtml-border-radius: 4px;
    border-radius: 4px;
    border-style: outset;
    border: 1px solid #aaa;
    background: #fafafa;
    padding: 0px 3px 1px 3px;
    margin: 0px 0px 0px 0px;
    vertical-align: baseline;
    line-height: 1.8em;
    white-space: nowrap;
}
</style>
<?
require_once($RelBasePath . 'communs/header2.inc');
?>



<h1>
    <?
    require_once('../info_h1.inc');
    ?><br>
    IDE, principaux raccourcis
</h1>



<?= writeHR() ?>



<p>Petite liste non exhaustive bien sûr, juste quelques raccourcis utilisés au quotidien
    dans les 2 IDE pratiqués... Sachant que l'un comme l'autre propose d'utiliser
    les mappings de son concurrent :)</p>

<table>
    <thead>
        <tr>
            <th>Fonction</th>
            <th>Netbeans</th>
            <th>Eclipse</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th colspan="3">Editeur</th>
        </tr>
        <tr>
            <td>Undo</td>
            <td colspan="2">Ctrl+Z</td>
        </tr>
        <tr>
            <td>Redo</td>
            <td colspan="2">Ctrl+Y</td>
        </tr>
        <tr>
            <td>Aller à la ligne</td>
            <td>Ctrl+G</td>
            <td>Ctrl+L</td>
        </tr>
        <tr>
            <td>Indenter/dé-indenter</td>
            <td colspan="2">[Shift+]Tab</td>
        </tr>
        <tr>
            <td>Supprimer la/les lignes</td>
            <td>Ctrl+E</td>
            <td>Ctrl+D</td>
        </tr>
        <tr>
            <td>Aller à la parenthèse/accolade correspondante</td>
            <td>buggé sur clavier FR<sup>[<a href="#fn1">1</a>]</sup></td>
            <td>Ctrl+Shift+P</td>
        </tr>
        <tr>
            <td>Sélectionner mot</td>
            <td>buggé sur clavier FR<sup>[<a href="#fn1">1</a>]</sup></td>
            <td>Ctrl+Shift+&lt;flèche haut></td>
        </tr>
        <tr>
            <td>Déplace la/les ligne(s)</td>
            <td>Alt+Shift+&lt;flèche haut/bas></td>
            <td>Alt+&lt;flèche haut/bas></td>
        </tr>
        <tr>
            <td>Duplique la/les ligne(s)</td>
            <td>Ctrl+Shift+&lt;flèche haut/bas></td>
            <td>Ctrl+Alt+&lt;flèche haut/bas></td>
        </tr>
        <tr>
            <td>Recherche incrémentale</td>
            <td>Ctrl+F</td>
            <td>Ctrl+J</td>
        </tr>
        <tr>
            <td>Mise en commentaire</td>
            <td>buggé sur clavier FR<sup>[<a href="#fn1">1</a>]</sup></td>
            <td>Ctrl+Shift+C</td>
        </tr>
        <tr>
            <td>Format code</td>
            <td>Alt+Shift+F</td>
            <td>Ctrl+Shift+F</td>
        </tr>
        <tr>
            <td>Fix uses/imports</td>
            <td>Ctrl+Shift+I</td>
            <td>Ctrl+Shift+O</td>
        </tr>
        <tr>
            <td>Afficher hint</td>
            <td>Alt+Enter</td>
            <td>-</td>
        </tr>
        <tr>
            <td>Générer code (getter/setter, unimplemented, ...)</td>
            <td>Alt+Ins</td>
            <td>Ctrl+1 (quick fix)</td>
        </tr>
        <tr>
            <td>Toggle bookmark</td>
            <td>Ctrl+Shift+M</td>
            <td>-</td>
        </tr>
        <tr>
            <td>Maximise la fenêtre</td>
            <td>Shift+Esc</td>
            <td>Ctrl+M</td>
        </tr>
        <tr>
            <td>Parcours historique des éditions</td>
            <td colspan="2">Alt+&lt;flèche gauche/droite></td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <th colspan="3">Navigation dans le source</th>
        </tr>
        <tr>
            <td>Aller à une classe</td>
            <td>Ctrl+O</td>
            <td>Ctrl+Shift+T</td>
        </tr>
        <tr>
            <td>Aller à un fichier</td>
            <td>Alt+Shift+O</td>
            <td>Ctrl+Shift+R</td>
        </tr>
        <tr>
            <td>Aller au membre</td>
            <td>Ctrl+7, &lt;saisie>, Ctrl+0</td>
            <td>Ctrl+O</td>
        </tr>
        <tr>
            <td>Ouvrir déclaration</td>
            <td>Ctrl+B</td>
            <td>F3</td>
        </tr>
        <tr>
            <td>Hiérarchie</td>
            <td>Alt+Shift+F12</td>
            <td>Ctrl+T</td>
        </tr>
        <tr>
            <td>Call hierarchy</td>
            <td>Alt+Shift+3</td>
            <td>Ctrl+Alt+H</td>
        </tr>
        <tr>
            <td>Usages</td>
            <td>Alt+F7</td>
            <td>Ctrl+Shift+G</td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <th colspan="3">Refactoring</th>
        </tr>
        <tr>
            <td>Renommer</td>
            <td>Ctrl+R</td>
            <td>Alt+Shift+R</td>
        </tr>
    <tbody>
        <tr>
            <th colspan="3">Gestion fenêtres IDE</th>
        </tr>
        <tr>
            <td>Parcours des éditeurs ouverts</td>
            <td>Ctrl[+Shift]+Tab</td>
            <td>Ctrl+F6</td>
        </tr>
        <tr>
            <td>Liste des fichiers ouverts</td>
            <td>Shift+F4</td>
            <td>Ctrl+E</td>
        </tr>
        <tr>
            <td>Afficher dans la vue Projects</td>
            <td>Ctrl+Shift+1</td>
            <td>-</td>
        </tr>
        <tr>
            <td>Editeur</td>
            <td>Ctrl+0</td>
            <td>F12</td>
        </tr>
        <tr>
            <td>Navigateur</td>
            <td>Ctrl+7</td>
            <td>-</td>
        </tr>
        <tr>
            <td>Output</td>
            <td>Ctrl+4</td>
            <td>-</td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <th colspan="3">Debug / Run</th>
        </tr>
        <tr>
            <td>Toggle breakpoint</td>
            <td>Ctrl+F8</td>
            <td>Ctrl+Shift+B</td>
        </tr>
        <tr>
            <td>Debug</td>
            <td>Ctrl+F5</td>
            <td>F11</td>
        </tr>
        <tr>
            <td>Step into</td>
            <td>F7</td>
            <td>F5</td>
        </tr>
        <tr>
            <td>Step over</td>
            <td>F8</td>
            <td>F6</td>
        </tr>
        <tr>
            <td>Step out</td>
            <td>Ctrl+F7</td>
            <td>F7</td>
        </tr>
        <tr>
            <td>Next breakpoint</td>
            <td>-</td>
            <td>F8</td>
        </tr>
        <tr>
            <td>Run</td>
            <td>F6</td>
            <td>Ctrl+F11</td>
        </tr>
    </tbody>
</table>



<?= writeHR() ?>



<h2>Liens utiles</h2>

<ul>
    <li id="fn1">[1] Les raccourcis Netbeans par défaut ne fonctionnent pas tous avec un clavier non Qwerty. Voir par exemple : <a href="https://netbeans.org/bugzilla/show_bug.cgi?id=227247">Bug 227247 – Eclipse keymap : comments as example</a></li>
    <li>Référence des raccourcis Netbeans : <a href="http://wiki.netbeans.org/Keyboard_Shortcuts">Keyboard Shortcuts - NetBeans Wiki</a> (et en particulier pour la v8.0 : <a href="https://netbeans.org/project_downloads/usersguide/shortcuts-80.pdf">Highlights of NetBeans IDE 8.0 Keyboard Shortcuts & Code Templates</a>)</li>
    <li><a href="http://www.eioba.com/a/1mk2/effective-eclipse-ii-shortcut-keys">Effective Eclipse: II. Shortcut keys | eioba.com</a></li>
    <li><a href="http://eclipse-tools.sourceforge.net/Keyboard_shortcuts_%283.0%29.pdf">Keyboard Shortcuts Eclipse 3.0 Default configuration</a></li>
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