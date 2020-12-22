<?php

session_start();


$con = mysqli_connect('localhost','root','root');

mysqli_select_db($con,'studentactivity');

$f = $_POST['fname'];
$l = $_POST['lname'];
$u = $_POST['usn'];
$c = $_POST['contact'];
$e = $_POST['email'];
$p = $_POST['password'];

$s = "select * from student where email = '$e'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

if($num == 1)
  {
    echo '<script type="text/JavaScript">
    alert("User Already Exists");
    window.location.href="login.php";
    </script>';

  }
else
  {
    $reg = "insert into student(fname,lname,usn,contact,email,password) values ('$f','$l','$u','$c','$e','$p')";
    mysqli_query($con, $reg);
    echo '<script type="text/JavaScript">
    alert("Registered Successfully");
    window.location.href="login.php";
    </script>';
  }

 ?>
