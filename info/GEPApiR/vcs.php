<?php ob_start('ob_gzhandler');
$date_creation = "16/08/2024";
$date_maj = "16/08/2024";

// NAVIGATION
$RelBasePath = "../../";
$title = "Suivi de version et publication - GepapiR - Informatique [GEPApiR]";

require_once($RelBasePath . 'communs/header1.inc.php');
require_once($RelBasePath . 'communs/header2.inc.php');
?>



<h1>
    <?
    require_once('../info_h1.inc');
    ?><br>
    Suivi de version et publication
</h1>



<?= writeHR() ?>



<h2>Modèle de branches</h2>

<p>Longtemps cette page a simplement été quelques fichiers sur mon disque, avec des sauvegardes de temps en temps. Avec le temps m'ont manqué :</p>

<ul>
    <li>La capacité de facilement revenir en arrière</li>
    <li>Pouvoir travailler sur de grosse refonte sans bloquer de petite mise à jour</li>
    <li>Suivre précisément ce qui a été mis en ligne et quand</li>
</ul>

<p>Alors très naturellement, pratiquant Git au quotidien dans l'univers professionnel, j'ai fini par versionner les fichiers de ce site sous Git en local.<br>
Et puis plus tard, envoyer <a href="https://github.com/piRGoif/GEPApiR">sur GitHub</a> !</p>

<p>Le modèle que j'ai adopté est proche de <a href="http://danielkummer.github.io/git-flow-cheatsheet/">GitFlow</a>, on a donc 2 branches :</p>

<ul>
    <li><strong>develop</strong> : la branche de base sur laquelle on va apporter toutes les modifications</li>
    <li><strong>master</strong> : la branche qui représente ce qui est en ligne sur le serveur</li>
</ul>

<p>Les avantages :</p>

<ul>
    <li>En un coup d'oeil sur la branche master on est donc capable de retracer les mises en ligne et leur contenu !</li>
    <li>Un éventuel retour en arrière se fait très simplement</li>
    <li>Aussi le fait d'être sur Github permet facilement à tout le monde de contribuer (<a href="https://github.com/piRGoif/GEPApiR/pulls">pull request</a>, <a href="https://github.com/piRGoif/GEPApiR/issues">issue</a>)</li>
</ul>



<?= writeHR() ?>



<h2>Publication</h2>

<p>Pour pousser la logique au bout, un simple push sur la branche master va automatiquement mettre en ligne les fichiers. C'est grace aux GitHub Actions, et en particulier l'action <a href="https://github.com/marketplace/actions/ftp-deploy#exclude-files">FTP Deploy</a> !</p>

<p>Le fichier de configuration est ici : <a href="https://github.com/piRGoif/GEPApiR/blob/master/.github/workflows/main.yml">.github/workflows/main.yml</a></p>






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

