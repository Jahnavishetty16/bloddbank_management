<html>
<head>
<br>
<Title>Donor Details</title>
<style type="text/css">
  body{
     background-color:RGB(247,202,201);
  }
</style>

</head>
<body>
<h1 align="center"  style=" text-decoration:underline ;color:#9B2335;">Donor Details</h1>
<table border="4" cellpadding="3" class="design" align="center">
<tr class="labels" style="text-decoration:underline;color:#9B2335;">
<th>Donor Id</th>
<th>First Name</th>
<th>Last Name</th>
<th>Gender</th>
<th>Blood Type</th>
<th>Email</th>
<th>Donor Address</th>
<th>Delete</th>
<th>Update</th>
</tr>
</body>


<?php
include ('connect.php');
error_reporting(0);
$query="select * from  Donor";
$data=mysqli_query($con,$query);
$total=mysqli_num_rows($data);



if($total!=0)
{

  while ($result=mysqli_fetch_assoc($data)){
?>
      <tr class="text-center">
     <td> <?php echo $result['Do_id'];  ?> </td>
     <td> <?php echo $result['Fname'];  ?> </td>
     <td> <?php echo $result['Lname'];  ?> </td>
     <td> <?php echo $result['Gender'];  ?> </td>
     <td> <?php echo $result['Blood_type'];  ?> </td>
     <td> <?php echo $result['Email'];  ?> </td>
     <td> <?php echo $result['Do_address'];  ?> </td>
     <td> <button class="btn-danger btn"> <a href="adelete.php?Do_id=<?php echo $result['Do_id']; ?>" class="text-white"> Delete </a>  </button> </td>
     <td> <button class="btn-primary btn"> <a href="aupdate.php?Do_id=<?php echo $result['Do_id']; ?>" class="text-white"> Update </a> </button> </td>
     </tr>
  <?php
  }

}
else {
  echo "No records found";
}
?>

</table>
</body>
</html>
