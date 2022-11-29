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

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $title = $_POST["title"];
        $content = $_POST["content"];
        $sql = "UPDATE $tablename SET title='$title', content='$content' WHERE author='Jayendra Awasthi' AND title='$title'";

        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
            sleep(1);

            header("Location: myCheats.php");
        } else {
            echo "Error updating record: " . $conn->error;
        }

    }

    $conn->close();
?>