<?php
/**
 * Created by PhpStorm.
 * User: ciceromoura
 * Date: 28/01/17
 * Time: 20:14
 */

    require_once '../Controller/TabelaTempo.class.php';

    $tabelaTempoController = new TabelaTempo();


    $plan = $_POST["plan"];
    $proj= $_POST["proj"];
    $codificao = $_POST["codificacao"];
    $revCod = $_POST["revCod"];
    $compilacao = $_POST["compilacao"];
    $teste = $_POST["teste"];
    $posMorte = $_POST["posMorte"];


    $tempoMaximo = $tabelaTempoController->calculoTempoTotal($plan, $proj, $codificao, $revCod, $compilacao, $teste, $posMorte);
    $tempoPorcentagem = $tempoMaximo / 100;

    echo json_encode(array("tempoMaximo" => $tempoMaximo, "tempoPorcentagem" => $tempoPorcentagem));

?>