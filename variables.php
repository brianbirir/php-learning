<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Variables</title>
</head>
<body>
    <h1>PHP Variables</h1>
    <p>
        <?php
            $myVar1 = "HELLO";
            $myVar2 = "WORLD";
            echo $myVar1." ".$myVar2;
        ?>
    </p>
    <p>
        <?php 
            $numbers = array(1,23,45,67);
            echo $numbers[1];
            // print_r($numbers);
        ?>
    </p>
    <br />
    <p>
        <?php
            echo "Demo associative arrays";
            $ages = array(
                "John" => 23,
                "Mary" => 30,
                "Bob" => 22
            );
            echo "Mary is ".$ages["Mary"];
            echo count($ages);
            // print_r($numbers);
        ?>
    </p>
    <br />
    <p>
        <?php
            echo "Demo for loop <br />";
            for($i = 0; $i <= 5; $i++) {
                echo $i."<br />";
            }
        ?>
    </p>
    <p>
        <?php
            echo "Demo while loop <br />";
            $i = 0;
            while($i <= 10) {
                $i += 1;
                echo $i."<br />";
            }
        ?>
    </p>
        <?php
            echo "Demo foreach loop <br />";
            $numbers = array(1,23,45,67);
            foreach ($numbers as $number) {
                echo 'This is number: '.$number.'<br />';
            }
        ?>
    </p>
</body>
</html>