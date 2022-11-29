<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CheatSheet</title>
    <link rel="stylesheet" href="../cssFiles/myCheats.css">
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
        <h1 class="mainHeading"><span>CheatSheets</span> uploaded by you</h1>

        <div class="formContainer">
            <form action="deleteNotes.php" class="deletionForm" method="POST">

                <div>
                    <p>Enter title of book to be deleted:</p>
                    <input type="text" name="title" id="title" placeholder="Introduction to HTML" required>
                </div>

                <button type="submit">delete</button>

            </form>
            <form action="updateNotes.php" class="deletionForm" method="POST">

                <div>
                    <p>Enter title of book to be updated:</p>
                    <input type="text" name="title" id="title" placeholder="Introduction to HTML" required>
                </div>

                <div>
                    <p>Enter the updated content:</p>
                    <textarea name="content" id="content" placeholder="Your updated content for this title" required></textarea>
                </div>

                <button type="submit">update</button>

            </form>
        </div>

        <div>
            <?php include 'fetchMyNotes.php' ?>
        </div>
    </section>

    <script src="../jsFiles/index.js"></script>

</body>

</html>