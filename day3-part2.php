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
    $file = file("input/input.txt");

    ?>
</body>

</html>
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
    for ($countLine = 0; $countLine < 2; $countLine++) {
        $file = file("input/input.txt");
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
            if (count($file) > 1) {
                if ($count0 > $count1) {
                    foreach ($file as $line) {
                        $nb = substr($line, $val, 1);
                        if ($countLine == 0) {
                            if ($nb == 1) {
                                $file = array_diff($file, array($line));
                            }
                        } else {
                            if ($nb == 0) {
                                $file = array_diff($file, array($line));
                            }
                        }
                    }
                } elseif ($count0 < $count1) {
                    foreach ($file as $line) {
                        $nb = substr($line, $val, 1);
                        if ($countLine == 0) {
                            if ($nb == 0) {
                                $file = array_diff($file, array($line));
                            }
                        } else {
                            if ($nb == 1) {
                                $file = array_diff($file, array($line));
                            }
                        }
                    }
                } elseif ($count0 == $count1) {
                    foreach ($file as $line) {
                        $nb = substr($line, $val, 1);
                        if ($countLine == 0) {
                            if ($nb == 0) {
                                $file = array_diff($file, array($line));
                            }
                        } else {
                            if ($nb == 1) {
                                $file = array_diff($file, array($line));
                            }
                        }
                    }
                }
            }
        }
        foreach ($file as $line) {
            echo ($line);
        }
    }
    ?>
</body>

</html>