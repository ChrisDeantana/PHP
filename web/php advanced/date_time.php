<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP date n time</title>
</head>
<body>
    <?php
        echo date("d/m/y") . "<br>";
        echo date("D-M-Y") . "<br>";
        echo date("h:i:s") . "<br>";
        echo date("l, F d, Y h:i:s A") . "<br>";
        echo date("h:i a"). "<br>";

        // time() - to get the current time as a Unix timestamp
        $timestamp = time();
        echo($timestamp) . "<br>";
        echo(date("F d, Y h:i:s", $timestamp). "<br>");

        // mktime() -  to create timestamp based on a specific date and time
        // mktime(hour, minute, second, month, day, year)
        echo mktime(15, 20, 12, 5, 10, 2014);
    ?>
</body>