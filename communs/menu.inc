<?
/*-------------------------------------------------------------------------------------------
 Menu navigation - DEBUT
 Version 20140808
-------------------------------------------------------------------------------------------*/
?>
<nav>

<ul>

<li>
<a href="<?=($RelBasePath == "")?"index.php":$RelBasePath;?>" id="menu_accueil">
<span class="menu_icon"></span>&nbsp;Accueil</a>
</li><li>
<a href="<?=$RelBasePath?>info/" id="menu_info">
<span class="menu_icon"></span>&nbsp;Informatique</a>
</li><li>
<a href="<?=$RelBasePath?>zicmue/" id="menu_zicmue">
<span class="menu_icon"></span>&nbsp;Musiques</a>
</li><li>
<a href="<?=$RelBasePath?>moi/" id="menu_moi">
<span class="menu_icon"></span>&nbsp;Moi</a>
</li><li>
<a href="<?=$RelBasePath?>liens/" id="menu_liens">
<span class="menu_icon"></span>&nbsp;Liens</a>
</li>

</ul>

</nav>
