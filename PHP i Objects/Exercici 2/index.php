<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP i Objects</title>
</head>
<body>

<?php

class Shape {
    public $ample;
    public $alt;

    function __construct($ample,$alt) {
        $this->ample = $ample;
        $this->alt = $alt;
    }
}

class Triangle extends Shape {
    function area () {
        return $this->ample*$this->alt/2;
    }

}

class Rectangle extends Shape {
    function area () {
        return $this->ample*$this->alt;
    }
}

$triangle = new Triangle (2,2);
$rectangle = new Rectangle (3,4);
echo "El área del triángulo es: {$triangle->area()}";
echo "<br>";
echo "El área del rectángulo es: {$rectangle->area()}";





?>

    
</body>
</html>