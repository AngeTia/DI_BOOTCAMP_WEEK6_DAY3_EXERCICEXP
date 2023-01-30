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
    function check_vote() //function has been declared
    {
        $name = "Rakesh";
        $age = 19;
        if ($age >= 18) 
        {
            echo $name . ", you Are Eligible For Vote";
        } else {
            echo $name . ", you are not eligible for vote. ";
        }
    }
    check_vote(); //function has been called

    ?>
    </body>
</html>