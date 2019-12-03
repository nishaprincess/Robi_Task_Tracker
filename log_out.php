
<?php
$conn = oci_connect('NISH69', 'NISH69', 'localhost/XE');
ob_start();

session_start();

if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}
session_start();
session_destroy();
header('Refresh:0; URL=http://localhost/ROBI%20TRACKER/Log-In.php?id= ');
exit;
?>