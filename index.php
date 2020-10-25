<?php
######################################################################
# Virii Info Add-On ... ver. 2.0
# ====================================================
#
# See it in action at http://www.xoops.sytes.net/virii
#
# idea: w4z004@hotmail.com (http://ar.xoops.org)
######################################################################
include 'header.php';
include '../../header.php';
require_once $xoopsConfig['root_path'] . 'class/xoopsmodule.php';
require_once $xoopsConfig['root_path'] . 'class/xoopsgroup.php';
echo '<br><br>';
OpenTable();
?>
<center><BR>
    <H1><b>Virus Info</b></h1></center>
<?php CloseTable(); ?>
<BR><BR>
<?php OpenTable(); ?>
<center>
    <script language="JavaScript1.1" SRC="wtc_applet_js.asp"></SCRIPT>
</center>
<?php
CloseTable();
include '../../footer.php';
?>
