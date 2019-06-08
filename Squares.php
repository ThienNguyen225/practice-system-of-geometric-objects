<?php

include_once "Rectangle.php";

class Squares extends Rectangle
{
    public function __construct($name, $height, $width)
    {
        parent::__construct($name, $height, $width);
    }

//diện tích hình vuông
    public function calculateArea()
    {
        return $this->height * $this->width;
    }

//chu vi hình tròn
    public function calculatePerimeter()
    {
        return $this->width * 4;
    }
}