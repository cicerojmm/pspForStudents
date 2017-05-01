<?php
/**
 * Created by PhpStorm.
 * User: ciceromoura
 * Date: 28/01/17
 * Time: 22:39
 */

    require_once '../Controller/TabelaDefeito.class.php';

    $tabelaTempoController = new TabelaDefeito();


    $plan = $_POST["plan"];
    $proj= $_POST["proj"];
    $codificao = $_POST["codificacao"];
    $revCod = $_POST["revCod"];
    $compilacao = $_POST["compilacao"];
    $teste = $_POST["teste"];


    $tempoMaximo = $tabelaTempoController->calculoTotalefeitos($plan, $proj, $codificao, $revCod, $compilacao, $teste);
    $tempoPorcentagem = $tempoMaximo / 100;

    echo json_encode(array("tempoMaximo" => $tempoMaximo, "tempoPorcentagem" => $tempoPorcentagem));

?>