<!DOCTYPE html>
<html>
<body>
<form action="" method="post">
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name"><br>
    <label for="surname">Surname:</label><br>
    <input type="text" id="surname" name="surname"><br><br>
    <input type="submit" value="Submit">
</form>

<?php
if (isset($_POST['name']) && isset($_POST['surname'])) {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    echo "Hello, $name $surname, how are you today?";
}
?>
</body>
</html>
