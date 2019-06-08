<?php
include_once ('Shape.php');
class Circle extends Shape
{
    public $radius;

    public function __construct($name, $radius)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }

    //tính diện tích hình tròn
    public function calculateArea(){
        return pi() * pow($this->radius, 2);
    }

    //tính chu vi hình tròn
    public function calculatePerimeter(){
        return pi() * $this->radius * 2;
    }
}