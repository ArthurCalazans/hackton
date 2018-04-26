<?php

include $_SERVER['DOCUMENT_ROOT'] . '/rally/config.php';

$select = "SELECT * FROM cad_equipe order by id_equipe desc limit 1";

$result = $mysqli->query($select);

if ($result) {
    $consulta = $result->fetch_object();
    if (($consulta->agrupamento % 3) === 0) {
        $agrupamento = $consulta->agrupamento + 1;
    } else {
        $agrupamento = $consulta->agrupamento;
    }
    if ($consulta->inicio == 5) {
        $inicio = 1;
    } else {
        $inicio = $consulta->inicio + 1;
    }
    
    $_SESSION['AGRUPAMENTO'] = $agrupamento;
    /*var_dump("UPDATE cad_equipe "
            . "SET agrupamento = '" . $agrupamento . "', inicio = '" . $inicio . "' "
            . "WHERE id_equipe = '" . $_SESSION['ID_EQUIPE'] . "';");
     * 
     */
}