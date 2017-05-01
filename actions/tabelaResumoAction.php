<?php
/**
 * Created by PhpStorm.
 * User: ciceromoura
 * Date: 28/01/17
 * Time: 19:09
 */
    require_once '../Controller/TabelaResumo.class.php';

    $tabelaResumoController = new TabelaResumo();


    $minutosLOC = $_POST["minutosLOC"];
    $defeitosRemovidos = $_POST["defeitosRemovidos"];
    $tamanhoMaximo = $_POST["tamanhoMaximo"];
    $defeitosInseridos = $_POST["defeitosInseridos"];
    $tempoTotal = $_POST["tempoTotal"];


    $hrLoc = $tabelaResumoController->calculoLocPorHora($minutosLOC);
    $defKloc = $tabelaResumoController->calculoDefeitosKloc($defeitosRemovidos, $tamanhoMaximo);
    $yield = $tabelaResumoController->calculoYield($defeitosRemovidos, $defeitosInseridos);
    $afr = $tabelaResumoController->calculoAFR($defeitosRemovidos, $tempoTotal);


    echo json_encode(array("hrLoc" => $hrLoc, "defKloc" => $defKloc, "yield" => $yield, "afr" => $afr));

?>