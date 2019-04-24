<?php
  include_once("config.php");
   if(isset($_POST['update']))
     {
        $id=$_POST['id'];
        $name=$_POST['name'];
        $email=$_POST['email'];
        $password=$_POST['password'];
       $sql="Update Registration set name=:name,email=:email,password=:password where id=:id";
       $Query=$con->prepare($sql);
	   $Query->bindparam(':id',$id);
       $Query->bindparam(':name',$name);
       $Query->bindparam(':email',$email);
       $Query->bindparam(':password',$password);
       
        if($Query->execute())
          {
            header("Location:show.php");
          }}
  $id=$_GET['id'];
  $sql="Select * from Registration where id=:id";
  $query=$con->prepare($sql);
  $query->execute(array(":id"=>$id));	
  while($res =$query->fetch(PDO::FETCH_ASSOC))
    {
      $name=$res['name'];
      $email=$res['email'];
      $password=$res['password'];
    }
?>
<html>
<head></head>
<body>
<form action="edit.php" method="POST">
      <input name="name" type="name" value="<?php echo $name; ?>"/> <br> </br>
      <input name="email" type="email"  value="<?php echo $email; ?>"/>  <br> </br>
      <input name="password" type="password"  value="<?php echo $password; ?>"/>  <br></br>
      <input name="id" type="hidden"  value="<?php echo $_GET['id'];?>"/> <br></br>
      <input name="update" type="submit" value="Submit"/>   <br></br>
	   
</form>
</body>
</html>
