<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
    <?php
        function trinaryTest($n)
        {
            $r = $n > 30 ? "greater than 30" : ($n > 20
            ? "greater than 20"
            : ($n >10
            ? "greater than 10"
            : "Input a number atleast greater than 10!"));
            echo $n." : ".$r."\n";
        }
        trinaryTest(32);
        trinaryTest(21);
        trinaryTest(12);
        trinaryTest(4);
    ?>
    </body>
</html>
