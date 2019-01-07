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

<?php
#cupcake flavors array
$ccFlavors = array("grasshopper"=>"The Grasshopper"
, "maple"=>"Whiskey Maple Bacon"
, "carrot"=>"Carrot Walnut"
, "carmel"=>"Salted Carmel Cupcake"
, "velvet"=>"Red Velvet"
, "lemon"=>"Lemon Drop"
, "tiramisu"=>"Tiramisu");

$selectedFlavors = array();

if(!empty($_POST)) {
    #validate flavors
    #check at least one flavor is selected.
    if(isset($_POST['flavors'])) {
        $selectedFlavors = $_POST['flavors'];
        foreach($selectedFlavors as $selFlavor) {
            if(!in_array($selFlavor, $ccFlavors)) {
                #replace with hidden spans in code
                echo "Invalid Selection: Please choose a valid flavor.";
                $isValid = FALSE;
                break;
            }
        }
    }
    else {
        #return "Please select a flavor."
    }
}

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

            foreach ($ccFlavors as $flavorName => $flavorValue) {
                $checked = "";
                if(in_array($flavorName, $selectedFlavors)) $checked='checked';
                echo "<input type='checkbox' $checked
                        name='flavors[]' value='$flavorName' id='$flavorName'
                        >$flavorValue <br>";
            }
            ?>
        </label>
    </fieldset>
    <input type="submit" value="Place Order">
</form>


</body>
</html>
