

<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" media="screen" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />
</head>

<body>
<div class="container">
<table class="table table-striped">
  <thead>
    <tr class="success">
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Descrption</th>
      
    </tr>
  </thead>
  <tr>
<?php
include_once './includes/db.config.php';

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, news_title,news_description FROM news";
$result = $conn->query($sql);
 $count = 1;
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) { 
    $id=$row["id"];
   echo ' <tr >';
   echo '<td hidden >' .$row["id"]. '</td>';
   echo '<td >' .$count. '</td>';
   echo '<td>' .$row["news_title"]. '</td>';
   echo '<td>' .$row["news_description"]. '</td>';
   echo '<td><a href="/devisprox/edit.php"><button onclick="GetUserDetails('.$row['id'].')" class="btn btn-warning">Update</button></a>
             <a href="/devisprox/delete.php"><button onclick="DeleteUser('.$row['id'].')" class="btn btn-danger">Delete</button></a>
         </td>';
  
   $count++;
 }
} else {
    echo "0 results";
}
?>
</body>

</html>



