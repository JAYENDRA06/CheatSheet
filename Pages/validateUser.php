<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap');

    body {
        font-family: 'Montserrat', sans-serif;
        background-color: #2B2B2B;
        text-align: center;
    }

    p {
        margin-top: 3rem;
        color: white;
    }

    button {
        margin: 20px;
        border: 0px;
        border-radius: 5px;
        padding: 10px 20px;
        background-color: #FFAD47;
        color: #2B2B2B;
    }
</style>

<body>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $xml = simplexml_load_file('../xmlPages/signin.xml');
        $list = $xml->data;
        $temp = false;

        for ($i = 0; $i < count($list); $i++) {
            if ($list[$i]->regno == $_POST["regnoValue"] && $list[$i]->username == $_POST["nameValue"] && $list[$i]->password == $_POST["passValue"]) {
                $temp = true;
            }
        }

        if (!$temp) {
            echo "<p>user does not exist, signin to create an new account.....</p>";
            echo "<a href='signup.php'><button>back to signup</button></a>";
            echo "<a href='login.php'><button>back to login</button></a>";
        }
    }

    ?>


    <?php

    if ($temp) {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "cheatsheet";
        $tablename = "cheatinfo";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $regno = $_POST["regnoValue"];
            $name = $_POST["nameValue"];
            $password = $_POST["passValue"];


            $sql = "SELECT * FROM $tablename WHERE regno='$regno'AND name='$name' AND password='$password'";
            $result = $conn->query($sql);

            session_start();
            $_SESSION['user'] = $name;

            if ($result->num_rows > 0) {

                echo "user exists";
                sleep(1);

                header('Location: mainPage.php');
            } else {
                echo "<p>user does not exist, signin to create an new account.....</p>";
                echo "<a href='signup.php'><button>back to signup</button></a>";
                echo "<a href='login.php'><button>back to login</button></a>";
            }
        }

        $conn->close();
    }

    ?>
</body>

</html>