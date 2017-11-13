<?php


$pontuacao = "SELECT 1 FROM perguntas p inner join resposta_equipe r on (p.id_resposta = r.id_resposta) ";
$resposta = "SELECT id_pergunta, alternativa FROM resposta_equipe re inner join respostas r on (r.id_resposta = re.id_resposta)  ";
$mysqli->set_charset('utf8');
$resulta = $mysqli->query($pontuacao);
$pontuacao = $resulta->num_rows;

$result = $mysqli->query($resposta);