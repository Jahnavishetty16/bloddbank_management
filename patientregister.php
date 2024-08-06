<?php
include ('connect.php');
if(isset($_POST['submit']))
{
  $Fname=$_POST['Fname'];
  $Lname=$_POST['Lname'];
  $Username=$_POST['Username'];
  $Password=$_POST['Password'];
  $Gender=$_POST['Gender'];
  $Blood_type=$_POST['Blood_type'];
  $Phno=$_POST['Phno'];
  $Email=$_POST['Email'];
  $Adhar_no=$_POST['Adhar_no'];
  $Hospital_address=$_POST['Hospital_address'];
  $Patient_address=$_POST['Patient_address'];
  $sql="INSERT INTO Patient(Fname,Lname,Username,Password,Gender,Blood_type,Phno,Email,Adhaar_no,Hospital_address,Patient_address)
  VALUES ('$Fname','$Lname','$Username','$Password','$Gender','$Blood_type','$Phno','$Email','$Adhar_no','$Hospital_address','$Patient_address')";
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
  <title> Please register </title>
  <link rel="stylesheet" href="css/patientregister.css">
   <div class="container">
     <div class="card">
       <div class="inner-box">
         <div class="card_front">
              <h2>PATIENT REGISTRATION</h2>
              <form action="" method="POST">
              <input type="text" class="input-box" placeholder="first-name" name="Fname" required>
              <input type="text" class="input-box" placeholder="last-name" name="Lname" required>
              <input type="text" class="input-box" placeholder="username" name="Username" pattern="[A-za-z\d]{6,12}"  title="username must be between  8 and 12 characters in length and contain only letters ,numbers and peroids"  required>
              <input type="password" class="input-box" placeholder="password"  name="Password" pattern="[A-za-z\d\.]{8,12}"  title="password must be between  8 and 12 characters in length and contain only letters ,numbers and peroids"  required>
              <p>Gender</p>
              <select name="Gender">
              <option value="Male">Male</option>
              <option value="Female">Female</option>
             </select>
              <p>Required Blood Type</p>
              <select name="Blood_type">
              <option value="A+">A+</option>
              <option value="A-">A-</option>
              <option value="B+">B+</option>
              <option value="B-">B-</option>
              <option value="AB+">AB+</option>
              <option value="AB-">AB-</option>
              <option value="O+">O+</option>
              <option value="O-">O-</option>
              </select>
              <input type="number" class="input-box" placeholder="phone-no"  name="Phno"  pattern="[789][0-9]{9}"  required>
              <input type="text" class="input-box" placeholder="email"  name="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.com$" required>
              <input type="number" class="input-box" placeholder="adhaar-no" name="Adhar_no" pattern="^[2-9]{1}[0-9]{3}\\s[0-9]{4}\\s[0-9]{4}$" required>
              <input type="text" class="input-box" placeholder="Hospital Address" name="Hospital_address" required>
              <input type="text" class="input-box" placeholder="Home Address"  name="Patient_address"required>
              <input type="submit" name="submit" placeholder="NAME" id="submit">
              </form>
         </div>
       </div>
     </div>
   </div>
