<?php
include ('connect.php');
if(isset($_POST['submit'])){
  $Username=$_POST['Username'];
  $Password=$_POST['Password'];


  $stmt=$con->prepare("select * from Patient where Username= ?");
  $stmt->bind_param("s",$Username);
  $stmt->execute();
  $stmt_result=$stmt->get_result();
  if($stmt_result->num_rows>0){
      $data=$stmt_result->fetch_assoc();
      if($data['Username']==$Username && $data['Password']==$Password){
          echo "<h2>login success</h2>";
          header('Location: patienthome.html');
      }else{
        echo "<h2>invalid username or password</h2>";
      }

  }else{
      echo "<h2>invalid usename or password</h2>";
  }
}
  ?>



<!doctype html>
<html>
<head>
  <title> Please Login </title>
  <link rel="stylesheet" href="css/patientlogin.css">
   <div class="container">
     <div class="card">
       <div class="inner-box">
         <div class="card_front">
              <h2>PATIENT LOGIN</h2>
              <form action="" method="POST">
                 <input type="USERNAME" class="input-box" placeholder="username" name="Username" required>
                 <input type="password" class="input-box" placeholder="password" name="Password" required>
                 <input type="submit" name="submit" placeholder="NAME" id="submit">
              </form>
         </div>
       </div>
     </div>
   </div>
