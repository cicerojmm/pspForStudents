<?php

/**
 * Created by PhpStorm.
 * User: ciceromoura
 * Date: 28/01/17
 * Time: 19:54
 */
class TabelaTempo {


    public function calculoTempoTotal($plan, $projeto, $codificacao, $revCod, $compilacao, $teste, $posMorte) {
        $resultado = 0;

        if($plan != "" || $projeto!= "" || $codificacao!= "" || $revCod!= "" || $compilacao!= "" || $teste!= "" || $posMorte!= "") {
            $resultado = $plan + $projeto + $codificacao + $revCod + $compilacao + $teste + $posMorte;

            return $resultado;
        }

        return $resultado;
    }



}