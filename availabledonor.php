<html>
<head>
     <title>Search data by Blood Group </title>
     <style type="text/css">
       body{
          background-color:#CCD6DD;
       }
     </style>
</head>
<body>
  <center>
    <h2>Searching For A Blood Bank Details Of Matching User Blood Type From Database Using PHP</h2>
    <div class="container">
      <form class="" action="" method="post">
        <input type="text"  name="blood_type" class="btn" placeholder="Enter Blood type" value="">
        <input type="submit" name="Search" class="btn" value="Search by blood-type"> <br>
        <br>
      <table border="4" cellpadding="3" class="design" align="center">
      <tr class="labels" style="text-decoration:underline;color:#9B2335;">
      <th>Blood Bank Id</th>
      <th>Blood Bank Name</th>
      <th>Blood Number</th>
      <th>Donor FName</th>
      <th>Donor FName</th>
      <th>Blood Type</th>
      <th>Blood Bank Address</th>
      <th>Select</th>
      </tr>

      <?php
      $connection=mysqli_connect("localhost","root","");
      $db=mysqli_select_db($connection,'BBMS');
      if(isset($_POST['Search']))
      {
           $Blood_type=$_POST['blood_type'];
           $query="SELECT * FROM Bloodbank where Blood_type='$Blood_type' ";
           $query_run=mysqli_query($connection,$query);

           while ($row=mysqli_fetch_assoc($query_run))
           {
              ?>
              <tr class="text-center">
             <td> <?php echo $row['BB_id'];  ?> </td>
             <td> <?php echo $row['BB_name'];  ?> </td>
             <td> <?php echo $row['Blood_no'];  ?> </td>
             <td> <?php echo $row['Donor_fname'];  ?> </td>
             <td> <?php echo $row['Donor_lname'];  ?> </td>
             <td> <?php echo $row['Blood_type'];  ?> </td>
             <td> <?php echo $row['BB_address'];  ?> </td>
             <td> <button class="btn-primary btn"> <a href="select.php?Blood_no=<?php echo $row['Blood_no']; ?>" class="text-white"> Select </a> </button> </td>
             </tr>
           </tr>
        <?php

        }

    }
      ?>
    </form>
    </div>
  </center>
</body>
</html>
