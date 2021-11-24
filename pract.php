<?php
    $x1 = 10;
    $x2 = 100;
    $sum = $x1 + $x2;
    echo $x1." + ".$x2." = ".$sum;
    echo "<br><i>Sum is: </i>".$sum;
    echo '<br>$x1 + $x2 = $sum';
    echo "<br>$x1 + $x2 = ".($x1 + $x2);
    $str = "<br>Hello, ";
    $str.="world<br>";
    echo $str;

    $role = "admin";
    switch($role) {
        case "admin":
            echo "Hello admin";
            break;
        case "user":
            echo "Hello user";
            break;
        default:
            echo "Hello unknown";
            break;
    }

    if($role === 'admin') {
        echo "<br>Yes";
    }
    else {
        echo "<br>No";
    }

    $arr1 = array();
    $arr1[0] = "Яблоко";
    $arr1[1] = "Груша";
    echo "<br>".$arr1[1]."<br>";

    $arr2 = array(10, 20, 30);
    for($i = 0; $i < count($arr2); $i++)
    {
        if($i < count($arr2) - 1)
        {
            echo $arr2[$i]." - ";
        }
        else {
            echo $arr2[$i];
        }
    }

    $arr3 = [4, 7, 9];

    $fruits[] = "apple";
    $fruits[] = "orange";
    $fruits[] = "banana";
    $fruits[] = "peach";
    $fruits[] = "cherry";
    sort($fruits);
    foreach($fruits as $k=>$f) {
        echo "<br>".($k+1).". - ".$f;
    }

    $person = ["name"=>"Arsenii", "surname"=>"Semenov", "age"=>18];
    echo "<br>".$person["surname"];

    foreach($person as $k=>$v) {
        echo "<br>Key: $k, Value: $v";
    }
?>