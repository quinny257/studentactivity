<?php

session_start();
if(!isset($_SESSION['email'])){
  header('location:login.php');
}
$con = mysqli_connect('localhost','root','root');
mysqli_select_db($con,'studentactivity');
?>

<html>
<head>
  <title> Home Page </title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body>

  <div class="container">

  <a class="float-right"  href="logout.php"> LOGOUT </a>

  <h1>Welcome <?php
  $name=$_SESSION['email'];


  $a=explode("@",$name);
  echo $a[0]; ?>, </h1>
  <br></br>
  <h2 style="color:#fff">Clubs Registered Under</h2>
  <?php
  $id = "select id from student where email = '$name'";
  $id_result=mysqli_query($con,$id);
  $id_row = mysqli_fetch_assoc($id_result);


  $sql="select * from clubteam where id = $id_row[id] order by club;";
  $result=mysqli_query($con,$sql);
  ?>
  <center>
  <table class="gridtable">
    <tr>
    <th>Club</th>
    <th>Club Name</th>
    <th>From Year</th>
    <th>To Year</th>
  </tr>
<?php
while($row = mysqli_fetch_assoc($result))
{
?>
  <tr>
    <td><?php echo $row['club'];?></td>
    <td><?php echo $row['clubname'];?></td>
    <td><?php echo $row['from_year'];?></td>
    <td><?php echo $row['to_year'];?></td>
  </tr>
<?php
}
?>
  </table>
</center>

  <br></br>

  <center><b style="color:#fff">_______________________________________________________________________________________________________________________________________</b></center>

  <h2 style="color:#fff">Events/Competition/Activity Details</h2>
  <?php
  $eid = "select id from student where email = '$name'";
  $eid_result=mysqli_query($con,$eid);
  $eid_row = mysqli_fetch_assoc($eid_result);


  $esql="select * from activity where id = $eid_row[id] order by category;";
  $eresult=mysqli_query($con,$esql);
  ?>
  <center>
  <table class="gridtable">
    <tr>
    <th>Event Cateory</th>
    <th>Event Name</th>
    <th>Place</th>
    <th>Date[Y-M-D]</th>
    <th>Place Secured</th>
  </tr>
  <?php
  while($erow = mysqli_fetch_assoc($eresult))
  {
  ?>
  <tr>
    <td><?php echo $erow['category'];?></td>
    <td><?php echo $erow['name'];?></td>
    <td><?php echo $erow['place'];?></td>
    <td><?php echo $erow['date'];?></td>
    <td><?php echo $erow['secured'];?></td>
  </tr>
  <?php
  }
  ?>
  </table>
</center>

  <br></br>

  <button onClick="location.href = 'club.php';" class="btn btn-primary" class="float-left submit-button"> Club Registration </button>
  <button onClick="location.href = 'event.php';" class="btn btn-primary" class="float-left submit-button"> Event/Competition Registration </button>

</div>
</body>
</html>
