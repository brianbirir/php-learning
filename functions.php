<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Functions</title>
</head>
<body>

    <h1>
        PHP FUNCTIONS
    </h1>

    <div>
        <?php 
            function greet($name) {
                echo 'Hello '.$name;
            }

            greet("Ben");
        ?>
    </div>
    
</body>
</html>