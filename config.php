<?php
$host ="Localhost";
$dbuser="root";
$dbpass="";
$dbname="Regform";


try{
$con=new PDO("mysql: host={$host};dbname={$dbname}", $dbuser,$dbpass);

$con-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);     


}catch(PDOException $e){
       echo $e-> getMessage();
}
if($con){
    echo "Seccessfull";
}
else
   {echo "Not"; }



?>