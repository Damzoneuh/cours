<?php

namespace App;

use Exception;
use Helper\MakeArray;
use Implement;

require ('Verify.php');
require ('helper/MakeArray.php');
require ('interface/Implement.php');

class Calc extends Verify implements Implement {

    use MakeArray;
    private $n1;
    private $n2;

    public function __construct($n1, $n2)
    {
        $this->n2 = $n2;
        $this->n1 = $n1;
    }


    /**
     * @return bool|float|int
     * @throws Exception
     */
    public function multiple(){
        try {
            if ($this->isInt($this->n1) && $this->isInt($this->n2)){
                return $this->n1 * $this->n2;
            }
        }
        catch (Exception $e){
            throw new Exception($e);
        }

        return false;
    }

    public function add(){
        // return $n1 + $n2;
    }

    public function addArray($n1, $n2){
        return $this->arrayHelper($n1, $n2);
    }

}