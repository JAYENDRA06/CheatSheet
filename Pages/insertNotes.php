<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "cheatsheet";
    $tablename = "uploadednotes";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }


    $author = $title = $content = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $author = $_POST["author"];
        $title = $_POST["title"];
        $content = $_POST["content"];

        echo $author." ".$title." ".$content;

        $sql = "INSERT INTO $tablename (author, title, content)
        VALUES ('$author', '$title', '$content')";


        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
            sleep(2);
            
            //redirecting back to notes.php
            header("Location: notes.php");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        
    }
    
    $conn->close();

?>
