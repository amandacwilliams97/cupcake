<?php
/**
 * Amanda Williams
 * January 6, 2018
 * cupcakes/index.php
 */

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
            <input type="checkbox">
            <input type="checkbox">
            <input type="checkbox">
            <input type="checkbox">
            <input type="checkbox">
            <input type="checkbox">
        </label>
    </fieldset>
    <input type="submit" value="Place Order">
</form>


</body>
</html>
