<?php
  include_once("config.php");
  //$result=mysqli_query($con ,"SELECT * from Registration order by id DESC");
  $result=$con->query("SELECT * From Registration order by id DESC");
  
  
  
?>
 
 <table border="5">

<?php  
 while($row =$result->fetch(PDO::FETCH_ASSOC))
      {
        echo "<tr>";
        echo "<td>".$row['name']."</td>";
        echo"<td>".$row['id']."</td>";
        echo"<td>".$row['email']."</td>";
        echo"<td>".$row['password']."</td>";
        echo "<td><a href=\"delete.php?id=$row[id]\" onclick=\"return confirm('Are you sure?')\">Delete </a></td>";
        echo "<td><a href=\"edit.php?id=$row[id]\" onclick=\"return confirm('Are you sure?')\">Update/Edit </a></td>";
        echo"</tr>";
}
?>
 