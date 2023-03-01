<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Loop</title>
</head>
<body>
    <?php
        // While loop
        $i = 0;
        while($i <3){
            $i++;
            echo "The number is $i <br>";
        }

        // Do-While loop
        $i = 0;
        do{
            $i++;
            echo "The number is $i <br>";
        }
        while($i < 3);

        // For loop
        for($i=0;$i<3;$i++){
            echo "The number is $i <br>";
        }

        // Foreach loop
        $colors = array("Red", "Green", "Blue");
        foreach($colors as $value){
            echo "$value<br>";
        }

        $superhero = array(
            "name" => "Peter Parker",
            "email" => "peterparker@mail.com",
            "age" => 18
        );
         
        // Loop through superhero array
        foreach($superhero as $key => $value){
            echo "$key : $value <br>";
        }
    ?>
</body>
</html>