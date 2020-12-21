<?php
namespace App;

class Point{
    public $x;
    public $y;

    public function __construct(float $x, float $y){
        $this->x = $x;
        $this->y = $y;
    }

    public function point_transfer(float $x1, float $y1){
        $this->x = $x1;
        $this->y = $y1;
    }
}

class Vector{
    public $x;
    public $y;

    public function __construct(float $x, float $y){
        $this->x = $x;
        $this->y = $y;
    }

    public function get_lenght(){
        return (round(sqrt($this->x ** 2 + $this->y ** 2)));
    }

    public function zero(){
        if ($this->x === $this->y)
            return "Нулевой вектор";
        else 
            return "Ненулевой вектор";    
    }

    public function normal($x1, $y1){
        if ($this->x * $x1 + $this->y * $y1 == 0)
            return "Векторы перпендикулярны";
        else 
            return "Векторы не перпендикулярны";
    }
}