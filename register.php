<html>
<head></head>

<?php 
require 'config.php';
if (isset($_POST['submit']))
{
$username=$_POST['username'];
$password=$_POST['password'];
$fname=$_POST['fname'];
$family=$_POST['family'];
$datebirth=$_POST['datebirth'];
$email=$_POST['email'];
$sql="INSERT INTO logins (id,username,password,firstname,family,datebirth,email) VALUES 
    (NULL,'$username','$password','$fname','$family','$datebirth','$email')";
  mysqli_query($connect,$sql);
  header ("Location: index.php");

}


?>



<body style="background-color: #1589FF  ; height: 100% ;">
<center>
<br><br>
<a href="index.php">Index Page >></a>
<br><br>
<form method="post" action ="">
     Username <input type ="text" name="username" placeholder="username"  /><br><br>
     Password    <input type ="password" name="password" maxlength="4"  /><br><br>
   First Name <input type ="text" name="fname" /><br><br>
   Family <input type ="text" name="family"    /><br><br>
   Date Of Birth <input type ="date" name="datebirth"  /><br><br>
   Email <input type ="text" name="email"  /><br><br><br><br>
     <input type="submit" name="submit" value="Register" />
</form>
</center>
</body>
</html>