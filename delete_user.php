<?php
/*
 * ------------------------------------------------------------------------
 * CanteRa5 (OWSA-INV V2.1)
 * ------------------------------------------------------------------------
 * Author: David Rengifo
 * Author page: http://david.rengifo.mx/
 * 
 * Basado en: OSWA-INV (https://github.com/siamon123/warehouse-inventory-system)
 */
require_once('includes/load.php');
if (isset($_SESSION['lang']) && $_SESSION['lang'] != ' ') {
    include(!file_exists('includes/lang/lang_' . $_SESSION['lang'] . '.php') ? 'includes/lang/lang_en.php' : 'includes/lang/lang_' . $_SESSION['lang'] . '.php' );
}
// Checkin What level user has permission to view this page
page_require_level(1);
?>
<?php

$delete_id = delete_by_id('users', (int) $_GET['id']);
if ($delete_id) {
    $session->msg("s", USER_DELETED);
    redirect('users.php');
} else {
    $session->msg("d", USER_DELETION_FAILED_OR_MISSING_PRM);
    redirect('users.php');
}
?>
