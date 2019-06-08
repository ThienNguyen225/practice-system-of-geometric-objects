<?php
include_once "Shape.php";

class Rectangle extends Shape
{
    public $height;
    public $width;

    public function __construct($name, $height, $width)
    {
        parent::__construct($name);
        $this->height = $height;
        $this->width = $width;
    }

//diện tích hình chữ nhật
    public function calculateArea()
    {
        return $this->height * $this->width;
    }

//chu vi hình chữ nhật
    public function calculatePerimeter()
    {
        return ($this->height + $this->width) * 2;
    }
}