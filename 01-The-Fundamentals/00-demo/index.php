<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
    <style>
        body {
            display: grid;
            place-items: center;
            height: 100vh;
            margin: 0;
            font-family: sans-serif;
        }
    </style>
</head>
<body>
    <?php
        $nameBook = "PHP book";
        $read = true; 
        

        if ($read) {
            $message = "You have read \"$nameBook\"";
        } else {
            $message = "You have not read \"$nameBook\"";
        }
        // elseif ($read == "PHP book") {
        //     $message = "You have read \"$nameBook\"";
        // } 
    ?>

    <h1>
        <!-- <?php
            // $greeting = "Hello";
            // echo $greeting . " " ."Universe";
            // echo "$greeting Everybody!";

            echo $message;

         ?>
         -->

         <?= $message; ?>
    </h1>

    <h2>
        <?= "Hello, World" ?>
    </h2>
</body>
</html> 