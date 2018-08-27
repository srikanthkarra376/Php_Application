
<?php
include_once './includes/db.config.php';
$title = $_POST['title'];
$description = $_POST['description'];


//check for the error 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//Insert- values in to db
$sql = "INSERT INTO news (news_title,news_description)
VALUES ('$title','$description')";


if ($conn->query($sql) === TRUE) {
  echo "<script> location.href='/devisprox/show.php'; </script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

mysqli_close($conn); 



