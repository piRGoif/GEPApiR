<?php
ob_start('ob_gzhandler');
$date_creation = "19/10/2014";
$date_maj = "22/10/2014";

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
            <td>Aller à la ligne</td>
            <td>Ctrl+G</td>
            <td></td>
        </tr>
        <tr>
            <td>Supprimer la ligne courante</td>
            <td>Ctrl+E</td>
            <td></td>
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
            <td>Format code</td>
            <td>Alt+Shift+F</td>
            <td></td>
        </tr>
        <tr>
            <td>Fix uses</td>
            <td>Ctrl+Shift+I</td>
            <td></td>
        </tr>
        <tr>
            <td>Générer le code</td>
            <td>Alt+Ins</td>
            <td></td>
        </tr>
    </tbody>
    <tbody>
        <tr>
            <th colspan="3">Navigation</th>
        </tr>
        <tr>
            <td>Aller à une classe</td>
            <td>Ctrl+O</td>
            <td></td>
        </tr>
        <tr>
            <td>Aller à un fichier</td>
            <td>Alt+Shift+O</td>
            <td></td>
        </tr>
        <tr>
            <td>Editeur</td>
            <td>Ctrl+0</td>
            <td></td>
        </tr>
        <tr>
            <td>Afficher dans la vue Projects</td>
            <td>Ctrl+Shift+1</td>
            <td></td>
        </tr>
        <tr>
            <td>Aller au membre</td>
            <td>Ctrl+7, &lt;saisie>, Ctrl+0</td>
            <td></td>
        </tr>
        <tr>
            <td>Hiérarchie</td>
            <td>Alt+Shift+F12</td>
            <td></td>
        </tr>
        <tr>
            <td>Usages</td>
            <td>Alt+F7</td>
            <td></td>
        </tr>
        <tr>
            <td>Fichiers ouverts</td>
            <td>Shift+F4</td>
            <td></td>
        </tr>
</table>



<?= writeHR() ?>



<h2>Liens utiles</h2>

<ul>
    <li>Référence des raccourcis Netbeans : <a href="http://wiki.netbeans.org/Keyboard_Shortcuts">Keyboard Shortcuts - NetBeans Wiki</a> (et en particulier pour la v8.0 : <a href="https://netbeans.org/project_downloads/usersguide/shortcuts-80.pdf">Highlights of NetBeans IDE 8.0 Keyboard Shortcuts & Code Templates</a>)
    <li>Eclipse ??
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