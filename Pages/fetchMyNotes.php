<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "cheatsheet";
    $tablename = "uploadednotes";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    session_start();

    $sql = "SELECT author, title, content FROM $tablename WHERE author='$_SESSION[user]'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        while($row = $result->fetch_assoc()) {
            echo "<div style='width:100%; margin-top:3rem; font-size:1.1rem; background-color: #2B2B2B; padding: 2rem; border-radius:10px;'>" . "<p style='margin-bottom:20px'><strong style='color: #ffac47;'>Author</strong>: " . $row["author"] . "</p>" . "<p style='margin-bottom:20px'><strong style='color: #ffac47;'>Title:</strong> " . $row["title"]. "</p>" . "<p style='margin-bottom:20px'><strong style='color: #ffac47;'>Content:</strong> <br>" . $row["content"] . "</p>" . "</div>" . "<br>";
        }
    } 
    else {
        echo "0 results";
    }

    $conn->close();
?>