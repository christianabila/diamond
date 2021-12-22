<?php
include 'Diamond.php';

if (isset($_POST['letter'])) {
    $diamond = new Diamond();

    echo $diamond->buildDiamond($_POST['letter']);
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Diamond printer</title>
    </head>
    <body>
        <form action="." method="POST">
            <label for="letter">Letter:</label>
            <input type="text" name="letter">
            <button type="submit">Submit</button>
        </form>
    </body>
</html>