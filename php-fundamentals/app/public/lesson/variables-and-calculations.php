<!DOCTYPE html>
<html>
<p>Calculate circle's length and area</p>
<form action="variables-and-calculations.php" method="post">
    <label for="radius">Circle's radius[cm]: </label>
    <!-- step controls decimal point : default = 1 -->
    <input type="number" step="0.01" id="radius" name="radius">
    <input type="submit" value="Submit">
</form>

<?php
$r = 0;
$pi = 3.14;
echo "Cicle of radius equal to $r cm gives:<br>";
$r = $_POST["radius"];
$lenght = 2 * $pi * $r;
$area = $pi * ($r * $r);

echo "Circle's length = $lenght cm<br>";
echo "Circle's area = $area cm";
?>

</html>