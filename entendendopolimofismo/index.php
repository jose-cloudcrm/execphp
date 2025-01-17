<?php 
interface Forma {
    public function getArea();
    public function getTipo();
}

class Quadrado implements Forma {
    private $largura;
    private $altura;

    public function __construct($l,$a){
        $this->largura = $l;
        $this->altura = $a;
    }

    public function getArea(){
        return $this->largura * $this->altura; 
    }

    public function getTipo(){
        return 'Quadrado';
    }

}

class Circulo implements Forma {
    private $raio;

    public function __construct($r){
        $this->raio = $r;
    }

    public function getTipo(){
        return 'Circulo';
    }

    public function getArea(){
        return pi() * ($this->raio * $this->raio);
    }
}

$quadrado = new Quadrado(5, 5);
$circulo = new Circulo(7);

$objetos = [
    $quadrado,
    $circulo
];


foreach($objetos as $objeto){
    $tipo = $objeto->getTipo();
    $area = $objeto->getArea();

    echo "AREA ".$tipo." : ".$area."<br/>";
}


?>