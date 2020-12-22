<?php
//session_start();

$con = mysqli_connect('localhost','root','root');
mysqli_select_db($con,'studentactivity');

$e = $_POST['email'];
$u=$_POST['usn'];
$club=$_POST['club'];
$clubName=$_POST['clubName'];
$fY=$_POST['fromYear'];
$tY=$_POST['toYear'];

$s = "select * from student where email = '$e' && usn='$u'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);


if($num == 1)
  {
    $reg = "insert into clubteam(id,club,clubname,from_year,to_year) values ((select id from student where email = '$e'),'$club','$clubName','20$fY','20$tY')";
    mysqli_query($con, $reg);
    echo '<script type="text/JavaScript">
    alert("Club Registration Successful");
    window.location.href="home.php";
    </script>';

  }
else
  {
    echo '<script type="text/JavaScript">
    alert("Email or USN do not match.(Check Case)");
    window.location.href="club.php";
    </script>';

  }

?>
