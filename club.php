
<html>
<head>
  <title>Club Registeration</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
  <div class="container">
  <br></br>
  <h3>Club Registeration</h3>
  <a class="float-right"  href="logout.php"> LOGOUT </a>

  <a class="float-left"  href="home.php"> HOME </a>
  <p style="color:white; text-align:center;">(NOTE: Register for one club at a time)</p>
  <center>
    <div class="col-md-6 login-left" >
    <form action="club_validation.php" method="post" style="text-align:left;" >

      <div class="form-group">
        <label><b>USN</b></label>
        <input type="text" name="usn" class="form-control" required placeholder="Enter your USN" minlength="8" maxlength="20" size="20">
      </div>

      <div class="form-group">
        <label><b>Email ID</b></label>
        <input type="email" name="email" class="form-control" required placeholder="Enter your Email-ID">
      </div>

      <center>
      <input type="radio" id="c1" required name="club" value="Social" onclick="ShowHideDiv() ">
      <label>Social Club</label>
      <input type="radio" id="c2" required name="club" value="Technical" onclick="ShowHideDiv()">
      <label>Technical Club</label>
      <input type="radio" id="c3" required name="club" value="Cultural" onclick="ShowHideDiv()">
      <label>Cultural Club</label>
      <center>
        <div id="dropdown" class="form-group">
          <select style="width:200px;"> <option value="" disabled="disabled" selected>--Choose--</option></select>
        </div>

        <script type="text/javascript">
            function ShowHideDiv()
            {
                var social_club = document.getElementById("c1");
                var tech_club = document.getElementById("c2");
                var cul_club = document.getElementById("c3");

                if(c1.checked)
                {
                  document.getElementById("dropdown").innerHTML = '<select style="width:200px;" id="selectClubName" name="clubName" class="required" required> <option value="" disabled="disabled" selected>--Choose--</option> <option value="Rotaract Club of GIT">Rotaract Club of GIT</option> <option value="RISE Club">RISE Club</option> <option value="NSS">NSS</option> <option value="Shaurya Club">Shaurya Club</option> </select>';
                }
                else if(c2.checked)
                {
                  document.getElementById("dropdown").innerHTML = '<select style="width:200px;" id="selectClubName" name="clubName" class="required" required> <option value="" disabled="disabled" selected>--Choose--</option> <option value="Robotics Club">Robotics Club</option> <option value="Coders Club">Coders Club</option> <option value="Design Club">Design Club</option> <option value="Idea Presentation Club">Idea Presentation Club</option> <option value="Executive Club">Executive Club</option> <option value="E-Sports Club">E-Sports Club</option> </select>';
                }
                else if(c3.checked)
                {
                  document.getElementById("dropdown").innerHTML = '<select style="width:200px;" id="selectClubName" name="clubName" class="required" required> <option value="" disabled="disabled" selected>--Choose--</option> <option value="Drama Club">Drama Club</option> <option value="Music Club">Music Club</option> <option value="Literary Club">Literary Club</option> <option value="Fine Arts Club">Fine Arts Club</option> <option value="Dance  Club">Dance  Club</option> <option value="Quiz Club">Quiz Club</option> <option value="Fashion Club">Fashion Club</option><option value="COPAM">COPAM</option></select>';
                }

            }
        </script>
        </center>
        <b>Please select the Duration that you are/were a part of this club for below.</b>

        <div class="form-group" style="text-align:left;">
          <label><b>From Year</b></label>

          <br><b>20</b>
          <select id="fromYear" name="fromYear" required>
            <?php
            for ($i=10; $i<=99; $i++)
            {
              ?>
                <option value="<?php echo $i;?>"><?php echo $i;?></option>
                <?php
            }
            ?>
          </select>


        </div>

        <div class="form-group" style="text-align:left;">
          <label><b>To Year</b></label>
          <br><b>20</b>
          <select id="toYear" name="toYear" required>
            <?php
            for ($i=11; $i<=99; $i++)
            {
              ?>
                <option value="<?php echo $i;?>"><?php echo $i;?></option>
                <?php
            }
            ?>
          </select>
        </br>
        </div>



      <p id="message"></p>
      <button type="submit" class="btn btn-primary"> Register </button>
    </form>
  </div>
</center>
</div>
</body>
</html>
