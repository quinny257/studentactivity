
<html>
<head>
  <title>Event/Competition Registeration</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
  <div class="container">
  <br></br>
  <h3>Event/Competition Registeration</h3>
  <a class="float-right"  href="logout.php"> LOGOUT </a>
  <a class="float-left"  href="home.php"> HOME </a>
  <p style="color:white; text-align:center;">(NOTE: Register for one Event/Competition at a time)</p>
  <center>
    <div class="col-md-6 login-left" >
    <form action="event_validation.php" method="post" style="text-align:left;" >

      <div class="form-group">
        <label><b>USN</b></label>
        <input type="text" name="usn" class="form-control" required placeholder="Enter your USN" minlength="8" maxlength="20" size="20">
      </div>

      <div class="form-group">
        <label><b>Email ID</b></label>
        <input type="email" name="email" class="form-control" required placeholder="Enter your Email-ID">
      </div>
      <label><b>Category</b></label>
      <center>
      <select style="width:200px;" id="selectEventName" name="event_category" class="required" required>
        <option value="" disabled="disabled" selected>--Choose--</option>
        <option value="Technical/Managerial">Technical/Managerial</option>
        <option value="Cultural">Cultural</option>
        <option value="Social">Social</option>
        <option value="Sports">Sports</option>
      </select></center>

      <div class="form-group">
        <label><b>Name of Event</b></label>
        <input type="text" name="event_name" class="form-control" required placeholder="Enter Name of Event">
      </div>

      <div class="form-group">
        <label><b>Place of Event</b></label>
        <input type="text" name="event_place" class="form-control" required placeholder="Enter Place/Venue of Event">
      </div>

      <div class="form-group">
        <label><b>Date of Event</b></label>
        <input type="Date" name="event_date" class="form-control" required>
      </div>


      <div class="form-group">
      <label><b>Place Secured</b></label>
      <center>
      <select style="width:200px;" id="place" name="event_secured" class="required" required>
        <option value="" disabled="disabled" selected>--Choose--</option>
        <option value="1st">1st</option>
        <option value="2nd">2nd</option>
        <option value="3rd">3rd</option>
        <option value="Participated">Participated</option>
      </select></center>
    </div>



      <center><button type="submit" class="btn btn-primary">Register</button></center>
    </form>
  </div>
</center>
</div>
</body>
</html>
