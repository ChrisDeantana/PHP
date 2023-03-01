<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP String</title>
</head>
<body>
    <?php
        $my_str = 'World';
        echo "Hello, $my_str!<br>";      // Displays: Hello World!
        echo 'Hello, $my_str!<br>';      // Displays: Hello, $my_str!
        
        echo '<pre>Hello\tWorld!</pre>'; // Displays: Hello\tWorld!
        echo "<pre>Hello\tWorld!</pre>"; // Displays: Hello   World!
        echo 'I\'ll be back<br>' ;            // Displays: I'll be back

        // Display reversed string
        echo strrev($my_str) . "<br>";

        $my_str2 = 'Welcome to Tutorial Republic';
 
        // Outputs: 28
        echo strlen($my_str2) . "<br>";

        $my_str3 = 'The quick brown fox jumps over the lazy dog.';
 
        // Outputs: 9
        echo str_word_count($my_str3) . "<br>";

        $my_str4 = 'If the facts do not fit the theory, change the facts.';
 
        // Display replaced string
        echo str_replace("facts", "truth", $my_str4, $count) . "<br>";
        echo "The text was replaced $count times.<br>";

        $x = "Hello";
        $y = " World!";
        echo $x . $y . "<br>"; // Outputs: Hello World!
        
        $x .= $y;
        echo $x; // Outputs: Hello World!
    ?>
</body>
</html>