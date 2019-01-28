<?php
/**
 * Created by PhpStorm.
 * User: dungduong
 * Date: 11/21/18
 * Time: 17:17
 */
include_once ('Circle.php');
include_once ('Cylinder.php');
include_once ('Rectangle.php');
include_once ('Square.php');

$shapes[0] = new Circle('Circle 1', 3);
$shapes[1] = new Cylinder('Cylinder 1', 3, 4);
$shapes[2] = new Rectangle('Rectangle 1', 3, 4);
$shapes[3] = new Square('Square 1', 4, 4, 4);

foreach ($shapes as $shape){
    echo $shape->name . "<br>" . "Area: " . $shape->calculateArea() . "<br>";
    if ($shape instanceof Square) {
        echo $shape->howToColor();
    }
}


