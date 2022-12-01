<?php
require("./Geometry_Rectangle.php");

class Geometry_Circle extends Geometry_Rectangle
{
    public $radius;

    function __construct($radius)
    {
        $this->radius = $radius;
    }

    function Calculate_Area()
    {
        $this->area = 3.14 * $this->radius * $this->radius;
    }
}

$circle = new Geometry_Circle(10);

$circle->Calculate_Area();
$circle->Print_Area();
