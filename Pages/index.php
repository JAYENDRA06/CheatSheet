<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>CheatSheet</title>
  <link rel="stylesheet" href="../cssFiles/indexStyles.css" />
</head>


<?php

  $xml = simplexml_load_file('../xmlPages/main.xml');
  $list = $xml->data;

?>

<body>
  <div class="loader"><img src="../images/loader.svg" alt=""></div>
  <div class="cursor"></div>
  <nav>
    <p>Cheat<span>Sheet</span></p>
    <ul>
      <li><a href="login.php">Login</a></li>
      <li class="navbtn"><a href="signup.php">SignUp</a></li>
    </ul>
  </nav>

  <div class="mainContent">
    <div class="textSection">
      <p id="text1" class="text">
        <?php
          echo $list[0]->text;
        ?>
      </p>
      <p id="text2" class="text">
        <?php
          echo $list[1]->text;
        ?>
      </p>
      <p id="text3" class="text">
        <?php
          echo $list[2]->text;
        ?>
      </p>

      <p id="text4" class="text">
        <?php
          echo $list[3]->text;
        ?>
      </p>
    </div>
    <img src="../images/mainPage.png" alt="" />
  </div>

  <script src="../jsFiles/index.js"></script>
</body>

</html>