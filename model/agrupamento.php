<?php

include $_SERVER['DOCUMENT_ROOT'] . '/hackton/rally/config.php';

$select = "SELECT *, max(agrupamento) as m FROM cad_equipe ORDER BY id_equipe desc limit 1";

$result = $mysqli->query($select);


if ($result) {
    $consulta = $result->fetch_object();
    if (($consulta->equipe % 3) === 0) {
        $agrupamento = $consulta->m + 1;
    } else {
        $agrupamento = $consulta->m;
    }
}