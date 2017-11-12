<?php
if (isset($_GET['checkin'])) {
    if ($_GET['checkin'] == sha1('FMU RALLY')) {
        $_SESSION['CHECKIN'] = true;
        $_SESSION['DT_CHECKIN'] = date('d/m/Y H:i:s');
        
    } elseif (isset($_GET['fase1'])) {
        include $root.'/model/liberarPais.php';        
    }
} else {
    $_SESSION['CHECKIN'] = false;
}