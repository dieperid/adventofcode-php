<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advent Of Code - Day 1</title>
</head>
<body>
    <?php
    $file = fopen("input.txt", "r");
    $newArray = array();
    $countMesure = 0;
    if($file)
    {
        $count = 0;
        while(($line = fgets($file)) !== false) {
            $newArray[$count] = $line;
            $count++;
        }
    }
    for($i = 0; $i < count($newArray); $i++)
    {
        if($newArray[$i + 1] > $newArray[$i])
        {
            $countMesure++;
        }
    }
    echo $countMesure;
    ?>
</body>
</html>