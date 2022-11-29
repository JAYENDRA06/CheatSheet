<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CheatSheet</title>
    <link rel="stylesheet" href="../cssFiles/main.css">
</head>
<body>
    
    <div class="cursor"></div>
    <nav>
      <p>Cheat<span>Sheet</span></p>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="login.php">Switch account</a></li>
        <li><a href="myCheats.php">My cheats</a></li>
        <li><a href="mainPage.php">Explore notes</a></li>
        <li class="navbtn"><a href="notes.php">Upload notes</a></li>
      </ul>
    </nav>

    <section class="mainSection">
        <h1 class="mainHeading">Recently uploaded <span>CheatSheets</span></h1>
        <div>
          <?php include 'fetchNotes.php' ?>
        </div>
    </section>

    <script src="../jsFiles/index.js"></script>

</body>
</html>