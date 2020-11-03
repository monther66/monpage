<html>
<head></style>
</head>
<center><a href="index.php"> << Login</a></center><br><br>
<body style="background-color: #FFF380 ; height: 100% ;">

<?php 
require 'config.php';
if (isset($_GET['id']))
{
$id=$_GET['id'];
$sql="SELECT * FROM logins WHERE id=$id";
$result=mysqli_query($connect,$sql);
$row=mysqli_fetch_assoc($result);
$firstname=$row['firstname'];
$family=$row['family'];

}
else
{
header ("Location: index.php");
}

?>


<center >
<br><br><br><br>
  <h1 style=""><?php echo "Hello $firstname $family ";?> </h1>
</center>


</body>




<footer></footer>
</html>