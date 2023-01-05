<!DOCTYPE html>
<html>
<body>
<form action="" method="post">
    <label for="todo">Todo:</label><br>
    <input type="text" id="todo" name="todo"><br><br>
    <input type="submit" value="Submit">
</form>

<?php
if (isset($_POST['todo'])) {
    $todo = $_POST['todo'];
    $file = 'todos.json';
    file_put_contents($file,$todo . PHP_EOL, FILE_APPEND);
}

$todos = file_get_contents('todos.json');
echo PHP_EOL. $todos;
?>

</body>
</html>





