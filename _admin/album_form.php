<?php
// Version 20051010

$title = "Musiques [GEPApiR]";

$RelBasePath = "../";
require_once($RelBasePath . 'communs/header1.inc.php');
?>
<style type="text/css"><!--
--></style>
<?php
require_once($RelBasePath . 'communs/header2.inc.php');
?>



<form method="post" enctype="multipart/form-data" action="album_post.php">



<!-- Artiste -->
<fieldset>
<legend>Artiste</legend>

Interprète :<br>

<label>
<input name="artiste_radio" value="1" type="radio">existant :
</label>
<select size="1" name="saison">
<option>John John</option>
<option>Bill Bill</option>
</select>

<br>

<label>
<input name="artiste_radio" value="2" type="radio">
Nouveau :
</label>
<input maxlength="30" name="artiste_new">

</fieldset>



<!-- Année découverte -->
<fieldset>
<legend>Année découverte</legend>

Découvert en :
<select size="1" name="saison">
<option>hivers</option>
<option>prinptemps</option>
<option>été</option>
<option>automne</option>
</select>
<input maxlength="4" size="4" name="annee"><br>

</fieldset>



<!-- Album -->
<fieldset>
<legend>Album</legend>

Titre : <input type="text" name="nom" size="40">

<br>

Couverture : <input name="cover_file" type="file"> / <input type="text" name="cover_url" size="40">

<br>

<textarea rows="10" cols="80" name="comment">

</textarea>
</fieldset>



<!-- Go -->
<p>
<input type="submit" name="toto" value="Ajouter">
<input type="submit" name="toto" value="Terminer">
</p>



</form>



</body>
</html>

