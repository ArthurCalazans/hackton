<?php 
    include $_SERVER['DOCUMENT_ROOT'].'/hackton/rally/config.php'; 
    $mysqli->set_charset('utf8');
    $de = 5;
    $ate = 8;
    $select = "select * from perguntas p inner join respostas r on (r.id_pergunta = p.id_perguntas) order by id_perguntas asc";
    $result = $mysqli->query($select);
    while($consulta = $result->fetch_object()){
        $pergunta[$consulta->id_pergunta] = $consulta->pergunta;
        $resposta[$consulta->id_perguntas][] = $consulta->alternativa;
        $value[$consulta->id_perguntas][] = $consulta->id_resposta;
        //$id_pergunta[$consulta->id_pergunta] = $consulta->id_pergunta;
    }
    include $_SERVER['DOCUMENT_ROOT'].'/hackton/rally/view/prova/perguntas.html';   
?>