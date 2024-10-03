<?php
session_start();

if(!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}


if(isset($_GET['id'])) {
    $id = intval($_GET['id']);

    $conn = new mysqli('localhost', 'root', '', 'photographyweb');

  
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    
    $sql = "DELETE FROM contact WHERE id={$id}";

   
    if ($conn->query($sql) === TRUE) {
       
        header('Location: seeenquires.php');
    } else {
        echo "Error deleting record: " . $conn->error;
    }

   
    $conn->close();
} else {
    echo "No ID provided!";
}
?>