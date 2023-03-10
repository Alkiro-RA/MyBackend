<!DOCTYPE html>
<html>
    <p> Calculate factorial </p>
    <form method="post" action="control-structures.php">
        <label for="factorial">Input a number: </label>    <!-- input's id links with label's for -->
        <input type="number" step="0.02" id="factorial" name="factorial">  <!-- input's name is used with $_POST[input_name] -->
        <input type="submit" value="Calculate">
    </form> 
    <br>
</html>

<?php
$number = $_POST;
$factorial = 1;

for ($i = 0; $i <= $number; $i++ ) {
    $factorial = $factorial * $i;
    $isDone = true;
}

echo "Factorial of $number = $factorial";
?>





