<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP post n get</title>
</head>
<body>
<?php
    // Get method
    // if(isset($_GET["name"])){
    //     echo "<p>Hi, " . $_GET["name"] . "</p>";
    // }
    // Request variable
    if(isset($_REQUEST["name"])){
        echo "<p>Hi, " . $_REQUEST["name"] . "</p>";
    }
    // Post method
    // if(isset($_POST["name"])){
    //     echo "<p>Hi, " . $_POST["name"] . "</p>";
    //     // echo $_SERVER["PHP_SELF"];
    // }
?>
<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
    <label for="inputName">Name:</label>
    <input type="text" name="name" id="inputName">
    <input type="submit" value="Submit">
</form>
</body>