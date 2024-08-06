<?php
include ('connect.php');
if(isset($_POST['submit']))
{
  $Dname=$_POST['Dname'];
  $D_id=$_POST['Did'];
  $Pw=$_POST['psw'];
  $Email=$_POST['email'];
  $Phone=$_POST['phno'];

  $sql="INSERT INTO Doctor(Dname, D_id, Pw, Email,Phone)
  VALUES ('$Dname','$D_id','$Pw','$Email','$Phone')";

    $result=mysqli_query($con,$sql);
    if($result){
      echo "Data inserted successfully";
    }else{
      die(mysqli_error($con));
    }
}
?>


<!doctype html>
<html>
<head>
  <title> Please Login </title>
</head>
  <link rel="stylesheet" href="css/adminregister.css">
<body>


  <div class="container" align="center" >
  <form action="" method="POST">

    <label for="psw"><h1>ADMIN REGISTRATION</h1></label><br>
    <label for="uname"><b>Doctor Name</b></label>
    <input type="text" placeholder=" Enter Doctor Name" name="Dname" required><br>
    <label for="uname"><b>Doctor Id</b></label>
    <input type="text" placeholder=" Enter Doctor Id" name="Did" required><br>
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" pattern="[A-za-z\d\.]{8,12}"  title="password must be between  8 and 12 characters in length and contain only letters ,numbers and peroids" required><br>
    <label for="psw"><b>Email Id</b></label>
    <input type="email" placeholder="Enter Email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.com$" required><br>
    <label for="psw"><b>Phone</b></label>
    <input type="number" placeholder="Enter phone number" name="phno"  pattern="[789][0-9]{9}" required><br>
    <input type="submit" name="submit" placeholder="NAME" id="submit">
    </form>

  </div>


    <span class="psw">If already registered <a href="adminlogin.php">Login</a></span>

  </body>
</html>
