<?php
include_once("config.php");
if(isset($_POST['submit']))
     {
      $name=$_POST['name'];
      $email=$_POST['email'];
      $pass=$_POST['password'];	  
//$result=mysqli_query($con ,"INSERT into Registration(name,email,password) values('$name','$email','$pass')");
$sql="INSERT INTO Registration(name, email,password) values (:name,:email,:password)";
$Query=$con->prepare($sql);
$Query->bindparam(':name',$name);
$Query->bindparam(':email',$email);
$Query->bindparam(':password',$pass);
$Query->execute(); 
	 }
?>
<html>
<head></head>
<body>
<form action="add.php" method="POST">
      Name: <input name="name" type="name" placeholder= "Enter your Name"/>    <br> </br>
      Email: <input name="email" type="email" placeholder= "Enter your Email"/>  <br> </br>
      Password: <input name="password" type="password" placeholder="Enter your password"/>  <br></br>
      Submit: <input name="submit" type="submit" value="Submit"/>   <br></br>
	   
</form>
</body>
</html>