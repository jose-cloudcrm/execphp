<?php 
interface MatematicaBasica {
    public function somar($x,$y);
}


class Basico1 implements MatematicaBasica {
    public function somar($x,$y){
        return $x +$y;
    }
}

class Basico2 implements MatematicaBasica {
    public function somar($x,$y){
        $res = $x;
        for($q=0;$q<$y;$q++) {
            $res++;
        }
        return $res;
    }
}

class Basico3{
    
}

class Matematica {
    private $basico;

    public function __construct($b){
        $this->basico = $b;
    }

    public function somar($x,$y){
        return $this->basico->somar($x,$y);
    }

}

$mat = new Matematica(new Basico2());
echo $mat->somar(10,17);