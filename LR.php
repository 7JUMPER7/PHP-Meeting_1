<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LR</title>
    <link href="./styles.css" rel="stylesheet">
</head>
<body>
    <h1>Ex 1</h1>
    <?php
        $cars["BMW"] = ["model" => "M3", "price" => 65000, "year" => 2020];
        $cars["Toyota"] = ["model" => "Supra", "price" => 70000, "year" => 2021];
        $cars["Skoda"] = ["model" => "Superb", "price" => 33000, "year" => 2020];
        foreach($cars as $name => $info) {
            echo "<h3>$name:</h3><br>";
            foreach($info as $k => $v) {
                echo "<p><strong>$k:</strong> $v</p>";
            }
        }
    ?>
    <h1>Ex 2</h1>
    <?php
        $cols = rand(3, 10);
        $rows = rand(3, 10);
        echo "<table>";
        for($i = 1; $i <= $rows; $i++) {
            echo "<tr>";
            for($j = 1; $j <= $cols; $j++) {
                if($i == 1) {
                    echo "<th>$j</th>";
                }
                else {
                    if($j == 1) {
                        echo "<th>$i</th>";
                    }
                    else {
                        echo "<td>".($i * $j)."</td>";
                    }
                }
            }
            echo "</tr>";
        }
        echo "</table>";
    ?>
</body>
</html>