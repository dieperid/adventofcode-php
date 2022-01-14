<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advent Of Code - Day 2</title>
</head>
<body>
    <?php
    $horizontal = 0;
    $profondeur = 0;
    $aim = 0;
    $file = fopen("input.txt", "r");
    $newArray = array();
    $arrayNumber = array();
    if($file)
    {
        $count = 0;
        while(($line = fgets($file)) !== false) {
            $newArray[$count] = $line;
            if(str_contains($line, 'forward'))
            {
                $int = (int) filter_var($line, FILTER_SANITIZE_NUMBER_INT);
                $horizontal += $int;
                $profondeur += $int * $aim;
            }
            if(str_contains($line, 'down'))
            {
                $int = (int) filter_var($line, FILTER_SANITIZE_NUMBER_INT);
                $aim += $int;
            }
            if(str_contains($line, 'up'))
            {
                $int = (int) filter_var($line, FILTER_SANITIZE_NUMBER_INT);
                $aim -= $int;
            }
            $count++;
        }
    }
    $result = $horizontal * $profondeur;
    echo($result);
    ?>
</body>
</html>