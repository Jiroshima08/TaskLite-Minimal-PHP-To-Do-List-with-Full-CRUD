<?php

    $db_server = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "todolistdb";
    $conn = "";

    try {
        $conn = mysqli_connect($db_server, 
                               $db_user, 
                               $db_pass, 
                               $db_name);
    } catch (PDOException $e) {
        echo "Could not connect! <br>". $e->getMessage();
    }
    
    # FOR CHECKING PURPOSES ONLY
    if ($conn) {
        echo "You are connected! <br>";
    } else {
        $sql = INSERT INTO `todolist` (`task`) 
                VALUES ('?');
        $stmt = prepare($sql);
        $stmt -> execute($task);
        
        
    }

?>