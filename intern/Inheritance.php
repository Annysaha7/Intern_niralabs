<?php
class Shape {
    
}

class Circle extends Shape {
    public $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function calculateArea() {
        return pi() * pow($this->radius, 2);
    }
}

class Rectangle extends Shape {
    public $width;
    public $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea() {
        return $this->width * $this->height;
    }
}


$circle = new Circle(3);
echo "Circle Area: " . $circle->calculateArea() . "<br>";

$rectangle = new Rectangle(2, 3);
echo "Rectangle Area: " . $rectangle->calculateArea() . "<br>";
?>
