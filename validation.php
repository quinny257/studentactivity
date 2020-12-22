<?php

session_start();

$con = mysqli_connect('localhost','root','root');

mysqli_select_db($con,'studentactivity');

/*$l = $_POST['lname'];
$u = $_POST['usn'];
$c = $_POST['contact'];*/
$e = $_POST['email'];
$p = $_POST['password'];

$s = "select * from student where email = '$e' && password='$p'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

if($num == 1)
  {
    $_SESSION['email']=$e;
    header('location:home.php');
  }
else
  {
    echo '<script type="text/JavaScript">
    alert("Email/Password incorrect OR Student not Registered");
    window.location.href="login.php";
    </script>';

  }

?>
