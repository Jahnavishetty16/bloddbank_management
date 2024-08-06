<?php

 include 'connect.php';

 if(isset($_POST['submit'])){

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
   $Do_address=$_POST['Doaddress'];
   $BB_id=$_POST['Bid'];
   $BB_name=$_POST['bbname'];
   $Blood_no=$_POST['Blood_no'];
   $BB_address=$_POST['bbaddress'];
   $q = "update Donor set Do_id='$Do_id',Fname='$Fname',Lname='$Lname',Gender='$Gender',Blood_type='$Blood_type',Blood_pressure='$Blood_pressure',Age='$Age', Weight='$Weight',Phno='$Phno',Email='$Email', Adhar_no='$Adhar_no',D_id='$Did',Do_address='$Do_address' where Do_id= '$Do_id' ";
   $q1 = "update Bloodbank set BB_id='$BB_id',BB_name='$BB_name',Blood_no='$Blood_no',Do_id='$Do_id',Donor_fname='$Fname',Donor_lname='$Lname',Blood_type='$Blood_type',BB_address='$BB_address',D_id='$Did' where Blood_no= '$Blood_no' ";
   $query = mysqli_query($con,$q);
   $query = mysqli_query($con,$q1);
   echo 'Donor Details Updated Successfully';
   header('location:donordetails.php');

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
               <h2>UPDATE DONOR DETAILS</h2>
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
                  <input type="number" class="input-box" placeholder="phone-no" name="phno" required>
                  <input type="email" class="input-box" placeholder="email" name="email"required>
                  <input type="number" class="input-box" placeholder="adhaar-no" name="adhar" required>
                  <input type="text" class="input-box" placeholder="Doctor-id" name="Did" required>
                  <input type="text" class="input-box" placeholder="Address" name="Doaddress"required>
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
