<?php
/**
 * Amanda Williams
 * January 6, 2018
 * http://awilliams.greenriverdev.com/328/cupcakes/index.php
 * This web page allows a customer to
 *  order cupcakes and recieve the total
 *  price of how much they owe.
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
$errorSelect = "hidden";
$errorName ="hidden";

$firstName = "";
$lastName = "";

if(!empty($_POST)) {
    #make customer name sticky
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];

    if(empty($_POST['firstName']) OR empty($_POST['lastName'])) {
        $errorName = "";
    }

    #validate flavors
    #check at least one flavor is selected.
    if(isset($_POST['flavors'])) {
        $selectedFlavors = $_POST['flavors'];
        #test selections
        foreach ($selectedFlavors as $selFlavor) {
            #if selection is not a flavor option
            if (!array_key_exists($selFlavor, $ccFlavors)) {
                #trigger reprimanding error message
                $errorSelect = '';
            }
        }
    }
    else {
        #If no flavors are selected display error
        $errorSelect = '';
    }

    #If data is valie
    #if($errorSelect) {
        #header("location: output.php");
    #}
}

?>
<!DOCTYPE html>
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
        <legend>Customer Name</legend>
        <?php
            echo "<p $errorName>Please provide a first and last name.</p>";
            ?>
        <label>First Name: <br>
            <input type="text" name="firstName" id="firstName"
                <?php echo "value=$firstName" ?>>
        </label><br>
        <label>Last Name: <br>
            <input type="text" name="lastName" id="lastName"
                   <?php  echo "value=$lastName" ?>>
        </label><br>
    </fieldset>
    <fieldset>
        <legend>Cupcake Options</legend><br>
            <?php
            echo "<p $errorSelect>Please select a cupcake flavor(s).</p>";

            foreach ($ccFlavors as $flavorName => $flavorValue) {
                $checked = "";
                if(in_array($flavorName, $selectedFlavors)) $checked='checked';
                echo "<label>
                            <input type='checkbox' $checked
                            name='flavors[]' value='$flavorName' id='$flavorName'>
                            $flavorValue <br>
                      </label>";
            }
            ?>

    </fieldset>
    <input type="submit" value="Place Order">
</form>


</body>
</html>
