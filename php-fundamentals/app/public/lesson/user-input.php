<!DOCTYPE html>
<html>
    <p> What's your name? </p>
    <form method="post" action="user-input.php">
        <label for="name">Name: </label>    <!-- input's id links with label's for -->
        <input type="text" id="name" name="user-name">  <!-- input's name is used with $_POST[input_name] -->
        <input type="submit" value="OK">
    </form> 
    <br>
</html>

<?php
// $_POST stores values from inputs
$name = $_POST["user-name"];
echo "Hello, $name !";
?>