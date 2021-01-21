<?php

namespace metricas;

class memoria{

    public static function getMemoria($memo_ini,$memo_fin){

        //echo "Usados un máximo de: ".round(($memo_fin - $memo_ini)/(1024*1024),2). "Mb";
        return round(($memo_fin - $memo_ini)/(1024*1024),2);
    }

    public static function memoria(){

        return memory_get_peak_usage();

    }

}