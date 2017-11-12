<?php

include $_SERVER['DOCUMENT_ROOT'] . '/hackton/rally/config.php';

$select = "SELECT * FROM cad_equipe e inner join cad_aluno a on (a.id_equipe = e.id_equipe) "
        . "WHERE id_aluno = '".$_SESSION['ID_ALUNO']."';";

$result = $mysqli->query($select);

if($result){
    $consulta = $result->fetch_object();
}