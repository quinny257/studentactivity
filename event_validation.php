<?php
//session_start();

$con = mysqli_connect('localhost','root','root');
mysqli_select_db($con,'studentactivity');

$u=$_POST['usn'];
$e = $_POST['email'];
$eCategory=$_POST['event_category'];
$eName=$_POST['event_name'];
$ePlace=$_POST['event_place'];
$eDate=$_POST['event_date'];
$eSecured=$_POST['event_secured'];


$s = "select * from student where email = '$e' && usn='$u'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);


if($num == 1)
  {
    $reg = "insert into activity(id,category,name,place,date,secured) values ((select id from student where email = '$e'),'$eCategory','$eName','$ePlace','$eDate','$eSecured')";
    mysqli_query($con, $reg);
    echo '<script type="text/JavaScript">
    alert("Event Registration Successful");
    window.location.href="home.php";
    </script>';

  }
else
  {
    echo '<script type="text/JavaScript">
    alert("Email or USN do not match.(Check Case)");
    window.location.href="event.php";
    </script>';

  }

?>
