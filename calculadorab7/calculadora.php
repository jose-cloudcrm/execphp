<?php 
class Calculadora {

    private $total;

    public function __construct() {
        $this->total = 0;
    }

    public function add($x=0) {
        $this->total += $x;
    }

    public function sub($x=0) {
        $this->total -= $x;
    }

    public function multiply($x=1){
        $this->total *= $x;
    }

    public function divide($x=1) {
        if( $x === 0){
            throw new Exception("Não pode dividir por Zero");
        }
        $this->total /= $x;
    }

    public function total(){
        return $this->total;
    }

    public function clear(){
        return $this->total = 0;
    }
}

?>