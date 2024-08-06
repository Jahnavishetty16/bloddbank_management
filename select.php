<?php include 'connect.php';?>
<?php
$Blood_no = $_GET['Blood_no'];
 $q = " DELETE FROM Bloodbank  WHERE Blood_no = '$Blood_no' " ;
 echo  "Blood  number $Blood_no from blood bank has been booked successfully by the user";
 mysqli_query($con, $q);

?>

<html>
<head>
<br>
<Title>Donor Details</title>
<style type="text/css">
  body{
     background-color:RGB(128,128,128);
  }
</style>
</head>
</html>
