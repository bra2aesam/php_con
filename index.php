<?php
require_once('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
     <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.rtl.min.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
 <!-- <style>
  .fa-trash-can {
    margin-left: 50px;
  }
 </style> -->
</head>
<body>
    <div class="container">
<button class="btn btn-primary my-4" ><a href="create.php"class="text-light" >ADD USER</a>

    </button>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Salary</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
<?php
$sql = $con->prepare("SELECT * FROM employeestable");
$sql->execute();
$result = $sql->fetchall();

foreach($result as $row)
    {
       $id = $row['id'] ;
       $Name =$row["Name"];
       $Address=$row["Address"];
       $Salary =$row["Salary"];
  echo "<tr>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" .$row["Name"] . "</td>";
  echo "<td>" . $row["Address"] . "</td>";
  echo "<td>" . $row["Salary"] . "</td>";
  echo "<td><a href='update.php?updateid=".$id."'><i class='fa-sharp fa-solid fa-pencil'></i></a></td>";
  echo "<td><a href='delete.php?deleteid=".$id."'><i class='fa-sharp fa-solid fa-trash-can'></i></a></td>";
}

 ?>
</table>
    </div>
</body>
</html>