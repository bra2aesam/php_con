<?php 
require_once('config.php');
$id =$_GET['updateid'];
$sql ="SELECT * FROM employeestable WHRER id=$id";

if(isset( $_POST['submit']))
{
    $Name = $_POST['Name'];
    $Address = $_POST['Address'];
    $Salary = $_POST['Salary'];

    $sql="UPDATE employeestable SET id='$id',Name='$Name',Address='$Address',Salary='$Salary' WHERE id=$id";
    // $con->query($sql);  
if ($con->query($sql) == true) {
    // echo "UPdated successfully";

    header('location:index.php');
  } else {
    echo "Error: " . $sql . "<br>";
  } 


}
?>


<!doctype html>

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.rtl.min.css" 
  
</head>
<body>
<h1 >employees</h1>
    <div class="container my-4">
   <form method="post">
  <div class="form-group">
    <label>Name </label>
    <input type="text" class="form-control" placeholder="Enter your Name" name="Name" autocomplete="off">
  </div>
  <div class="form-group">
    <label>Address</label>
    <input type="text" class="form-control" placeholder="Enter your Address" name="Address" autocomplete="off">
  </div>
  <div class="form-group">
    <label>Salary</label>
    <input type="text" class="form-control" placeholder="Enter your Salary" name="Salary" autocomplete="off">
  </div>

  <button type="submit" name="submit"  class="btn btn-primary">Update</button>
</form>
</div>

</body>
</html>
