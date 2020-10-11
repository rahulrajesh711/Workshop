<?php
$username = "root";
$password = "root";
$db="data1";
$conn = mysqli_connect("localhost:3307", $username, $password,$db) or die(mysqli_connect_error());
mysqli_select_db($conn,$db) or die(mysqli_error($conn));
echo "Connected successfully <br>";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Md5</title>
  </head>
  <body>
    <form action="q1_md5.php" method="post">
      <label for="username">Username</label>
      <input type="text" name="name"><br>
     <br>  <label for="username">Password</label>
      <input type="text" name="pass"><br>
      <input type="submit" name="submit">
    </form>
  </body>
</html>
<?php
if (isset($_POST["submit"])) {
  $name=$_POST["name"];
  $pass=Md5($_POST["pass"]);
  $sql="INSERT INTO `data1`( `username`, `password`) VALUES ('$name','$pass')";
  if(mysqli_query($conn, $sql)){
      echo "Records inserted successfully.";
  }
   else{
      echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
  }
  mysqli_close($conn);
}


  ?>