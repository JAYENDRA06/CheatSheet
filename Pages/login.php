<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="../cssFiles/login.css" />
  </head>
  <body>
    <h1>Log<span>in</span></h1>

    <div class="mainSection">
      <form class="card" action="validateUser.php" method="POST">
        <div class="inputFields">
          <label for="regno">Registration number: </label>
          <br />
          <br />
          <input
            type="text"
            name="regnoValue"
            id="regno"
            placeholder="20BCE0536"
            autocomplete="off"
            required
          />
        </div>
        <div class="inputFields">
          <label for="name">Username: </label>
          <br />
          <br />
          <input
            type="text"
            name="nameValue"
            id="name"
            placeholder="Jayendra Awasthi"
            autocomplete="off"
            required
          />
        </div>
        <div class="inputFields">
          <label for="pass">Password: </label>
          <br />
          <br />
          <input
            type="password"
            name="passValue"
            id="pass"
            placeholder="your password"
            autocomplete="off"
            required
          />
        </div>
        <button class="btn" type="submit">login</button>
      </form>
      <img src="../images/login.png" alt="">
    </div>

    <p style="text-align: center;">Don't have an account yet?  <a href="signup.php" style="color: #ffac47;text-decoration: none;"> signup here</a></p>
    <script src="../jsFiles/login.js"></script>
  </body>
</html>