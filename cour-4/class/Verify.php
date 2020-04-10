<?php

namespace App;

class Verify {

    public function isInt($n1){
        if (is_int($n1) || is_float($n1)){
            return true;
        }
        return false;
    }

}
