<html>
<head>
<br>
<Title>Feedback Details</title>
<style type="text/css">
  body{
     background-color:#E1E8ED;
  }
</style>

</head>
<body>
<h1 align="center"  style=" text-decoration:underline ;color:#3B5998;">Feedback Details</h1>
<table border="4" cellpadding="3" class="design" align="center">
<tr class="labels" style="text-decoration:underline;color:#3B5998;">
<th>Name</th>
<th>Email Id</th>
<th>Phone Number</th>
<th>Adress</t>
<th>Description</th>
<th>Suggestion</th>
</tr>
</body>


<?php
include ('connect.php');
error_reporting(0);
$query="select * from  Feedback";
$data=mysqli_query($con,$query);
$total=mysqli_num_rows($data);



if($total!=0)
{

  while ($result=mysqli_fetch_assoc($data)){
?>
      <tr class="text-center">
     <td> <?php echo $result['Name'];  ?> </td>
     <td> <?php echo $result['Email'];  ?> </td>
     <td> <?php echo $result['Phno'];  ?> </td>
     <td> <?php echo $result['Adress'];  ?> </td>
     <td> <?php echo $result['Description'];  ?> </td>
     <td> <?php echo $result['Suggestion'];  ?> </td>
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
