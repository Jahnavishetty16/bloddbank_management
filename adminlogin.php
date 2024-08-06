<?php
include ('connect.php');
if(isset($_POST['submit'])){
  $Did=$_POST['Did'];
  $Pw=$_POST['psw'];


  $stmt=$con->prepare("select * from Doctor where D_id= ?");
  $stmt->bind_param("s",$Did);
  $stmt->execute();
  $stmt_result=$stmt->get_result();
  if($stmt_result->num_rows>0){
      $data=$stmt_result->fetch_assoc();
      if($data['Pw']==$Pw && $data['D_id']==$Did){
          echo "<h2>login success</h2>";
          header('Location: adminhome.html');
      }else{
        echo "<h2>Invalid Id or Password</h2>";
      }

  }else{
      echo "<h2>Invalid Id or Password</h2>";
  }
}
  ?>

<!doctype html>
<html>
<head>
  <title> Please Login </title>
</head>
  <link rel="stylesheet" href="css/adminlogin.css">
<body>
  <div class="container" align="center">
    <form action="" method="POST">
    <label for="psw"><h1>ADMIN LOGIN</h1></label><br>
    <label for="uname"><b>Doctor Id</b></label>
    <input type="text" placeholder="Enter Doctor Id" name="Did" required><br>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required><br>
    <br>
    <input type="submit" name="submit" placeholder="NAME" id="submit">
  </div>
  </form>
  </div>
</body>
</html>
