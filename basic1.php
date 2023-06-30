<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
</head>
<body>
<?php
    /**************************** Data Types ****************************/
    // variable
    echo "<br>********* Variable *********<br>";
    $name = 'jacky';
    echo "Hello " . $name;

    // Array
    echo "<br>********* Array *********<br>";
    $arr = array(1,2,3);
    echo $arr[1];

    // Associative array
    echo "<br>********* Associative Array *********<br>";
    $arr_assoc = array("k1" => "v1", "k2" => "v2");
    echo $arr_assoc["k1"];

    /**************************** Control Structures ****************************/
    // if
    echo "<br>********* If *********<br>";
    $create = 2;
    if ($create===1) { // identical
        echo "Yes. It's 1!";
    }
    elseif ($create=="2") { // equal
        echo "It's 2.";
    }
    else {
        echo "No.";
    }

    // switch
    echo "<br>********* Switch *********<br>";
    $number = 10;
    switch($number) {
        case 34:
            echo "It is 34";
            break;
        case 37:
            echo "It is 37";
            break;
        case 47:
            echo "It is 47";
            break;
        default:
            echo "Default value";
            break;
    }
    echo "<br>";

    // loop
    echo "<br>********* Loop *********<br>";
    $cnt = 0;
    while($cnt < 5) {
        echo "cnt = " . $cnt . "<br>";
        $cnt++;
    }
    echo "<br>";
    for ($i = 0; $i < 3; $i++) {
        echo "i = " . $i . "<br>";
    }
    echo "<br>";
    $numbers = [123,456,789];
    foreach ($numbers as $n) {
        echo "n = " . $n . "<br>";
    }

    /**************************** Functions ****************************/
    // function
    echo "<br>********* Function *********<br>";
    function add($x, $y) {
        return $x + $y;
    }
    echo add(1,2);

    // scope
    echo "<br>********* Scope *********<br>";
    $x = "outside <br>"; // global
    function convert() {
        global $x;
        $x = "inside <br>"; // change global x
        $y = "y inside <br>"; // local
    }
    echo $x;
    convert();
    echo $x;

    // constants
    echo "<br>********* Constants *********<br>";
    // method 1
    define("NAME", 1000);
    echo "NAME = " . NAME . "<br>";

    // method 2
    const ANIMALS = array('dog', 'cat', 'bird');
    echo ANIMALS[1]; // outputs "cat"


    /**************************** Built-in Functions ****************************/
    echo "<br>********* Built-in Math Functions *********<br>";
    echo "pow(2,7) = " . pow(2,7) . "<br>";
    echo "rand() = " . rand() . "<br>";
    echo "rand(1, 100) = " . rand(1, 100) . "<br>";
    echo "sqrt(100) = " . sqrt(100) . "<br>";
    echo "ceil(4.6) = " . ceil(4.6) . "<br>";
    echo "floor(4.6) = " . floor(4.6) . "<br>";
    echo "round(4.5) = " . round(4.5) . "<br>";

    echo "<br>********* Built-in String Functions *********<br>";
    $s = "Hello Jacky!";
    printf("Len: %d<br>", strlen($s));
    printf("Upper: %s === Lower: %s<br>", strtoupper($s), strtolower($s));

    echo "<br>********* Built-in Array Functions *********<br>";
    $list = [6,8,3,7,9,1,4,2,5];
    printf("Max: %s. Min: %s<br>", max($list), min($list));
    sort($list);
    print_r($list); echo "<br>";
    printf("Found: %s<br>", in_array(7, $list));

?>
</body>
</html>