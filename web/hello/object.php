<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Object</title>
</head>
<body>
    <?php
        class greeting{
            //properties
            public $str = "Hello World!";

            //methods
            function show_greeting(){
                return $this->str;
            }
        }

        //Create object from class
        $message = new greeting;
        echo $message->show_greeting();
        //var_dump($message);
    ?>
</body>
</html>
