<?php
/**
 * Amanda Williams
 * January 6, 2018
 * cupcakes/index.php
 */

#Error Reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cupcakes</title>
</head>
<body>
<h1>Order Cupcakes:</h1>

<!--Order form for cupcakes-->
<form method="POST" action="#">
    <fieldset>
        <label>First Name: <br>
            <input type="text" name="firstName" id="firstName">
        </label><br>
        <label>Last Name: <br>
            <input type="text" name="lastName" id="lastName">
        </label><br>
    </fieldset>
    <fieldset>
        <label>Cupcake Options: <br>
            <?php
            #cupcake flavors array
            $ccFlavors = array("grasshopper"=>"The Grasshopper"
                , "maple"=>"Whiskey Maple Bacon"
                , "carrot"=>"Carrot Walnut"
                , "carmel"=>"Salted Carmel Cupcake"
                , "velvet"=>"Red Velvet"
                , "lemon"=>"Lemon Drop"
                , "tiramisu"=>"Tiramisu");

            foreach ($ccFlavors as $flavorName => $flavorValue) {
                echo "<input type='checkbox' name='$flavorName' id='$flavorName'>$flavorValue <br>";
            }
            ?>
        </label>
    </fieldset>
    <input type="submit" value="Place Order">
</form>


</body>
</html>
