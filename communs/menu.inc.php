<?
/*-------------------------------------------------------------------------------------------
 Menu navigation - DEBUT
-------------------------------------------------------------------------------------------*/

const GEPAPIR_NAVIGATION = [
    '' => '🏡&nbsp;Accueil',
    'info' => '💻&nbsp;Informatique',
    'zicmue' => '🎵&nbsp;Musiques',
    'moi' => '👤&nbsp;Moi',
    'liens' => '🔗&nbsp;Liens',
];

?>
<nav>

<ul>
    
<?php
$currentPagePath = $_SERVER['REQUEST_URI'];
$currentCategory = null;
foreach (GEPAPIR_NAVIGATION as $path => $label) {
    if ($path === '') {continue;}
    if (strpos($currentPagePath, $path) !== false) { $currentCategory = $path;}
}
if ($currentCategory === null) { $currentCategory = '';}


foreach (GEPAPIR_NAVIGATION as $path => $label) {
    $currentCategoryHtml = ($path === $currentCategory)
        ? ' class="current"'
        : '';
        
    $pathForHtml = ($path === '') ? '' : $path.'/';
    
    echo <<<HTML
<li>
<a href="{$RelBasePath}{$pathForHtml}" id="menu_{$path}"{$currentCategoryHtml}>
{$label}</a>
</li>
HTML;
}
?>


</ul>

</nav>
