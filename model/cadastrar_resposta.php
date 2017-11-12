<?php

session_start();
include $_SERVER['DOCUMENT_ROOT'] . '/hackton/rally/config.php';
foreach ($_POST as $a) {
    $resposta[] = $a;
}
for ($i = 0; $i < count($resposta); $i++) {
    $insert = "INSERT INTO resposta_equipe SET "
            . "id_equipe = '" . $_SESSION['ID_EQUIPE'] . "' and id_resposta = '" . $resposta[$i] . "';";
    
    var_dump($insert);

    $mysqli->query($insert);
}
