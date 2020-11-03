<html>
<head></head>

<body style="background-color: #C25A7C  ; height: 100% ;">

<?php 

require 'config.php';
if (isset($_POST['submit']))
{
$username=$_POST['username'];
$password=$_POST['password'];
 $sql="SELECT * FROM logins where username='$username' AND password='$password' ";
 $result=mysqli_query($connect,$sql);
 $numrows=mysqli_num_rows($result);
 if ($numrows == 1 )
 {
  $row=mysqli_fetch_assoc($result);
  $id=$row['id'];
  header ("Location: homepage.php?id=$id");
 
 }
 else
 {
 echo "<center><h2><font color='red'>Invalid Username Or Password!</font></h2></center><br>";
 }

}


?>



<center>
<br><br>
<a href="register.php"><< Register Page >></a>
<br><br>
<form method="post" action ="">
     Username <input type ="text" name="username" /><br><br>
	 Password <input type ="password" name="password" /><br><br>
	 
     <input type="submit" name="submit" value="Login" />
</form>
</center>

</body>




<footer></footer>
</html>