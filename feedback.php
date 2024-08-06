<?php
include ('connect.php');
if(isset($_POST['submit']))
{
  $Name=$_POST['Name'];
  $Email=$_POST['Email'];
  $Phno=$_POST['Phno'];
  $address=$_post['adress'];
  $Description=$_POST['Description'];
  $Suggestion=$_POST['Suggestion'];

  $sql="INSERT INTO Feedback(Name,Email,Phno, address,Description,Suggestion)
  VALUES ('$Name','$Email','$Phno','$address'$Description','$Suggestion')";
  $result=mysqli_query($con,$sql);
  if($result){
      echo "data inserted successful";
    }else{
      die(mysqli_error($con));
    }
}
?>
<!doctype html>
<html>
<head>
  <title> Please Give Feedback </title>
  <link rel="stylesheet" href="css/feedback.css">
   <div class="container">
     <div class="card">
       <div class="inner-box">
         <div class="card_front">
              <h2>USER FEEDBACK</h2>
              <form action="" method="POST">
              <p>Name</p>
              <input type="text" class="input-box" placeholder="name" name="Name" required>
              <p>E-mail ID</p>
              <input type="text" class="input-box" placeholder="email"  name="Email"required>
              <p>Phone Number</p>
              <input type="text" class="input-box" placeholder="phone-no"  name="Phno" required>
              <p>Adress</p>
              <input type="text" class="input-box" placeholder="adress" name="add" required>
              <p>Description</p>
              <input type="text" class="input-box" placeholder="Description" name="Description" required>
              <p>Suggestion</p>
              <input type="text" class="input-box" placeholder="Suggestion" name="Suggestion" required>
              <input type="submit" name="submit" placeholder="NAME" id="submit">
              </form>
         </div>
       </div>
     </div>
   </div>
