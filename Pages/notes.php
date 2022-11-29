<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../cssFiles/notes.css">
</head>

<body>

    <div class="cursor"></div>
    <nav>
        <p>Cheat<span>Sheet</span></p>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="login.php">Switch account</a></li>
            <li><a href="myCheats.php">My cheats</a></li>
            <li><a href="notes.php">Upload notes</a></li>
            <li class="navbtn"><a href="mainPage.php">Explore notes</a></li>
        </ul>
    </nav>

    <h1>Upload your <span>CheatSheet</span></h1>

    <p id="message"></p>

    <form class="notesForm" id="myform" method="POST">
        <div>
            <p>Enter author name:</p>
            <input type="text" name="author" id="author" placeholder="Jayendra Awasthi" required>
            <p id="author_err"></p>
        </div>

        <div>
            <p>Enter title:</p>
            <input type="text" name="title" id="title" placeholder="What is php?" required>
            <p id="title_err"></p>
        </div>

        <div>
            <p>Enter the content:</p>
            <textarea name="content" id="content" cols="30" rows="10" placeholder="PHP is an acronym for 'PHP: Hypertext Preprocessor' · PHP is a widely-used, open source scripting language · PHP scripts are executed on the server ·" required></textarea>
            <p id="content_err"></p>
        </div>

        <button type="submit" id="submitbtn">upload</button>

    </form>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="../jsFiles/noteValidation.js"></script>
    <script src="../jsFiles/index.js"></script>
</body>

</html>