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
🏡&nbsp;Accueil</a>
</li><li>
<a href="<?=$RelBasePath?>info/" id="menu_info">
💻&nbsp;Informatique</a>
</li><li>
<a href="<?=$RelBasePath?>zicmue/" id="menu_zicmue">
🎵&nbsp;Musiques</a>
</li><li>
<a href="<?=$RelBasePath?>moi/" id="menu_moi">
👤&nbsp;Moi</a>
</li><li>
<a href="<?=$RelBasePath?>liens/" id="menu_liens">
🔗&nbsp;Liens</a>
</li>

</ul>

</nav>
