<?php

/**
 * Created by PhpStorm.
 * User: ciceromoura
 * Date: 28/01/17
 * Time: 22:37
 */
class TabelaDefeito {

    public function calculoTotalefeitos($plan, $projeto, $codificacao, $revCod, $compilacao, $teste) {
        $resultado = 0;

        if($plan != "" || $projeto!= "" || $codificacao!= "" || $revCod!= "" || $compilacao!= "" || $teste!= "") {
            $resultado = $plan + $projeto + $codificacao + $revCod + $compilacao + $teste;

            return $resultado;
        }

        return $resultado;

    }


}


?>