<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Array Challenge</title>
</head>
<body>

    <?php
        // Task 1
        $break = "<br>";
        $mixed = array('Mango', 'Apple', 'Orange', 'Strawberry', 'Watermelon','Carrots', 'Potatoe', 'Corn', 'Squash', 'Sweet-Potatoe');

        echo $mixed[0].$break;
        echo end($mixed).$break;

        unset($mixed[0]);
        array_push($mixed, 'Grapefruit');
        
        array_shift($mixed);
        echo $mixed[0].$break;
        echo end($mixed).$break;

        $replace = array('Onion', 'Butternut', 'Kale');
        $newMixed = array_splice($mixed, 3, 0, $replace);
        sort($mixed);

        $array_to_string = implode(', ', $mixed);
        echo $array_to_string.$break."<hr>";

        // Task 2

        $taariq = array('age' => 21, 'shoe' => 8, 'height' => 165);

        echo $taariq['age'].' years old'.$break;
        echo $taariq['shoe'].' U.S '.$break;
        echo $taariq['height'].' cm'.$break;

        $taariq['height'] += 10;
        echo $taariq['height'].' cm'.$break;

        $taariq['age'] -= 2;
        echo $taariq['age'].' years old'.$break."<hr>";

        // Task 3

        $taariq = array('age' => 21, 'shoe' => 8, 'height' => 165);
        $evan = array('age' => 20, 'shoe' => 7, 'height' => 155);
        $josh = array('age' => 19, 'shoe' => 6, 'height' => 160);

        $class = array($taariq, $evan, $josh);

        echo $class[0]['height'].$break;
        echo $class[1]['age'].$break;
        echo $class[2]['shoe'].$break;

        $gcobisa = array('age' => 18, 'shoe' => 3, 'height' => 140);
        $class[3] = $gcobisa;
        array_unshift($class, $class[3]);
        unset($class[4]);

        echo $class[0]['height'].$break;
        echo $class[0]['age'].$break;
        echo $class[0]['shoe'].$break.'<hr>';





    ?>
    
</body>
</html>