<?php

$select = "select * from perguntas p inner join respostas r on (r.id_pergunta = p.id_perguntas) order by id_perguntas asc";
$result = $mysqli->query($select);
while ($consulta = $result->fetch_object()) {
    $pergunta[$consulta->id_pergunta] = $consulta->pergunta;
    $resposta[$consulta->id_perguntas][] = $consulta->alternativa;
    $value[$consulta->id_perguntas][] = $consulta->id_resposta;
}
