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

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "cheatsheet";
    $tablename = "cheatinfo";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }


    $name = $email = $gender = $comment = $website = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $regno = $_POST["regnoValue"];
        $name = $_POST["nameValue"];
        $email = $_POST["emailValue"];
        $password = $_POST["passValue"];
        $gender = $_POST["genderValue"];
        $country = $_POST["countryValue"];
        $address = $_POST["addressValue"];
        $phCountry = $_POST["phCountry"];
        $phvalue = $_POST["telValue"];
        $phno = $phCountry . " " . $phvalue;
        $dob = $_POST["dobValue"];
        $portfolio = $_POST["urlValue"];


        // echo $regno." ".$name." ".$email." ".$password." ".$gender." ".$country." ".$address." ".$phno." ".$dob." ".$portfolio;

        $sql = "SELECT * FROM $tablename WHERE regno='$regno'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<p>user already exists, login or signup with new credentials.....</p>";
            echo "<a href='signup.php'><button>back to signup</button></a>";
            echo "<a href='login.php'><button>back to login</button></a>";
        } else {

            session_start();
            $_SESSION['user'] = $name;

            $sql = "INSERT INTO $tablename (regno, name, email, password, gender, country, address, phno, dob, portfolio)
            VALUES ('$regno', '$name', '$email', '$password', '$gender', '$country', '$address', '$phno', '$dob', '$portfolio')";

            if ($conn->query($sql) === TRUE) {

                $xml = new DOMDocument("1.0", "UTF-8");
                $xml->load("../xmlPages/signin.xml");

                $rootTag = $xml->getElementsByTagName("document")->item(0);

                $dataTag = $xml->createElement("data");

                $regnoTag = $xml->createElement("regno", $_POST['regnoValue']);
                $usernameTag = $xml->createElement("username", $_POST['nameValue']);
                $passwordTag = $xml->createElement("password", $_POST['passValue']);
                $genderTag = $xml->createElement("gender", $_POST['genderValue']);
                $countryTag = $xml->createElement("country", $_POST['countryValue']);
                $addressTag = $xml->createElement("address", $_POST['addressValue']);
                $phnoTag = $xml->createElement("phno", $_POST['telValue']);
                $dobTag = $xml->createElement("dob", $_POST['dobValue']);
                $portfolioTag = $xml->createElement("portfolio", $_POST['urlValue']);

                $dataTag->appendChild($regnoTag);
                $dataTag->appendChild($usernameTag);
                $dataTag->appendChild($passwordTag);
                $dataTag->appendChild($genderTag);
                $dataTag->appendChild($countryTag);
                $dataTag->appendChild($addressTag);
                $dataTag->appendChild($phnoTag);
                $dataTag->appendChild($dobTag);
                $dataTag->appendChild($portfolioTag);

                $rootTag->appendChild($dataTag);

                $xml->save("../xmlPages/signin.xml");

                echo "New user created successfully";
                sleep(1);

                header("Location: login.php");
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
    }

    $conn->close();

    ?>
</body>

</html>