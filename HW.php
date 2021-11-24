<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HW</title>
    <link href="./styles.css" rel="stylesheet">
</head>
<body>
    <?php
        $colors = ["Aqua", "AliceBlue", "Coral", "Chocolate", "DodgerBlue", "Gold", "LightGreen", "SkyBlue", "Tomato"];

        if(count($colors) >= 4) {
            $selectedColors = [];
            for($i = 0; $i < 4; $i++) {
                $color = $colors[rand(0, count($colors) - 1)];
                if(in_array($color, $selectedColors)) {
                    $i--;
                } else {
                    $selectedColors[] = $color;
                }
            }
    
            echo "<div class='container'>";
            foreach($selectedColors as $k => $c) {
                echo "<div class='block' style='background-color: $c'></div>";
            }
            echo "</div>";
        }
    ?>
</body>
</html>