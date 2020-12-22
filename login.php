<html>
<head>
    <title>Welcome GITians</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
  <body>
    <br></br>
    <h3>WELCOME GITians</h3>
    <p style="color:white; text-align:center;">Find all your activities in one place</p>

    <div class="container">
      <div class="login-box">
      <div class="row">
        <div class="col-md-6 login-left">

          <h2> Login Here </h2>
          <form action="validation.php" method="post">
            <div class="form-group">
              <label>Email ID</label>
              <input type="email" name="email" class="form-control" required>
            </div>
            <div class="form-group">
              <label> Password</label>
              <input type="password" name="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary"> Login </button>


          </form>
        </div>

        <div class="col-md-6 login-right">
          <h2> Register Here </h2>
          <form action="registration.php" method="post">
            <div class="form-group">
              <label>First Name</label>
              <input type="text" name="fname" class="form-control" required>
            </div>

            <div class="form-group">
              <label>Last Name</label>
              <input type="text" name="lname" class="form-control" required>
            </div>

            <div class="form-group">
              <label>USN</label>
              <input type="text" name="usn" class="form-control" required minlength="8" maxlength="20" size="20">
            </div>

            <div class="form-group">
              <label>Contact Number (10 Digits)</label>
              <input type="tel"  name="contact" class='form-control' pattern="[0-9]{10}" required maxlength="10">

            </div>

            <div class="form-group">
              <label>Email ID</label>
              <input type="email" name="email" class="form-control" required>
            </div>

            <div class="form-group">
              <label>Password (10 characters MAX)</label>
              <input type="password" name="password" class="form-control" required minlength="10" maxlength="10" size="10">
            </div>
            <p id="message"></p>
            <button type="submit" class="btn btn-primary"> Register </button>


          </form>
        </div>
      </div>


</div>
    </div>

  </body>

</html>
