<?php

namespace metricas;

class tiempo{

    /**
     * Microsegundos.
     */
    public static function getSeconds(){

        list($useg, $seg) = explode(" ", microtime());
        return ((float)$useg + (float)$seg);

    }
    /**
     * Calcular tiempo.
     */
    public static function getTiempo($t1,$t2){
        return $t2-$t1;
    }

}