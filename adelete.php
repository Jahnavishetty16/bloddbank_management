<?php include 'connect.php';?>
<?php
$Do_id = $_GET['Do_id'];

$q = " DELETE FROM Donor  WHERE Do_id = '$Do_id' " ;

mysqli_query($con, $q);

header('location:donordetails.php');

?>
