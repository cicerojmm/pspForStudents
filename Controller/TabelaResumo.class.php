<?php

/**
 * Created by PhpStorm.
 * User: ciceromoura
 * Date: 28/01/17
 * Time: 18:41
 */

class TabelaResumo {


    public function calculoLocPorHora($minLoc) {
        $resultado = 0;

        if($minLoc != "") {
            $resultado = $minLoc / 60;

            return $resultado;
        }


        return $resultado;
    }

    public function calculoDefeitosKloc($defeitosRemovidos, $tamanhoMaximo) {
        $resultado = 0;

        if($defeitosRemovidos != "" && $tamanhoMaximo != "") {
            $resultado = ($defeitosRemovidos * 1000) / $tamanhoMaximo;

            return $resultado;
        }


        return $resultado;
    }

    public function calculoYield($defeitosRemovidos, $defeitosInseridos) {
        $resultado = 0;

        if($defeitosRemovidos != "" && $defeitosInseridos != "") {
            $resultado = ($defeitosRemovidos / $defeitosInseridos) * 100;

            return $resultado;
        }


        return $resultado;
    }

    public function calculoAFR($defeitosRemovidos, $tempoTotal) {
        $resultado = 0;

        if($defeitosRemovidos != "" && $tempoTotal != "") {
            $resultado = ($defeitosRemovidos / $tempoTotal);

            return $resultado;
        }


        return $resultado;
    }


}

?>