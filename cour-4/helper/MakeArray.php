<?php

namespace Helper;

trait MakeArray{

    /**
     * @param $n1
     * @param $n2
     * @return array
     */
    public function arrayHelper($n1, $n2){
        $array = [];
        array_push($array, $n1);
        array_push($array, $n2);

        return $array;
    }
}
