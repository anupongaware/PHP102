<?php

class Geometry_Rectangle
{
    public $witdh;
    public $length;
    public $area;

    function __construct($witdh, $length)
    {
        $this->witdh = $witdh;
        $this->length = $length;
    }

    function Calculate_Area()
    {
        $this->area = $this->witdh * $this->length;
    }

    function Print_Area()
    {
        echo "This Area is : " . $this->area;
    }
}


$rec = new Geometry_Rectangle(10, 10);
$rec->Calculate_Area();
$rec->Print_Area();
