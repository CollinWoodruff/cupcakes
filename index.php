<?php
/**
 * Created by PhpStorm.
 * User: Collin Woodruff
 * Date: 1/7/2019
 * Time: 6:51 PM
 */


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cupcake</title>
</head>
<body>
<div id="main">
    <h1>Cupcake</h1>

    <form id="contactForm" method="get" action="" class="container">

        <!-- Contact Info -->
        <fieldset>
            <legend>Contact Info</legend>
            <label>First Name:
                <input type="text" size="20" maxlength="20"
                       name="fname" id="fname" value="<?php $first ?>">
            </label><br>
            <label>Last Name:
                <input type="text" size="20" maxlength="20"
                       name="lname" id="lname" value="<?php $last ?>">
            </label>
        </fieldset>

        <fieldset>
            <legend>Flavors</legend>
            <?php
            $flavors = array("The Grasshopper", "Whiskey Maple Bacon", "Carrot Walnut",
                "Salted Caramel Cupcake", "Red Velvet", "Lemon Drop", "Tiramisu");

            foreach ($flavors as &$value) {
                echo $value . "<label>
                <input type='checkbox' value='cookie'
                       name='flavors[]'>&nbsp
                  </label><p>\n</p>";

            }

            ?>
        </fieldset>

        <input type="submit" value="Order" id="submit">
    </form>
</div>
</body>
</html>