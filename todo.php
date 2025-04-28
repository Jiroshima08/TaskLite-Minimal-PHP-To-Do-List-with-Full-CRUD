<?php
    include("database.php");
?>

<!DOCTYPE html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width.
initial-scale=1">
<html lang="en">
<head>
    <title>TO-DO-LIST</title>
</head>
<body>
    <h1> TO-DO-LIST </h1>
    <form method="POST" action="">
        <label> Add more to your day! <br><br></label>
        <input type="text" name="task"><br>
        <br>
        <input type="submit" value="Add to List">
        <br><br>
        <button type="submit" name="remove">Remove Tasks</button>
        <br><br>
    </form>

<?php
    
if (!empty($_POST["task"])) {
    $task = $_POST["task"];
    $file = fopen("todo.txt", "a+");
    if ($file) {
        fwrite($file, $task . "\n"); 
        fclose($file);
    } else {
        echo "Failed to open the file.";
    }
}

if (isset($_POST["remove"])) {
    $file = fopen("todo.txt", "w");
    fwrite($file, ""); 
    fclose($file);
}


$file = fopen("todo.txt", "r");
if ($file) {
    echo "<h2> Your Tasks: </h2>";
    while (($line = fgets($file)) !== false) {
        echo htmlspecialchars($line) . "<br>";
    }
    while (($line = fgets($file)) !== false) {
        echo htmlspecialchars($line) . "<br>";
    }
    fclose($file);
} else {
    echo "Failed to open the file.";
    touch("todo.txt");
}

?>

</body>
</html>
