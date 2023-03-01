<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Function</title>
</head>
<body>
    <?php
        // Defining function
        function whatIsToday(){
            echo "Today is ". date('l') . "<br>";
        }

        // Calling function
        whatIsToday();

        function getSum($num1, $num2){
            $sum = $num1 + $num2;
            return $sum;
        }
        echo getSum(10,20) . "<br>";

        function customFont($font, $size=1.5){
            echo "<p style=\"font-family: $font; font-size: {$size}em;\">Hello, world!</p>";
        }
        customFont("Arial", 2);
        customFont("Times", 3);
        customFont("Courier");

        function divideNumbers($dividend, $divisor){
            $quotient = $dividend / $divisor;
            $array = array($dividend, $divisor, $quotient);
            return $array;
        }
         
        // Assign variables as if they were an array
        list($dividend, $divisor, $quotient) = divideNumbers(10, 2);
        echo "$dividend<br>";  // Outputs: 10
        echo "$divisor<br>";   // Outputs: 2
        echo "$quotient<br>";  // Outputs: 5

        // Pass by Reference
        function selfMultiply(&$number){
            $number *= $number;
            return $number;
        }
         
        $mynum = 5;
        echo "Before function : $mynum<br>"; // Outputs: 5
         
        selfMultiply($mynum);
        echo "After function : $mynum<br>"; // Outputs: 25
    ?>
</body>
</html>