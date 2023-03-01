<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Application</title>
</head>
<body>
    <?php
        // Defining Constant
        define("URL","https://www.tutorialrepublic.com/php-tutorial");
        $color = "blue";
        $color_array = array("Red","Green","Blue");
        $color_codes = array(
            "Red" => "#ff0000",
            "Green" => "#00ff00",
            "Blue" => "#0000ff"
        );
        $contacts = array(
            array(
                "name" => "Peter Parker",
                "email" => "peterparker@mail.com",
            ),
            array(
                "name" => "Clark Kent",
                "email" => "clarkkent@mail.com",
            ),
            array(
                "name" => "Harry Potter",
                "email" => "harrypotter@mail.com",
            )
        );
        // Access nested value
        echo "Peter Parker's Email-id is: " . $contacts[0]["email"] . "<br>";

        echo "Tutorial on " . URL . "<br>";
        echo "The color of the sky is " . "<h3 style='color:blue'>$color</h3>" . "<br>";
        // str_word_count($color); to counts the number of words in a string
        echo "The type of the variable is " . gettype($color_array) . "<br>";
        var_dump($color_codes);
    ?>
</body>
</html>