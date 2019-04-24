<?php
 include_once("config.php");
 $id=$_GET['id'];
 $sql="Delete from Registration where id=:id";
  $query=$con->prepare($sql);
  $query->execute(array(":id"=>$id));
 if($query)
   {
     header("Location:show.php");
   }
?>
