<?php
require_once('config.php');
if (isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

   $sql= "DELETE FROM employeestable WHERE id=$id";
  if($con->query($sql)==true){
    // echo 'Deleted Successfull';
    header('location:index.php');
    } 
    else{
        echo "Error: " . $sql . "<br>";
    }
 
}





?>
