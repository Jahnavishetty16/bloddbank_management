<?php
include ('connect.php');
if(isset($_POST['submit']))
{
  $Do_id=$_POST['Do_id'];
  $Fname=$_POST['fname'];
  $Lname=$_POST['lname'];
  $Gender=$_POST['gender'];
  $Blood_type=$_POST['bloodtype'];
  $Blood_pressure=$_POST['BP'];
  $Age=$_POST['age'];
  $Weight=$_POST['weight'];
  $Phno=$_POST['phno'];
  $Email=$_POST['email'];
  $Adhar_no=$_POST['adhar'];
  $Did=$_POST['Did'];
  $Do_address=$_POST['Do_address'];
  $BB_id=$_POST['Bid'];
  $BB_name=$_POST['bbname'];
  $Blood_no=$_POST['Blood_no'];
  $BB_address=$_POST['bbaddress'];
  $sql="INSERT INTO Donor(Do_id,Fname,Lname,Gender,Blood_type,Blood_pressure,Age,Weight,Phno,Email,Adhar_no,D_id,Do_address)
  VALUES ('$Do_id','$Fname','$Lname','$Gender','$Blood_type','  $Blood_pressure','$Age','$Weight','$Phno','$Email','$Adhar_no','$Did','$Do_address')";
  $sql1="INSERT INTO Bloodbank(BB_id,BB_name,Blood_no,Do_id,Donor_fname,Donor_lname,Blood_type,BB_address,D_id)
  VALUES ('$BB_id','$BB_name','$Blood_no','$Do_id','$Fname','$Lname','$Blood_type','$BB_address','$Did')";
    $result=mysqli_query($con,$sql);
    $result1=mysqli_query($con,$sql1);
    if($result && $result1){
      echo "Data inserted successfully";
    }else{
      die(mysqli_error($con));
    }
}
?>
<!doctype html>
<html>
<head>
  <title> Please register </title>
  <link rel="stylesheet" href="css/Donorregister.css">
   <div class="container">
     <div class="card">
       <div class="inner-box">
         <div class="card_front">
              <h2>DONOR REGISTRATION</h2>
              <form action="" method="POST">
                 <input type="text" class="input-box" placeholder="donor-id"  name="Do_id"  required>
                 <input type="text" class="input-box" placeholder="first-name" name="fname" required>
                 <input type="text" class="input-box" placeholder="last-name" name="lname" required>
                 <p>Gender</p>
                 <select  name="gender">
                 <option value="Male">Male</option>
                 <option value="Female">Female</option>
                </select>
                 <p>Blood Type</p>
                 <select  name="bloodtype">
                 <option value="A+">A+</option>
                 <option value="A-">A-</option>
                 <option value="B+">B+</option>
                 <option value="B-">B-</option>
                 <option value="AB+">AB+</option>
                 <option value="AB-">AB-</option>
                 <option value="O+">O+</option>
                 <option value="O-">O-</option>
                 </select>
                 <input type="text" class="input-box" placeholder="Blood Pressure" name="BP" required>
                 <input type="number" class="input-box" placeholder="age" name="age" required>
                 <input type="text" class="input-box" placeholder="weight" name="weight" required>
                 <input type="number" class="input-box" placeholder="phone-no" name="phno"  pattern="[789][0-9]{9}" required>
                 <input type="email" class="input-box" placeholder="email" name="email"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.com$"required>
                 <input type="number" class="input-box" placeholder="adhaar-no" name="adhar" pattern="^[2-9]{1}[0-9]{3}\\s[0-9]{4}\\s[0-9]{4}$" required>
                 <input type="text" class="input-box" placeholder="Doctor-id" name="Did" required>
                 <input type="text" class="input-box" placeholder="Donor Address" name="Do_address"required>
                 <input type="text" class="input-box" placeholder="blood bank id" name="Bid"required>
                 <input type="text" class="input-box" placeholder="Blood bank name" name="bbname"required>
                 <input type="number" class="input-box" placeholder="blood number" name="Blood_no"required>
                 <input type="text" class="input-box" placeholder="Blood bank address" name="bbaddress"required>

                 <input type="submit" name="submit" placeholder="NAME" id="submit">
              </form>
         </div>
       </div>
     </div>
   </div>
