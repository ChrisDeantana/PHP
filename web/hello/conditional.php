<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Conditional Statements</title>
</head>
<body>
    <?php
        $d = date("D");
        $age = 18;
        if($d == "Fri"){
            echo "Have a nice weekend!<br>";
        } elseif($d == "Sun"){
            echo "Have a nice Sunday!<br>";
        } else{
            echo "Have a nice day!<br>";
        }

        // Ternary Operator
        echo ($age < 18) ? 'Child' : 'Adult'. "<br>";

        // Null Coalescing Operator
        $name = isset($_GET['name']) ? $_GET['name'] : 'anonymous';
        $name = $_GET['name'] ?? 'anonymous';

        // Switch
        $today = date("D");
        switch($today){
            case "Mon":
                echo "Today is Monday. Clean your house.";
                break;
            case "Tue":
                echo "Today is Tuesday. Buy some food.";
                break;
            case "Wed":
                echo "Today is Wednesday. Visit a doctor.";
                break;
            case "Thu":
                echo "Today is Thursday. Repair your car.";
                break;
            case "Fri":
                echo "Today is Friday. Party tonight.";
                break;
            case "Sat":
                echo "Today is Saturday. Its movie time.";
                break;
            case "Sun":
                echo "Today is Sunday. Do some rest.";
                break;
            default:
                echo "No information available for that day.";
                break;
        }
    ?>
</body>
</html>