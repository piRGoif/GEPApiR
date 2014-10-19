<?php
ob_start('ob_gzhandler');
// Version 20141019
// NAVIGATION
$RelBasePath = "../../";
$title = "IDE, principaux raccourcis - Informatique [GEPApiR]";

require_once($RelBasePath . 'communs/header1.inc');
require_once($RelBasePath . 'communs/header2.inc');
?>



<h1>
    <?
    require_once('../info_h1.inc');
    ?><br>
    IDE, principaux raccourcis
</h1>



<hr class="sep sepfin">



<?
require_once($RelBasePath . 'communs/menu.inc');
?>



</body>
</html>
<?php ob_end_flush(); ?>