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

        $sql = "DELETE FROM $tablename WHERE title='$title'";

        if ($conn->query($sql) === TRUE) {
            echo "Record deleted successfully";
            sleep(1);

            header("Location: myCheats.php");
        } else {
            echo "Error deleting record: " . $conn->error;
        }

    }

    $conn->close();
?>