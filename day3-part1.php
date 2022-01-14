<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advent Of Code - Day 3</title>
</head>

<body>
    <?php
    $file = file("input.txt");
    $countLine = 0;

    for ($val = 0; $val < 12; $val++) {
        $count1 = 0;
        $count0 = 0;
        foreach ($file as $line) {
            $nb = substr($line, $val, 1);
            switch ($nb) {
                case 0:
                    $count0++;
                    break;
                case 1:
                    $count1++;
                    break;
            }
        }
        if ($count0 < $count1) {
            $array0[$val] = 0;
            $array1[$val] = 1;
        } else {
            $array0[$val] = 1;
            $array1[$val] = 0;
        }
    }
    foreach ($array0 as $number) {
        echo ($number);
    }
    echo "<br>";
    foreach ($array1 as $number) {
        echo ($number);
    }

    ?>
</body>

</html> 