<?php

if (isset($_GET["charset"]))
	{ $charset = $_GET["charset"];}
else
	{ $charset = "ISO-8859-1";}
header("content-type: text/html; charset=" . $charset);

isset($_GET["val2send"]) ? $valrecup = $_GET["val2send"] : $valrecup = "";

$tabcharsets[0] = "ISO-8859-1";
$tabcharsets[1] = "ISO-8859-15";
$tabcharsets[2] = "Windows-1252";
$tabcharsets[3] = "UTF-8";
?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<title>Test envoi formulaire</title>
</head>
<body>

<form method="POST" action="test-form.php">

<select name="charset" onChange="this.form.val2send.value = ''; this.form.submit();">
<?php
foreach ($tabcharsets as $optcharset)
	{
?>
<option value="<?=$optcharset?>"<?=($optcharset == $charset ? " SELECTED" : "")?>><?=$optcharset?>
<?
	}
?>
</select>

<br><br>

<input type="text" name="val2send" value="<?=$valrecup?>">
<br>
<input type="submit" name="toto" value="envoyer">
</form>

</body>
</html>
