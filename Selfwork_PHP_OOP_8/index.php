<?php

trait Calculator {

    public function sum($a, $b) {
        return $a + $b;
      }
      
      public function sub($a, $b) {
        return $a - $b;
      }
      
      public function mul($a, $b) {
        return $a * $b;
      }
      
      public function div($a, $b) {
        return $a / $b;
      }
      
      public function sqr($a){
        return sqrt($a);
      }
}


class Rettangolo {

    use Calculator;

    public $b;
    public $h;

    public function __construct($_b, $_h) {

        $this->b = $_b;
        $this->h = $_h;
    }

    public function area() {

       $area = $this->mul($this->b, $this->h);
    
       echo "L'area del rettangolo è di $area mq\n";
    }

    public function perimetro() {

        $perimetro = $this->mul(2, $this->sum($this->b, $this->h));

        echo "Il perimetro del rettangolo è di $perimetro cm\n";
    }

    public function diagonale() {

        $diagonale = $this->sqr($this->sum(($this->mul($this->h,$this->h)),($this->mul($this->b,$this->b))));

        echo "La diagonale del rettangolo è di $diagonale cm\n";
    }
}

$rettangolo = new Rettangolo(6,9);

$rettangolo->area();
$rettangolo->perimetro();
$rettangolo->diagonale();