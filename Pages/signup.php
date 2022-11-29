<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Signup</title>
    <link rel="stylesheet" href="../cssFiles/formStyles.css" />
  </head>
  <body>
    <img src="../images/formImg1.png" class="formImage1" />
    <img src="../images/formImg2.png" class="formImage2" />
    <h1>Registration <span class="h1Colored">form</span></h1>
    <form action="insertUser.php" method="post">
      <fieldset>
        <legend>Student info</legend>

        <div class="inputFields">
          <label for="regno">Registration number:&nbsp;&nbsp; </label>
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
          <label for="name">Full name:&nbsp;&nbsp; </label>
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
          <label for="email">Email: &nbsp;&nbsp;</label>
          <br />
          <br />
          <input
            type="email"
            name="emailValue"
            id="email"
            placeholder="jayendra06@gmai.com"
            autocomplete="off"
            required
          />
        </div>

        <div class="inputFields">
          <label for="password">Password: </label>
          <br />
          <br />
          <input
            type="password"
            name="passValue"
            id="pass"
            placeholder="your password"
            required
          />
        </div>
      </fieldset>
      <fieldset>
        <legend>Personalia</legend>
        <div class="inputFields">
          <p>Gender:</p>
          <br />
          <div class="GenderDiv">
            <input type="radio" name="genderValue" id="gender1" checked value="Male"/>
            <label for="gender1">Male</label>
            &nbsp;
            <input type="radio" name="genderValue" id="gender2" value="Female" />
            <label for="gender1">Female</label>
          </div>
        </div>

        <div class="inputFields">
          <label for="country">Select your country: &nbsp;&nbsp;</label>
          <br />
          <br />
          <select name="countryValue" id="country" required>
            <option value="Afghanistan">Afghanistan</option>
            <option value="Australia">Australia</option>
            <option value="Austria">Austria</option>
            <option value="Bangladesh">Bangladesh</option>
            <option value="Brazil">Brazil</option>
            <option value="China">China</option>
            <option value="Egypt">Egypt</option>
            <option value="India" selected>India</option>
            <option value="Japan">Japan</option>
          </select>
        </div>
        <div class="inputFields">
          <label for="address">Address: </label>
          <br />
          <br />
          <textarea
            name="addressValue"
            id="address"
            cols="30"
            rows="10"
            placeholder="529/470(299), rahimnagar, mahanagar, lucknow"
          ></textarea>
        </div>
        <div class="inputFields">
          <label for="phone">Phone number: &nbsp;&nbsp;</label>
          <br />
          <br />
          <select name="phCountry" id="PhPrefixes" required>
            <option value="+93">+93</option>
            <option value="+61">+61</option>
            <option value="+43">+43</option>
            <option value="+880">+880</option>
            <option value="+55">+55</option>
            <option value="+86">+86</option>
            <option value="+20">+20</option>
            <option value="+91" selected>+91</option>
            <option value="+81">+81</option>
          </select>
          <input
            type="tel"
            name="telValue"
            id="phone"
            placeholder="8423118426"
          />
        </div>

        <div class="inputFields">
          <label for="dob">DOB: &nbsp;&nbsp;</label>
          <br />
          <br />
          <input type="date" name="dobValue" id="dob" required />
        </div>

        <div class="inputFields">
          <p>Courses:</p>
          <br />

          <div class="coursesDiv">
            <div>
              <input type="checkbox" name="course1" id="course1" />
              <label for="course1">&nbsp;Internet and web programming</label>
            </div>

            <div>
              <input type="checkbox" name="course2" id="course2" />
              <label for="course2">&nbsp;Software engineering</label>
            </div>

            <div>
              <input type="checkbox" name="course3" id="course3" />
              <label for="course3">&nbsp;Cyber security</label>
            </div>

            <div>
              <input type="checkbox" name="course4" id="course4" />
              <label for="course4">&nbsp;Microprocessors</label>
            </div>

            <div>
              <input type="checkbox" name="course5" id="course5" />
              <label for="course5">&nbsp;Advanced C programming</label>
            </div>
          </div>
        </div>

        <div class="inputFields">
          <label for="url">Portfolio url: &nbsp;&nbsp;</label>
          <br /><br />
          <input type="url" name="urlValue" id="url" />
        </div>

        <div class="inputFields">
          <label for="file">Upload CV: &ensp;</label>
          <input type="file" name="fileValue" id="file" />
        </div>
      </fieldset>

      <div class="buttons">
        <button type="submit" class="btn">submit</button>
        <button type="reset" class="btn">reset</button>
      </div>
    </form>

    <p style="text-align: center;">Already have an account? <a href="login.php" style="color: #ffac47;text-decoration: none;"> login here</a></p>
  </body>
  <script src="../jsFiles/signup.js"></script>
</html>
