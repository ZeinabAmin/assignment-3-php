<?php

function calc (int|float $x , int|float $y , string $op) :int|float|string
{
    switch ($op) {
        case 'add':
            return $x + $y;
            
        case 'sub':
            return $x - $y;   

        case 'mul':
            return $x * $y;

        case 'div':
            return $x / $y;

    }
}


if (isset($_GET['submit'])) {

$x = $_GET['x'];
$y = $_GET['y'];
$operation = $_GET['operation'];

//validation
//calculation
$result = calc($x, $y, $operation);
//echo $result;

header("location: calculate.php?result=$result");


}else{
header("location: calculate.php");
}

?>